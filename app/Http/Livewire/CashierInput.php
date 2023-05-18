<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use NumberFormatter;

class CashierInput extends Component
{
    public $ongoingInvoiceId = 0;
    public $products = [];
    public $product = null;
    public $customer = '';
    public $price = 0;
    public $priceHtml = '';
    public $totalPrice = 0;
    public $totalPriceHtml = '';
    public $qty = 1;

    public function mount()
    {
        $this->products = Product::limit(10)->get();
    }

    public function render()
    {
        return view('livewire.cashier-input');
    }

    public function onProductChange(int $id)
    {
        $this->product = Product::find($id);
        assert(!is_null($this->product));

        $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);

        $this->price = $this->product->price;
        $this->priceHtml = $cf->format($this->price);

        $this->onQtyChange();
    }

    public function onQtyChange()
    {
        $this->totalPrice = $this->price * (int)$this->qty;

        $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
        $this->totalPriceHtml = $cf->format($this->totalPrice);
    }

    public function onAddClick()
    {
        $this->emit('logAdded', $this->customer, $this->product->id, $this->qty, $this->ongoingInvoiceId);
    }
}
