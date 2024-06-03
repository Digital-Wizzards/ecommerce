<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.dashboard')
            ->layout('components.layouts.admin');
    }
}
