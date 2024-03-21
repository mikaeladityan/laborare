<?php

namespace App\Livewire\Auth;

use App\IsMobile;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest')]
#[Title("Daftar Sekarang Juga")]
class Register extends Component
{
    public function render(IsMobile $isMobile)
    {
        if ($isMobile->is_mobile === true) {
            return view('livewire.auth.mobile.register');
        } else {
            return view('livewire.auth.register');
        }
    }
}
