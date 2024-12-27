<?php

namespace App\View\Components\Alert;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Status extends Component
{
    public string $alertMessage = '';
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $alertMessages = config('messages.alert');
        if (session('status')) {
           // $this->alertMessage = session('status');

            $this->alertMessage = $alertMessages[session('status')];
        }

        //dd(session('status'));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert.status');
    }
}
