@extends('main.layout')
@section('isi')
    <div class="m-5 d-flex flex-column">
        <div class=" d-flex justify-content-center">
            <div class=" col-10">
                <h1 class="font-weight-bold">Obat</h1>
            </div>
        </div>
        <div class="m-4 d-flex flex-column align-items-center justify-content-center" style="gap: 20px">
            <div
                class=" bg-card-color-main rounded d-flex flex-row align-items-center justify-content-center col-12 col-lg-8">
                <img src="{{ asset('image/obat1.png') }}" alt="..." class="m-5">
                <div class="d-flex flex-column">
                    <h2>Alprazolam</h2>
                    <p class="color-main text-lg">Alprazolam adalah obat penenang untuk mengatasi gangguan kecemasan dan
                        gangguan panik.
                    </p>
                </div>
            </div>
            <div
                class=" bg-card-color-main rounded d-flex flex-row align-items-center justify-content-center col-12 col-lg-8">
                <img src="{{ asset('image/obat2.png') }}" alt="..." class="m-5">
                <div class="d-flex flex-column">
                    <h2>Buspirone</h2>
                    <p class="color-main text-lg">Buspirone adalah obat untuk mengatasi gangguan kecemasan umum.</p>
                </div>
            </div>
            <div
                class=" bg-card-color-main rounded d-flex flex-row align-items-center justify-content-center col-12 col-lg-8">
                <img src="{{ asset('image/obat3.png') }}" alt="..." class="m-5">
                <div class="d-flex flex-column">
                    <h2>Lorazepam</h2>
                    <p class="color-main text-lg">Lorazepam adalah obat untuk mengatasi kecemasan dan masalah tidur yang berkaitan dengan kecemasan, termasuk insomnia.</p>
                </div>
            </div>
            <div
                class=" bg-card-color-main rounded d-flex flex-row align-items-center justify-content-center col-12 col-lg-8">
                <img src="{{ asset('image/obat4.png') }}" alt="..." class="m-5">
                <div class="d-flex flex-column">
                    <h2>Lithium</h2>
                    <p class="color-main text-lg">Lithium adalah obat untuk menstabilkan suasana hati pada penderita gangguan bipolar.</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-end col-10">
            <a href="/nutrisi" class="btn btn-success">Selanjutnya</a>
        </div>
    </div>
@endsection
