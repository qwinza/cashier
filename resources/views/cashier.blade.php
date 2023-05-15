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
                <caption>Input</caption>
                <tr>
                    <td>No. Transaksi</td>
                    <td>N-00000001</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>15 Maret 2022</td>
                </tr>
                <tr>
                    <td>
                        <label for="customer">Customer</label>
                    </td>
                    <td>
                        <input type="text" name="customer" id="customer">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama-barang">Nama barang</label>
                    </td>
                    <td>
                        <select id="nama-barang" name="nama-barang">
                            <option value="a">a</option>
                            <option value="a">a</option>
                            <option value="a">a</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>5jt</td>
                </tr>
                <tr>
                    <td>
                        <label for="banyaknya">Banyaknya</label>
                    </td>
                    <td>
                        <input type="text" name="banyaknya" id="banyaknya">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>889</td>
                </tr>
                <tr>
                    <td>
                        <button>Add</button>
                    </td>
                </tr>
                <tr>
                    <td>Total item</td>
                    <td>0</td>
                </tr>
            </table>
        </div>
    </div>
    </div>
@endsection