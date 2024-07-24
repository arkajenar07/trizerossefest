<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlatIot;

class Penyewaan extends Component
{
    public $alats;

    public function mount()
    {
        $this->alats = Alatiot::all();
    }

    public function render()
    {
        return view('livewire.penyewaan');
    }
}
