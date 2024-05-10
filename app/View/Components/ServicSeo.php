<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Servicesseo;
class ServicSeo extends Component
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
        $servicesseo = Servicesseo::paginate(100);
        return view('components.servic-seo',compact('servicesseo'));
    }
}
