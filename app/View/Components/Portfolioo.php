<?php

namespace App\View\Components;
use App\Portfolio;
use Illuminate\View\Component;



class Portfolioo extends Component
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
        $portfolio = Portfolio::paginate(3);
        return view('components.portfolio',compact('portfolio'));
    }
}
