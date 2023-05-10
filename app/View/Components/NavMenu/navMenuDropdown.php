<?php

namespace App\View\Components\NavMenu;

use App\Models\Category;
use Illuminate\View\Component;

class navMenuDropdown extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::all()->filter(function ($cat) {
            return $cat->status == 1;
        });
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-menu.nav-menu-dropdown');
    }
}
