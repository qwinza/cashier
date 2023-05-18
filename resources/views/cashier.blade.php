@extends('layouts.master')

@section('title', 'Cashier')

@section('styles')
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
@endsection

@section('content')
    <div class="cashier-wrapper">
    <h1 class="head-bang">Vania Store Cashier</h1>
    <div class="cashier-container-grid">
        <div class="cashier-info-container">
            <div class="action-container">
                <button>Batal</button>
                <button>Submit</button>
            </div>
            <div>
                <div class="cashier-info-field">
                    <label for="grand-total">Grand total</label>
                    <div>
                        <span>Rp.</span>
                        <input type="text" id="grand-total" disabled>
                    </div>
                </div>
                <div class="cashier-info-field bayar">
                    <label for="bayar">Bayar</label>
                    <div>
                        <span>Rp.</span>
                        <input type="text" id="bayar">
                    </div>
                </div>
                <div class="cashier-info-field">
                    <label for="kembali">Kembali</label>
                    <div>
                        <span>Rp.</span>
                        <input type="text" id="kembali" disabled>
                    </div>
                </div>
            </div>
        </div>

        @livewire('cashier-log')
        @livewire('cashier-input')
    </div>
    </div>
@endsection
