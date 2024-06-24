@extends('main.layout')
@section('isi')
    <div class="m-5 d-flex flex-column justify-content-center">
        <div class=" flex-row">
            <h1 class="font-weight-bold">Cek Kesehatan</h1>
        </div>
        <div class=" bg-card-color-main rounded d-flex flex-row align-items-center justify-content-center">
            <img src="{{ asset('image/person-raised.png') }}" alt="...">
            <h4 class="color-main text-lg">"Kesehatan adalah Investasi Terbaik: Pemeriksaan Rutin, Hidup Berkualitas!"</h4>
        </div>
    </div>
    {{-- test kesehatan --}}
    <div class="m-5 d-flex flex-column justify-content-center">
        <div class="m-4 flex-row">
            <h3>Pilih Tes Kesehatan</h3>
            <p>Cari tau informasi tentang keluhanmu.</p>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center" style="gap: 20px">
            <div class="bg-card-color-main rounded d-flex flex-row p-3  align-items-center justify-content-center col-8">
                <img src="{{ asset('image/image19.png') }}" alt="...">
                <div class="d-flex flex-column">
                    <h4 class="color-main text-lg">Tes Gangguan Kecemasan</h4>
                    <p>Mulai untuk mengecek hasil diagnosa</p>
                    <a href="/formkesehatan" class="btn btn-success">Start</a>
                </div>
            </div>
        </div>
    </div>
@endsection
