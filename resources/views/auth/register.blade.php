@extends('main.layout')
@section('isi')
<div class="d-flex justify-content-center align-content-center">
    <div class="col-md-5 bg-card-color-main rounded p-5 m-5">
        <h2 class=" text-center">MindFulMe</h2>
        <form class="mt-4" action="/register" method="POST">
            @csrf
            <div class="form-group flex-col">
                <label for="name">Username</label>
                <input name="name" type="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    aria-describedby="nameHelp" placeholder="Enter name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        <p> {{ $message }} </p>
                    </div>
                @enderror
            </div>
            <div class="form-group flex-col">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        <p> {{ $message }} </p>
                    </div>
                @enderror
            </div>
            <div class="form-group flex-col">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    id="exampleInputPassword1" placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">
                        <p> {{ $message }} </p>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn col-md-12 bg-button-color-main">Daftar</button>
            <p class="text-center mt-3">Sudah punya Account? <a href="/login">login Now</a></p>
        </form>
    </div>
</div>

@endsection
