@extends('main.layout')
@section('isi')
    <div class="m-5 d-flex flex-column">
        <div class=" d-flex justify-content-center">
            <div class=" col-10">
                <h1 class="font-weight-bold">Nutrisi</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-8">
                <p>Nutrisi dapat memainkan peran yang penting dalam mendukung kesehatan mental. Beberapa nutrisi khusus
                    dapat memberikan kontribusi positif terhadap kesejahteraan mental.</p>
            </div>
        </div>
        <div class="m-4 d-flex flex-column align-items-center justify-content-center" style="gap: 20px">
            <div class="d-flex flex-column bg-card-color-main rounded justify-content-center align-items-center col-8">
                <div class="bg-button-color-main col-12 rounded text-center p-2">
                    <p>Omega-3 Asam Lemak </p>
                </div>
                <div class="d-flex flex-column align-items-start col-12 p-3">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Fungsi : </p>
                        <p class="color-main text-lg">Omega-3 memiliki peran penting dalam struktur dan fungsi otak
                        </p>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Sumber utama : </p>
                        <p class="color-main text-lg">Ikan berlemak (salmon, sarden, trout), biji chia, biji rami, dan minyak ikan.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-card-color-main rounded justify-content-center align-items-center col-8">
                <div class="bg-button-color-main col-12 rounded text-center p-2">
                    <p>Magnesium </p>
                </div>
                <div class="d-flex flex-column align-items-start col-12 p-3">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Fungsi : </p>
                        <p class="color-main text-lg">Membantu mengurangi stres dan meningkatkan mood.
                        </p>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Sumber utama : </p>
                        <p class="color-main text-lg">Kacang-kacangan, biji-bijian, sayuran berdaun hijau, dan cokelat hitam.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-card-color-main rounded justify-content-center align-items-center col-8">
                <div class="bg-button-color-main col-12 rounded text-center p-2">
                    <p>Antioksidan </p>
                </div>
                <div class="d-flex flex-column align-items-start col-12 p-3">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Fungsi : </p>
                        <p class="color-main text-lg">Vitamin C dan E dapat melindungi sel-sel otak dari kerusakan.
                        </p>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Sumber utama : </p>
                        <p class="color-main text-lg">Buah-buahan segar, sayuran, kacang-kacangan, dan biji-bijian.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-card-color-main rounded justify-content-center align-items-center col-8">
                <div class="bg-button-color-main col-12 rounded text-center p-2">
                    <p>Karbohidrat Kompleks </p>
                </div>
                <div class="d-flex flex-column align-items-start col-12 p-3">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Fungsi : </p>
                        <p class="color-main text-lg">Meningkatkan produksi serotonin yang terkait dengan perasaan bahagia.
                        </p>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Sumber utama : </p>
                        <p class="color-main text-lg">Gandum utuh, beras merah, kentang, dan sayuran.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-end col-10">
            <a href="/" class="btn btn-success">Selanjutnya</a>
        </div>
    </div>
@endsection
