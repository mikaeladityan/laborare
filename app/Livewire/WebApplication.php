<?php

namespace App\Livewire;

use App\IsMobile;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title(null)]
#[Layout('layouts.guest')]
#[Lazy(true)]
class WebApplication extends Component
{
    public function render(IsMobile $isMobile)
    {
        sleep(2);
        if ($isMobile->is_mobile === true) {
            return view('livewire.mobile.web-application');
        } else {
            return view('livewire.web-application');
        }
    }
}
