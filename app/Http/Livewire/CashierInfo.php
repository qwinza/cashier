<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CashierInfo extends Component
{
    public $grandTotal = 0;
    public $payAmount = 0;

    protected $listeners = ['grandTotalChanged'];

    public function render()
    {
        return view('livewire.cashier-info');
    }

    public function grandTotalChanged(int $grandTotal)
    {
        $this->grandTotal = $grandTotal;
    }
}
