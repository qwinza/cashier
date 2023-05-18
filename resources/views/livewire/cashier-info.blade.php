<div class="cashier-info-container">
    <div class="action-container">
        <button wire:click="onCancelClick">Batal</button>
        <button wire:click="onSubmitClick">Submit</button>
    </div>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <div class="cashier-info-field">
            <label for="grand-total">Grand total</label>
            <div>
                <span>Rp.</span>
                <input type="text" id="grand-total" disabled value="{{ number_format($grandTotal, 2, ',', '.') }}">
            </div>
        </div>
        <div class="cashier-info-field bayar">
            <label for="bayar">Bayar</label>
            <div>
                <span>Rp.</span>
                <input type="number" id="bayar" wire:model="payAmount">
            </div>
        </div>
        <div class="cashier-info-field">
            <label for="kembali">Kembali</label>
            <div>
                <span>Rp.</span>
                @php
                    $exchange = (int)$payAmount - $grandTotal;
                    if ($exchange < 0) {
                        $exchange = 0;
                    }
                @endphp
                <input type="text" id="kembali"  value="{{ number_format($exchange, 2, ',', '.') }}"  disabled>
            </div>
        </div>
    </div>
</div>
