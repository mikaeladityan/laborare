<?php

namespace App\Livewire;

use App\IsMobile;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title(null)]
#[Layout('layouts.guest')]
class ShowTemplate extends Component
{
    public function render(IsMobile $isMobile)
    {
        if ($isMobile->is_mobile === true) {
            return view('livewire.mobile.show-template');
        } else {
            return view('livewire.show-template');
        }
    }
}
