@extends('layouts.app2')

@section('title', 'profile')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Profile</h3>

                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>: {{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: {{ Auth::user()->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ Auth::user()->alamat }}</td>
                    </tr>
                    <tr>
                        <td>e-mail</td>
                        <td>: {{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>No. WhatsApp</td>
                        <td>: +62{{ Auth::user()->no_wa }}</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/editUser" class="btn btn-primary mr-2">Edit Profile</a>
                            <a href="{{ route('password.request') }}" class="btn btn-warning ml-2 mr-2">Ubah
                                Password</a>
                        </td>
                    </tr>
                </table>
                {{-- Nama : {{ Auth::user()->name }}
                <br>
                Email{{ Auth::user()->email }}
                <br>
                No. WhatsApp : +62{{ Auth::user()->noWA }}
                <br>
                Jenis Kelamin : {{ Auth::user()->jenis_kelamin }}
                <br>
                Alamat : {{ Auth::user()->alamat }}
                <br> --}}

            </div>
        </div>
    </div>
@endsection
