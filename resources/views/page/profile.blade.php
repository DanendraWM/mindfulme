@extends('main.layout')
@section('isi')
    <div class="m-5 d-flex flex-column justify-content-center ">
        <div class="d-flex flex-row">
            <h1 class="font-weight-bold">Profile</h1>
        </div>
    </div>
    <div class="m-5 d-flex flex-column justify-content-center">
        <div class=" d-flex flex-column align-items-center" style="gap: 20px">
            <img src={{ asset('image/logo/' . auth()->user()->image) }} alt="" width="300">
            <form class="col-lg-6" action="{{ route('editProfile',auth()->user()->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group flex-col">
                    <label for="name">Nama</label>
                    <input name="name" type="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{ auth()->user()->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            <p> {{ $message }} </p>
                        </div>
                    @enderror
                </div>
                <div class="form-group flex-col">
                    <label for="email">Email</label>
                    <input name="email" type="email" value="{{ auth()->user()->email }}" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="email">
                    @error('email')
                        <div class="invalid-feedback">
                            <p> {{ $message }} </p>
                        </div>
                    @enderror
                </div>
            <button type="submit" class="btn col-md-12 btn-success">Ubah</button>
            </form>
            <form action="/logout" method="post" class="col-lg-6">
                @csrf
                    <button type="submit" class="btn col-md-12 btn-danger">Keluar</button>
            </form>
        </div>
    </div>
@endsection
