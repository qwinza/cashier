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
        @foreach($logs as $log)
            <tr class="table-row-log">
                <td>
                    {{ $loop->index }}
                </td>
                <td>
                    {{ $log['product_name'] }}
                </td>
                <td>
                    {{ $log['priceHtml'] }}
                </td>
                <td>
                    {{ $log['qty'] }}
                </td>
                <td>
                    {{ $log['totalPriceHtml'] }}
                </td>
            </tr>
        @endforeach
        @for($i = 0; $i < 10 - count($logs); $i++)
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
