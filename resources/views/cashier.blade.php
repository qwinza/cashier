@extends('layouts.master')

@section('title', 'Cashier')

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
        <div>
            <table>
                <caption class="table-input-caption">Input</caption>
                <tr>
                    <td>No. Transaksi</td>
                    <td class="grayish right-text">N-00000001</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td class="grayish right-text">15 Maret 2022</td>
                </tr>
                <tr>
                    <td>
                        <label for="customer">Customer</label>
                    </td>
                    <td>
                        <input class="fw-input right-text" type="text" name="customer" id="customer">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama-barang">Nama barang</label>
                    </td>
                    <td>
                        <select class="select-input right-text" id="nama-barang" name="nama-barang">
                            @foreach($products as $product)
                                <option class="right-text" value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td class="grayish right-text"></td>
                </tr>
                <tr>
                    <td>
                        <label for="banyaknya">Banyaknya</label>
                    </td>
                    <td>
                        <input class="fw-input right-text" type="text" name="banyaknya" id="banyaknya">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td class="grayish right-text"></td>
                </tr>
                <tr>
                    <td colspan="2" class="table-input-action-container">
                        <button>Add</button>
                    </td>
                </tr>
                <tr>
                    <td>Total item</td>
                    <td class="grayish right-text">0</td>
                </tr>
            </table>
        </div>
    </div>
    </div>
@endsection
