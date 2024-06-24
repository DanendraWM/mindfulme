@extends('main.layout')
@section('isi')
    <style>
        ul {
            list-style: none;
        }

        li {
            display: inline-block;
            margin-right: 15px;
        }

        input {
            visibility: hidden;
        }

        label {
            cursor: pointer;
        }

        input+label {
            background: #EDF1D6;
            border-radius: 100%;
            width: 40px;
            height: 40px;
            text-align: center;
            align-content: center;
        }

        input:checked+label {
            background: #3D5B43;
            color: #EDF1D6;
        }
    </style>
    <div class="m-5 d-flex flex-column justify-content-center ">
        <div class=" d-flex justify-content-start align-items-center col-10">
            <div class="m-4 flex-row col-8 ">
                <h3>Tes Gangguan Kecemasan</h3>
            </div>
        </div>
        <form action="/formkesehatan" method="POST" id="formKesehatan">
            @csrf
            <div class=" d-flex flex-row align-content-center justify-content-between col-8 m-auto">
                <div>
                    <p>Seberapa baik Anda tidur akhir-akhir ini?</p>
                </div>
                <div class="d-flex justify-content-between" style="gap: 10px;">
                    <ul>
                        <li>
                            <input type='radio' value='1' name='radio1' id='radio11' />
                            <label for='radio11'>1</label>
                        </li>
                        <li>
                            <input type='radio' value='2' name='radio1' id='radio12' />
                            <label for='radio12'>2</label>
                        </li>
                        <li>
                            <input type='radio' value='3' name='radio1' id='radio13' />
                            <label for='radio13'>3</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" d-flex flex-row align-content-center justify-content-between col-8 m-auto">
                <div>
                    <p>Seberapa sering Anda merasa cemas atau khawatir?</p>
                </div>
                <div class="d-flex justify-content-between" style="gap: 10px;">
                    <ul>
                        <li>
                            <input type='radio' value='1' name='radio2' id='radio21' />
                            <label for='radio21'>1</label>
                        </li>
                        <li>
                            <input type='radio' value='2' name='radio2' id='radio22' />
                            <label for='radio22'>2</label>
                        </li>
                        <li>
                            <input type='radio' value='3' name='radio2' id='radio23' />
                            <label for='radio23'>3</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" d-flex flex-row align-content-center justify-content-between col-8 m-auto">
                <div>
                    <p>Seberapa sering Anda merasa kesulitan untuk berkonsentrasi</p>
                </div>
                <div class="d-flex justify-content-between" style="gap: 10px;">
                    <ul>
                        <li>
                            <input type='radio' value='1' name='radio3' id='radio31' />
                            <label for='radio31'>1</label>
                        </li>
                        <li>
                            <input type='radio' value='2' name='radio3' id='radio32' />
                            <label for='radio32'>2</label>
                        </li>
                        <li>
                            <input type='radio' value='3' name='radio3' id='radio33' />
                            <label for='radio33'>3</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" d-flex flex-row align-content-center justify-content-between col-8 m-auto">
                <div>
                    <p>Apakah Anda sedang dalam pengobatan atau konseling?</p>
                </div>
                <div class="d-flex justify-content-between" style="gap: 10px;">
                    <ul>
                        <li>
                            <input type='radio' value='1' name='radio4' id='radio41' />
                            <label for='radio41'>1</label>
                        </li>
                        <li>
                            <input type='radio' value='2' name='radio4' id='radio42' />
                            <label for='radio42'>2</label>
                        </li>
                        <li>
                            <input type='radio' value='3' name='radio4' id='radio43' />
                            <label for='radio43'>3</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" d-flex flex-row align-content-center justify-content-between col-8 m-auto">
                <div>
                    <p>Bagaimana Anda menilai kesehatan mental Anda secara keseluruhan</p>
                </div>
                <div class="d-flex justify-content-between" style="gap: 10px;">
                    <ul>
                        <li>
                            <input type='radio' value='1' name='radio5' id='radio51' />
                            <label for='radio51'>1</label>
                        </li>
                        <li>
                            <input type='radio' value='2' name='radio5' id='radio52' />
                            <label for='radio52'>2</label>
                        </li>
                        <li>
                            <input type='radio' value='3' name='radio5' id='radio53' />
                            <label for='radio53'>3</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-end col-10">
                {{-- <a href="/diagnosa" class="btn btn-success">Selanjutnya</a> --}}
                <button  class="btn btn-success">Selanjutnya</button>
            </div>
        </form>

    </div>
@endsection
