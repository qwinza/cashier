<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use App\Models\InvoiceLog;
use App\Models\OngoingInvoice;
use Livewire\Component;

class CashierInfo extends Component
{
    public $grandTotal = 0;
    public $payAmount = 0;
    public $ongoingInvoiceId = 0;

    protected $listeners = ['grandTotalChanged'];

    public function render()
    {
        return view('livewire.cashier-info');
    }

    public function onSubmitClick()
    {
        $ongoingInvoice = OngoingInvoice::find($this->ongoingInvoiceId);
        assert(!is_null($ongoingInvoice));

        $invoice = Invoice::create([
            'customer' => $ongoingInvoice->customer,
            'user_id' => $ongoingInvoice->user_id
        ]);

        $ongoingInvoice->logs->each(function (InvoiceLog $log) use($invoice) {
            $log->update(['invoice_id' => $invoice->id]);
        });

        return redirect()->route('invoice.show', $invoice->id);
    }

    public function grandTotalChanged(int $grandTotal, int $ongoingInvoiceId)
    {
        $this->grandTotal = $grandTotal;
        $this->ongoingInvoiceId = $ongoingInvoiceId;
    }
}
