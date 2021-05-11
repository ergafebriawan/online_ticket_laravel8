@extends('layouts.app')

@section('title', 'Booking')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-center bg-primary text-light">
                        <h4 class="card-title"> Pesan Ticket</h4>
                    </div>
                    <div class="card-body">
                        <form action="/detail_order" method="GET">
                            @csrf
                            @foreach ($promo as $item)

                                <input type="hidden" name="id" value="{{ $id }}">

                                <div class="form-group row">
                                    <label for="harga_tiket" class="col-md-4 col-form-label text-md-right">Nama Tiket:
                                    </label>
                                    <div class="col-md-6">
                                        {{ $item->nama_promo }}
                                    </div>
                                    <input type="hidden" name="tiket" value="{{ $item->nama_promo }}">
                                </div>

                                <div class="form-group row">
                                    <label for="harga_tiket" class="col-md-4 col-form-label text-md-right">Harga Tiket:
                                    </label>
                                    <div class="col-md-6">
                                        <input type="hidden" name="potongan" value="{{ $item->potongan }}">
                                        @php
                                            $har = intval($item->harga);
                                            $pot = intval($item->potongan);
                                            $potongan_new = $har - $pot;
                                            @endphp
                                        Rp {{ $potongan_new }},- /ticket
                                        <input type="hidden" name="harga" value="{{ $potongan_new }}">
                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Jumlah Tiket</label>
                                <div class="col-md-6">
                                    <input id="jml_tiket" type="number"
                                        class="form-control @error('jml_tiket') is-invalid @enderror" name="jml_tiket"
                                        required autocomplete="jml_tiket">
                                    <p><small>maksimal pembelian 5 tiket</small></p>
                                    @error('jml_tiket')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>isikan jumlah tiket</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kode_promo" class="col-md-4 col-form-label text-md-right">Kode Promo</label>
                                <div class="col-md-6">
                                    <input id="kode_promo" type="text" class="form-control" name="kode_promo">
                                    <p><small>Masukan kode promo (opsional)</small></p>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Lanjutkan
                                    </button>
                                    <a href="/detail_promo/{{ $id }}" class="btn btn-danger">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
