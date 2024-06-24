@extends('main.layout')
@section('isi')
    {{-- Banner --}}
    <div class=" d-flex flex-lg-row justify-content-center align-content-center">
        <div class="col-lg-10 bg-card-color-main rounded p-5 m-5 d-flex flex-lg-row flex-column shadow">
            <div class="col-lg-6">
                <img src="{{ asset('image/logo/image3.png') }}" class="nav-img rounded-circle" width="100%">
            </div>
            <div class="align-content-center p-5 col-lg-6">
                MindFulMe, aplikasi kesehatan mental untuk menjelajahi dan meraih keseimbangan jiwa. Nama ini mencerminkan
                personalisasi dan perhatian pada kebutuhan individu.
            </div>
        </div>
    </div>
    {{-- button sub nav --}}
    <a href="/cekkesehatan" class="text-white text-decoration-none ">
        <div class="d-flex justify-content-center align-content-center">
            <div class="d-flex justify-content-center col-10">
                <div class="bg-button-color-main col-10 text-center rounded p-2">
                    <i class="bi bi-file-earmark-medical"></i> Cek Kesehatan
                </div>
            </div>
        </div>
    </a>
    <div class=" d-flex flex-column justify-content-center align-items-center m-5">
        <div class="col-lg-10 m-4">
            <div class="d-flex flex-row align-items-center justify-content-between">
                <h4>Pilih Dokter</h4>
                <a href="/dokter" class="text-decoration-none">Lihat Semua</a>
            </div>
            <div class=" d-flex flex-column align-items-center" style="gap: 20px">
                @foreach ($dataDokter as $data)
                    <div
                        class="bg-card-color-main rounded d-flex flex-row p-3  align-items-center justify-content-around col-12">
                        <img src="{{ asset('image/logo/'.$data->image) }}" alt="...">
                        <div class="d-flex flex-column">
                            <h4 class="color-main text-lg">{{ $data->name }}</h4>
                            <p>{{ $data->spesialis }}</p>
                            <p><i class="bi bi-hand-thumbs-up-fill"></i> 90% <i class="bi bi-file-earmark-medical"></i> {{ $data->pengalaman }}
                                tahun
                            </p>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <a href="/janjitemu/{{ $data->id }}" class="btn btn-success">Janji Temu</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="col-lg-10 m-4">
            <div class="d-flex flex-row align-items-center justify-content-between">
                <h4>Pilih Apotek</h4>
                <a href="/apotek" class="text-decoration-none">Lihat Semua</a>
            </div>
            <div class="m-4 d-flex flex-wrap justify-content-center" style="gap: 20px">
                @foreach ($dataApotek as $data)
                    <div
                        class=" bg-card-color-main rounded d-flex flex-row align-items-center justify-content-start col-12 col-lg-5 p-5">
                        <img src="{{ asset('image/apotek/' . $data->image) }}" alt={{ $data->nama }} width="100">
                        <div class="d-flex flex-column">
                            <p>{{ $data->nama }}</p>
                            <p class="color-main text-lg">⭐⭐⭐⭐⭐ {{ sprintf('%.1f', $data->rating) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
