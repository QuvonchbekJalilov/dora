<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Portfolio;
use App\Portcate;
class Portfol extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $portfolio = Portfolio::paginate(10);
        $portcates = Portcate::paginate(3);
        return view('components.portfol',compact('portfolio','portcates'));
    }
}
