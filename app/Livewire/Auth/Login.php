<?php

namespace App\Livewire\Auth;

use App\IsMobile;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest')]
#[Title("Masuk ke Dashboard")]
class Login extends Component
{
    public function render(IsMobile $isMobile)
    {
        if ($isMobile->is_mobile === true) {
            return view('livewire.auth.mobile.login');
        } else {
            return view('livewire.auth.login');
        }
    }
}
