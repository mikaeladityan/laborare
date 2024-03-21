<?php

namespace App\Livewire;

use App\IsMobile;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title(null)]
#[Layout('layouts.guest')]
class Home extends Component
{
    public function render(IsMobile $isMobile)
    {
        if ($isMobile->is_mobile === true) {
            return view('livewire.mobile.home');
        } else {
            return view('livewire.home');
        }
    }
}
