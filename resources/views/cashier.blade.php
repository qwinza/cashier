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
        <div class="cashier-log-container">
            <table>
                <thead>
                    <tr class="table-row-log-heading">
                        <th>No</th>
                        <th>Nama barang</th>
                        <th>Harga</th>
                        <th>Banyaknya</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 10; $i++)
                        <tr class="table-row-log">
                            <td>
                                <br>
                            </td>
                            <td>
                                <br>
                            </td>
                            <td>
                                <br>
                            </td>
                            <td>
                                <br>
                            </td>
                            <td>
                                <br>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        @livewire('cashier-input')
    </div>
    </div>
@endsection
