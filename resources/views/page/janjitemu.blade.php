@extends('main.layout')
@section('isi')
    <style>
        #line {
            height: 1px;
            width: 20%;
            background-color: black;
        }
    </style>
    {{-- Banner --}}
    <div class=" d-flex flex-lg-row justify-content-center align-content-center">
        <div class="col-lg-8 bg-light rounded p-5 m-5 d-flex flex-lg-row flex-column shadow justify-content-around">
            <div class="d-flex flex-column  col-lg-12 text-center">
                <h1>Janji Temu</h1>
                <div id="line" class="m-auto"></div>
                <div class="d-flex flex-lg-row flex-column">
                    <div class="col-lg-6">
                        <img src="{{ asset('image/logo/dr1.png') }}" class="nav-img rounded-circle">
                    </div>
                    <div class="d-flex flex-column text-left">
                        <hr>
                        <h3>Dokter : {{ $data->name }}</h3>
                        <h3>Spesialis : {{ $data->spesialis }}</h3>
                        <h3>Pengalaman : {{ $data->pengalaman }} Tahun</h3>
                    </div>
                </div>
                <div class="d-flex flex-column m-4" style="gap: 20px">
                    <form action="/janjitemu" method="POST">
                        @csrf
                        <input type="text" name="dokter_id" hidden value={{ $data->id }}>
                        <input type="text" name="user_id" hidden value={{ auth()->user()->id }}>
                        <label for="datetime">Atur Pertemuan</label>
                        <div class="d-flex flex-lg-row flex-column" style="gap: 10px">
                            <input type="date" name="date_pertemuan" class="form-control" id="datetime">
                            <input type="time" name="time_pertemuan" class="form-control">
                        </div>
                        <button class="btn btn-success col-lg-12 my-4">buat janji</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var datePickerId = document.getElementById('datetime');
        datePickerId.min = new Date().toISOString().split("T")[0];
    </script>
@endsection
