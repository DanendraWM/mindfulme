@extends('main.layout')
@section('isi')
    <div class="m-5 d-flex flex-column justify-content-center">
        <div class=" flex-row">
            <h1 class="font-weight-bold">Pilih dokter</h1>
        </div>
    </div>
    <div class="m-5 d-flex flex-column justify-content-center">
        <div class="m-4 flex-row">
            <h3>Dokter Rekomendasi</h3>
        </div>
        <div class=" d-flex flex-column align-items-center" style="gap: 20px">
            @foreach ($data as $dt)
                <div
                    class="bg-card-color-main rounded d-flex flex-row p-3  align-items-center justify-content-around col-12">
                    <img src="{{ asset('image/logo/'.$dt->image) }}" alt="...">
                    <div class="d-flex flex-column">
                        <h4 class="color-main text-lg">{{ $dt->name }}</h4>
                        <p>{{ $dt->spesialis }}</p>
                        <p><i class="bi bi-hand-thumbs-up-fill"></i> 90% <i class="bi bi-file-earmark-medical"></i> {{ $dt->pengalaman }} tahun
                        </p>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <a href="/janjitemu/{{ $dt->id }}" class="btn btn-success">Janji Temu</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
