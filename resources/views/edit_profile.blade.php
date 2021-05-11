@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profile</div>

                    <div class="card-body">
                        <form method="POST" action="/proses_edit">
                            @csrf

                            <input type="hidden" name="id" value="{{Auth::user()->id}}">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{Auth::user()->name}}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Nama belum terisi</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>email belum terisi</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_wa" class="col-md-4 col-form-label text-md-right">No. WhatsApp</label>
                                <div class="col-md-6">
                                    <input id="no_wa" type="number" class="form-control @error('no_wa') is-invalid @enderror"
                                        name="no_wa" value="{{ Auth::user()->no_wa }}" required autocomplete="noWA">
                                    @error('no_wa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>No. WhatsApp belum terisi</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                <div class="col-md-6">
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        id="alamat" cols="30" rows="2" required
                                        autocomplete="alamat">{{ Auth::user()->alamat }}</textarea>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Alamat belum terisi</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis
                                    Kelamin</label>
                                <div class="col-md-6">
                                    <select class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                        name="jenis_kelamin" id="jenis_kelamin" required autocomplete="jenis_kelamin">
                                        @if (Auth::user()->jenis_kelamin == "laki-laki")
                                        <option value="">Pilih</option>
                                        <option value="laki-laki" selected>Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                        @else
                                        <option value="">Pilih</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan" selected>Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit Profile
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
