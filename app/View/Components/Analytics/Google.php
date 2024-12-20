<?php

namespace App\View\Components\Analytics;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Google extends Component
{
    /**
     * Create a new component instance.
     */


    public string $id;
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.analytics.google');
    }
}
