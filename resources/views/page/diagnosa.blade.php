@extends('main.layout')
@section('isi')
    <div class="m-5 d-flex flex-column justify-content-center">
        <div class=" flex-row">
            <h1 class="font-weight-bold">Diagnosa</h1>
        </div>
    </div>
    {{-- test kesehatan --}}
    <div class="m-5 d-flex flex-column justify-content-center">
        <div class="m-4">
            <h3>Bipolar Disorder</h3>
            <p>Mania-Depresif</p>
        </div>
        <div class=" d-flex flex-lg-row flex-column align-items-center justify-content-center" style="gap: 20px">
            <div class="bg-card-color-main rounded d-flex flex-column p-5  align-items-center justify-content-center col-lg-3 col-12">
                <img src="{{ asset('image/sleepicon.png') }}" alt="...">
                <div class="d-flex flex-column">
                    <h4 class="color-main text-lg">Gangguan tidur</h4>
                </div>
            </div>
            <div class="bg-card-color-main rounded d-flex flex-column p-5  align-items-center justify-content-center col-lg-3 col-12">
                <img src="{{ asset('image/moodicon.png') }}" alt="...">
                <div class="d-flex flex-column">
                    <h4 class="color-main text-lg">Perubahan Mood</h4>
                </div>
            </div>
            <div class="bg-card-color-main rounded d-flex flex-column p-5  align-items-center justify-content-center col-lg-3 col-12">
                <img src="{{ asset('image/confuseicon.png') }}" alt="...">
                <div class="d-flex flex-column">
                    <h4 class="color-main text-lg">Banyak pikiran</h4>
                </div>
            </div>
        </div>
        <div class="m-4">
            <h3>Gejala</h3>
            <p>Fase Mania</p>
            <ul>
                <li>Sangat senang</li>
                <li>Percaya diri berlebihan</li>
                <li>Keinginan untuk tidur menurun</li>
            </ul>
            <p>Fase Depresif</p>
            <ul>
                <li>Gelisah</li>
                <li>Gangguan Tidur</li>
                <li>Pesimis</li>
            </ul>
        </div>
        <div class="d-flex flex-row justify-content-end col-10">
            <a href="/obat" class="btn btn-success">Selanjutnya</a>
        </div>
    </div>
@endsection
