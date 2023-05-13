<?php

namespace App\Http\Livewire\Admin\Promo;

use App\Models\Promo;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon ;

class Index extends Component
{
    use WithPagination;

    public $promo;

    public $search = '';
    public $showDeleteModal = false;


    public function getDetails($promo){
        if($promo->type == 'order' && $promo->type_of_value == true){
            return '-' . $promo->value . ' % ' . 'off for Order';
        }elseif ($promo->type == 'order' && $promo->type_of_value == false) {
            return '-' . number_format($promo->value,2) . ' EGP ' . 'off for Order';
        }elseif($promo->type == 'product' && $promo->type_of_value == true){
            return '-' . $promo->value . ' % ' . 'off for each Product';
        }elseif ($promo->type == 'product' && $promo->type_of_value == false) {
            return '-' . number_format($promo->value,2) . ' EGP ' . 'off for each Product';
        }
    }

    public function getConditions($promo){
        $conditions = collect([]);

        if($promo->min_purchase > 0){
            $conditions->push('Min Purchase: ' . number_format($promo->min_purchase,2) . 'EGP required');
        }else{
            $conditions->push('No Minimum Purchase required');
        }

        if($promo->purchase_once == true){
            $conditions->push('One time usage per customer');
        }else{
            $conditions->push('Unlimited usage');
        }

        if($promo->must_login == true){
            $conditions->push('Must Login to use');
        }else{
            $conditions->push('No need to Login to use');
        }

        if($promo->max_usage > 0){
            $conditions->push('Max Usage: ' . $promo->max_usage . ' times for whole store');
        }else{
            $conditions->push('No Max Usage');
        }

        return $conditions;
    }

    public function getDate($date){
        return Carbon::parse($date)->isoFormat('MMM Do');
    }

    public function deleteModal(Promo $promo){
        $this->showDeleteModal = true;
        $this->promo = $promo;
    }

    public function delete()
    {   
        $this->promo->delete();
        $this->reset(['showDeleteModal','promo']);
        
        session()->flash('success','This record has been deleted successfully');
    }
    public function render()
    {
        return view('livewire.admin.promo.index',[
            'promos' => Promo::where('name','like','%'.trim($this->search).'%')->paginate(10),
        ]);
    }
}
