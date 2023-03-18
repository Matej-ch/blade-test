<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * All of the attributes that are not part of the component's constructor will automatically be added to the component's "attribute bag"
     * e.g. class on component, is accessed as $attributes
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $message,
    )
    {
        //public string $alertType in constructor VS alert-type as attribute on blade component
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    public function shouldRender(): bool
    {
        return $this->type !== 'none';
    }
}
