@extends('main.layout')
@section('isi')
    <div class="m-5 d-flex flex-column">
        <div class=" d-flex justify-content-center">
            <div class=" col-10">
                <h1 class="font-weight-bold">Apotek</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-8">
                <p>Dapatkan perawatan medis dengan mudah dan cepat. MindFulMe memudahkan pasien untuk mencari informasi
                    mengenai rumah sakit terdekat dan kebutuhan pengobatan yang diperlukan dengan praktis.</p>
            </div>
        </div>
        <div class="m-4 d-flex flex-column align-items-center justify-content-center" style="gap: 20px">
            @foreach ($data as $dt)
                <div
                    class=" bg-card-color-main rounded d-flex flex-row align-items-center justify-content-start col-12 col-lg-8">
                    <img src="{{ asset('image/apotek/'.$dt->image) }}" alt={{ $dt->nama }} class="m-5">
                    <div class="d-flex flex-column">
                        <h2>{{ $dt->nama }}</h2>
                        <p class="color-main text-lg">⭐⭐⭐⭐⭐ {{ sprintf("%.1f", $dt->rating) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
