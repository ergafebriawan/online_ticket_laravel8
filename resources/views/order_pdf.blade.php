<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table table-bordered">

            @foreach ($order as $data)
                <tr>
                    <td>ID Order</td>
                    <td>: {{ $data->id_order }}</td>
                </tr>
                <tr>
                    <td>nama tiket</td>
                    <td>: {{ $data->nama_tiket }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: {{ $data->nama_user }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $data->alamat }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $data->email }}</td>
                </tr>
                <tr>
                    <td>No. WhatsApp</td>
                    <td>: +62{{ $data->no_wa }}</td>
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td>: {{ $data->jml_tiket }} Pax</td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td>: Rp. {{ $data->harga }},-</td>
                </tr>
                <tr>
                    <td>Kode Promo</td>
                    <td>: {{ $data->kode }}</td>
                </tr>
                <tr>
                    <td>Potongan Harga</td>
                    <td>: Rp. {{ $data->potongan }},-</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>: Rp. {{ $data->total }},-</td>
                </tr>
                <tr>
                    <td>Waktu Order</td>
                    <td>: {{ $data->created_at }} WIB</td>
                </tr>

            @endforeach
        </table>
    </div>
</body>

</html>
