<?php

namespace App\Http\Livewire\Admin\Promo;

use App\Models\Promo;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;

class Index extends Component
{
    use WithPagination, HasModal;

    public $promo;

    public $search = '';


    public function getDetails(Promo $promo)
    {
        return match (true) {
            $promo->type == 'order' && $promo->type_of_value == true => '-' . $promo->value . ' % ' . 'off for Order',
            $promo->type == 'order' && $promo->type_of_value == false => '-' . number_format($promo->value, 2) . ' EGP ' . 'off for Order',
            $promo->type == 'product' && $promo->type_of_value == true => '-' . $promo->value . ' % ' . 'off for each Product',
            $promo->type == 'product' && $promo->type_of_value == false => '-' . number_format($promo->value, 2) . ' EGP ' . 'off for each Product',
        };
    }

    public function getConditionsOfApplyingPromoCode(Promo $promo)
    {
        $conditions = [];

        $conditions[] = $promo->min_purchase > 0 ? 'Min Purchase: ' . number_format($promo->min_purchase, 2) . 'EGP required' : 'No Minimum Purchase required';

        $conditions[] = $promo->purchase_once == true ? 'One time usage per customer' : 'Unlimited usage';

        $conditions[] = $promo->must_login == true ? 'Must Login to use' : 'No need to Login to use';

        $conditions[] = $promo->max_usage > 0 ? 'Max Usage: ' . $promo->max_usage . ' times for whole store' : 'No Max Usage';

        return $conditions;
    }

    public function formatDate($date)
    {
        return Carbon::parse($date)->isoFormat('MMM Do');
    }

    public function deleteModal(Promo $promo)
    {
        $this->showModal();
        $this->promo = $promo;
    }

    public function delete()
    {
        $this->promo->delete();

        $this->closeModal();

        $this->reset(['promo']);

        session()->flash('success', 'This record has been deleted successfully');
    }
    public function render()
    {
        return view('livewire.admin.promo.index', [
            'promos' => Promo::where('name', 'like', '%' . trim($this->search) . '%')->paginate(10),
        ]);
    }
}
