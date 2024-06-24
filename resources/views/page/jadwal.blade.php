@extends('main.layout')
@section('isi')
    <?php
    setlocale(LC_ALL, 'IND');
    ?>
    <div class="container">
        <h2 class="">Jadwal janji pertemuan bersama dokter</h2>
    </div>
    <div class="m-auto d-flex flex-column col-lg-8 text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Dokter</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @if ($data->count())
                    @foreach ($data as $dt => $index)
                        <tr>
                            <th>{{ $dt + 1 }}</th>
                            <td>{{ $index->user->name }}</td>
                            <td>{{ $index->dokter->name }}</td>
                            <td>{{ $index->dokter->spesialis }}</td>
                            <td>{{ $index->jadwal_pertemuan->formatLocalized('%H:%M') }}</td>
                            <td>{{ $index->jadwal_pertemuan->formatLocalized('%A, %d %B %Y') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center p-5">
                            Data tidak tersedia
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
