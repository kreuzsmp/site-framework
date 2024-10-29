<?php

namespace App\View\Components\Templates;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;
    public string $navcolor;

    public function __construct(string $title, string $navcolor)
    {
        $this->title = $title;
        $this->navcolor = $navcolor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.templates.main');
    }
}
