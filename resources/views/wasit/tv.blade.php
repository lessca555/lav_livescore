@extends('layout.app')
@section('title','display tv')
@section('content')

<div class="container-tv">
    <div class="kiri">
        <div class="atas">
            <h1>Samsudin</h1>

            <h1>Joko</h1>
        </div>
        <div class="tengah">
            <h1>
                PELATNAS
            </h1>

            <hr>

            <h1>
                PBSI JATIM
            </h1>
        </div>
        <div class="bawah">
            <h1>Sugiri</h1>

            <h1>Widodo</h1>
        </div>
    </div>

    <div class="kanan">
        <div class="atas">
            <div class="kiri">
                <center>
                    <h1>0</h1>
                    <h1>0</h1>
                    <h1>0</h1>

                </center>
            </div>
            <div class="kanan">
                <center>
                    <input type="number" id="tv_kiri" value="0" disabled>
                </center>
            </div>
        </div>

        <div class="bawah">
            <div class="kiri">
                <center>
                    <h1>0</h1>
                    <h1>0</h1>
                    <h1>0</h1>

                </center>
            </div>

            <div class="kanan" id="tv_kanan">
                <center>
                    <h1></h1>
                </center>
            </div>
        </div>
    </div>
</div>

@endsection
