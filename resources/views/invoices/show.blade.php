@extends('layouts.master')

@section('title', 'Invoices')

@section('content')
    <div class="invoice-container">
    <div class="invoice-header-container">
        <div class="invoice-title-container">
            <h1>Invoice</h1>
        </div>
        <div>
            <p>Bandung, 15 Maret 2023</p>
            <p>Kepada Yth, Sudirman</p>
            <p>No. Nota N-12321312</p>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama barang</th>
                <th>Harga</th>
                <th>Banyaknya</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 1; $i <= 10; $i++)
                <tr>
                    <td class="centered-text">
                        {{ $i }}
                    </td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                </tr>
            @endfor
        </tbody>
        <tfoot>
            <tr>
                <th class="invoice-footer" colspan="3">Terbilang: Rupiah</th>
                <th class="invoice-footer" colspan="2">Total: Rp. 50000</th>
            </tr>
        </tfoot>
    </table>
    <div class="invoice-footer-container">
        <div>
            <p>Perhatian</p>
            <p>Barang yang sudah dibeli tidak bisa dikembalikan</p>
        </div>
        <div>
            <p>Hormat kami, BLABLABLA</p>
        </div>
    </div>
    </div>
@endsection
