<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Team;
class Teams extends Component
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
        $teams = Team::paginate(10);
        return view('components.teams',compact('teams'));
    }
}
