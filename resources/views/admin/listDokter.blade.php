@extends('main.layout')
@section('isi')
    <?php
    setlocale(LC_ALL, 'IND');
    ?>
    <div class="container">
        <h2 class="">List Dokter</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddModal">Add</button>
    </div>
    <div class="m-auto d-flex flex-column col-lg-8 text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Pengalaman</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($data->count())
                    @foreach ($data as $no => $dt)
                        <tr>
                            <td>{{ $no + $data->firstItem() }}</td>
                            <td>{{ $dt->name }}</td>
                            <td>{{ $dt->spesialis }}</td>
                            <td>{{ $dt->pengalaman }}</td>
                            <td><img src="{{ asset('image/' . $dt->image) }}" width="50%"></td>
                            <td>
                                <button type="button" class="btn btn-danger delete-court-button" data-toggle="modal"
                                    data-target="#DeleteModal">Delete</button> | <button type="button"
                                    class="btn btn-success" data-toggle="modal" data-target="#EditModal{{ route('editDokter', $dt->id) }}">Edit</button>
                            </td>
                        </tr>
                        {{-- Modal --}}
                        <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="DeleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="DeleteModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete?
                                    </div>
                                    <div class="modal-footer">
                                        <form id="deleteForm" action="{{ route('deleteDokter', $dt->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- edit modal --}}
                        <div class="modal fade" id="EditModal{{ route('editDokter', $dt->id) }}" tabindex="-1" role="dialog"
                            aria-labelledby="EditModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('editDokter', $dt->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-content text-left">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditModalLabel">Edit Dokter</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group flex-col">
                                                <label for="name">Nama Dokter</label>
                                                <input name="name" type="name"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    aria-describedby="nameHelp" placeholder="Enter name"
                                                    value="{{ $dt->name }}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        <p> {{ $message }} </p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group flex-col">
                                                <label for="spesialis">spesialis</label>
                                                <input name="spesialis" type="spesialis"
                                                    class="form-control @error('spesialis') is-invalid @enderror"
                                                    id="spesialis" aria-describedby="nameHelp" placeholder="Enter spesialis"
                                                    value="{{ $dt->spesialis }}">
                                                @error('spesialis')
                                                    <div class="invalid-feedback">
                                                        <p> {{ $message }} </p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group flex-col">
                                                <label for="pengalaman">Pengalaman</label>
                                                <input name="pengalaman" type="pengalaman"
                                                    class="form-control @error('pengalaman') is-invalid @enderror"
                                                    id="pengalaman" aria-describedby="nameHelp"
                                                    placeholder="Enter pengalaman" value="{{ $dt->pengalaman }}">
                                                @error('pengalaman')
                                                    <div class="invalid-feedback">
                                                        <p> {{ $message }} </p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8" class="text-center p-5">
                            Data tidak tersedia
                            <a href="/voucer" class="text-info"> Lihat semua data</a>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="/listdokter/add/dokter" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="AddModalLabel">Add Dokter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group flex-col">
                            <label for="name">Nama Dokter</label>
                            <input name="name" type="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" aria-describedby="nameHelp" placeholder="Enter name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    <p> {{ $message }} </p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group flex-col">
                            <label for="spesialis">spesialis</label>
                            <input name="spesialis" type="spesialis"
                                class="form-control @error('spesialis') is-invalid @enderror" id="spesialis"
                                aria-describedby="nameHelp" placeholder="Enter spesialis"
                                value="{{ old('spesialis') }}">
                            @error('spesialis')
                                <div class="invalid-feedback">
                                    <p> {{ $message }} </p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group flex-col">
                            <label for="pengalaman">Pengalaman</label>
                            <input name="pengalaman" type="pengalaman"
                                class="form-control @error('pengalaman') is-invalid @enderror" id="pengalaman"
                                aria-describedby="nameHelp" placeholder="Enter pengalaman"
                                value="{{ old('pengalaman') }}">
                            @error('pengalaman')
                                <div class="invalid-feedback">
                                    <p> {{ $message }} </p>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>



@endsection
