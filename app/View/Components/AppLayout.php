<?php

namespace App\View\Components;

use App\Models\Website;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $website = Website::first();
        return view('layouts.app', compact('website'));
    }
}