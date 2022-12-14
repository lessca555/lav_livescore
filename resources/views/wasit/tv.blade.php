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

            <div class="kanan">
                <center>
                    <center>
                        <input type="number" id="tv_kanan" value="0" disabled>
                    </center>
                </center>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    // Set an interval to refresh the page every 1000 milliseconds (1 second)
    setInterval(function() {
        // Increment the value by 1
        var currentValue = parseInt(localStorage.getItem('number'));

        $('#tv_kiri').val(currentValue)
        $('#tv_kiri').change(function(){
            // Refresh the page
            location.reload();
        })

        if(currentValue == 0){
            localStorage.clear();
        }


        // Increment the value by 1
        var kananValue = parseInt(localStorage.getItem('number1'));

        $('#tv_kanan').val(kananValue)
        $('#tv_kanan').change(function(){
            // Refresh the page
            location.reload();
        })

        if(kananValue == 0){
            localStorage.clear();
        }

    }, 1000);

    setInterval(function() {



    }, 1000);
</script>

@endsection
