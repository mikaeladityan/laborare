<?php

namespace App\Livewire;

use App\IsMobile;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest')]
#[Title('Template Website UMKM')]
#[Lazy(true)]
class Umkm extends Component
{
    public function render(IsMobile $isMobile)
    {
        sleep(2);
        if ($isMobile->is_mobile === true) {
            return view('livewire.mobile.umkm');
        } else {
            return view('livewire.umkm');
        }
    }
}
