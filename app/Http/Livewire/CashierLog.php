<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use NumberFormatter;

class CashierLog extends Component
{
    protected $listeners = ['logAdded'];

    public $logs = [];

    public function render()
    {
        return view('livewire.cashier-log');
    }

    public function logAdded(string $customer, int $productId, int $qty)
    {
        $product = Product::find($productId);
        assert(!is_null($product));

        $cf = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);

        $log = [
            'product_name' => $product->name,
            'priceHtml' => $cf->format($product->price),
            'qty' => $qty,
            'totalPriceHtml' => $cf->format($product->price * $qty)
        ];

        array_push($this->logs, $log);
    }
}
