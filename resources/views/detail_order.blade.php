@extends('layouts.app')

@section('title', 'Detail Order')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-center bg-primary text-light">
                        <h4 class="card-title"> Detail Order</h4>
                    </div>
                    <div class="card-body">
                        <form action="/order" method="GET">
                            @csrf

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Tiket: </label>
                                <div class="col-md-6">
                                    <p>{{ $data['tiket'] }}</p>
                                </div>
                                <input type="hidden" name="tiket" value="{{ $data['tiket'] }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Nama: </label>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                                <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Alamat: </label>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->alamat }}</p>
                                </div>
                                <input type="hidden" name="alamat" value="{{ Auth::user()->alamat }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Email: </label>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">No. WhatsApp:
                                </label>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->no_wa }}</p>
                                </div>
                                <input type="hidden" name="no_wa" value="{{ Auth::user()->no_wa }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Jumlah: </label>
                                <div class="col-md-6">
                                    <p>{{ $data['jml_tiket'] }} tiket</p>
                                </div>
                                <input type="hidden" name="jml_tiket" value="{{ $data['jml_tiket'] }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Harga satuan:
                                </label>
                                <div class="col-md-6">
                                    <p>Rp {{ $data['harga'] }},-</p>
                                </div>
                                <input type="hidden" name="harga" value="{{ $data['harga'] }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Kode Promo:
                                </label>
                                <div class="col-md-6">
                                    <p>{{ $data['kode'] }}</p>
                                </div>
                                <input type="hidden" name="kode" value="{{ $data['kode'] }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Potongan: </label>
                                <div class="col-md-6">
                                    <p>Rp {{ $data['potongan'] }},-</p>
                                </div>
                                <input type="hidden" name="potongan" value="{{ $data['potongan'] }}">
                            </div>

                            <div class="form-group row">
                                <label for="jml_tiket" class="col-md-4 col-form-label text-md-right">Total:
                                </label>
                                <div class="col-md-6">
                                    <p>Rp {{ $data['total'] }},-</p>
                                </div>
                                <input type="hidden" name="total" value="{{ $data['total'] }}">
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Order Sekarang
                                    </button>
                                    <a href="/booking/{{ $data['id'] }}" class="btn btn-danger">
                                        Batal
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
