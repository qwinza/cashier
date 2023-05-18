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
                            <option value="Select product">Select product</option>
                            @foreach($products as $product)
                                <option wire:click="onProductChange({{ $product->id }})" class="right-text" value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td class="grayish right-text">{{ $priceHtml }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="banyaknya">Banyaknya</label>
                    </td>
                    <td>
                        <input wire:model="qty" wire:input="onQtyChange()" class="fw-input right-text" type="number" name="banyaknya" id="banyaknya">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td class="grayish right-text">{{ $totalPriceHtml }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="table-input-action-container">
                        <button>Add</button>
                    </td>
                </tr>
                <tr>
                    <td>Total item</td>
                    <td class="grayish right-text">{{ $qty }}</td>
                </tr>
            </table>
        </div>
