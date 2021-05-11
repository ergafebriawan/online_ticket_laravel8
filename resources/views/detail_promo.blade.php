@extends('layouts.app2')
@section('title', 'Detail promo')

@section('content')
    <div class="container">
        @foreach ($promo as $p)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('img/' . $p->picture) }}" class="card-img" alt="promo hari ini">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->nama_promo }}</h5>
                            @php
                                $har = intval($p->harga);
                                $pot = intval($p->potongan);
                                $potongan_new = $har - $pot;
                            @endphp
                            <small>Rp. <strike>{{ $p->harga }}</strike>,-</small>
                            <strong>Rp. {{ $potongan_new }},-</strong>
                            <p class="card-text">{{ $p->deskripsi }}</p>
                            <p class="card-text"><small class="text-muted">Periode: {{ $p->start_periode }} -
                                    {{ $p->end_periode }}</small></p>
                            <div class="row mx-2">
                                <a href="/booking/{{ $p->id_promo }}" class="btn btn-success mr-2">Pesan
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
