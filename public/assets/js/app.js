//cock position
let a1 = $('.1a');
let a2 = $('.1b');
let b1 = $('.2a');
let b2 = $('.2b');

//players
let p1a = $('.p1a h4').text("Samsudin");
let p1b = $('.p1b h4').text("Joko");
let p2a = $('.p2a h4').text("Sugiri");
let p2b = $('.p2b h4').text("Widodo");

let x=1;
let i=1;
let current = -1;
let server;

function swapContent(a, b){
    tmp = $(a).html()
    $(a).html($(b).html())
    $(b).html(tmp)
}

//rounds
$('.round2').hide();
$('.round3').hide();

$('.tim_a1').click(function(){
    server = a1;
    $(ball).appendTo(server);
    current = 1;
});

$('.tim_a2').click(function(){
    server = a2;
    $(ball).appendTo(server);
    current = 1;
});

$('.tim_b1').click(function(){
    server = b1;
    $(ball).appendTo(server);
    current = 2;
});

$('.tim_b2').click(function(){
    server = b2;
    $(ball).appendTo(server);
    current = 2;
});

console.log(server);

$('.score').hide();

$('.play').click(function() {
    $( "#play" ).hide();
    $( ".score" ).show(function(){
            minValue = 0;

            $('#minus_cock').click(function(){
                if($('#jumlah_cock').val() > minValue){
                    // Increment the value by 1
                    newValue = $('#jumlah_cock').val();
                    newValue--;

                    // Update the input field with the new value
                    $('#jumlah_cock').val(newValue);
                }else{
                    alert("cock kosong");
                }


            });

            $('#plus_cock').click(function(){
                // Increment the value by 1
                newValue = $('#jumlah_cock').val();
                newValue++;

                // Update the input field with the new value
                $('#jumlah_cock').val(newValue);

            });
        });
    // console.log('baaa');




});

function round1(){

    let minVal = 0;
    let minScore = 21;

    $('#score_kiri').click(function() {

        //jika score lebih dari 21 makan permainan berakhir
        if($('#player_kiri').val() < minScore){
            // Get the current value of the input field
            var currentValue = $('#player_kiri').val();

            // Increment the value by 1
            var newValue = parseInt(currentValue) + 1;

            // Update the input field with the new value
            $('#player_kiri').val(newValue);

            // Update the value in localStorage
            localStorage.setItem('number', newValue);

            //jika score berubah maka lakukan swap posisi pemain
            if($('#player_kiri').val() > minVal){
                swapContent('.p1a', '.p1b')
                swapContent(a1, a2)
                console.log("kiri");
            }
        }else{
            alert("permainan berakhir");
        }

        //jika lawan mencetak angka maka cock akan berpindah
        // console.log($('.1b').html(), $('.1a').html());
        if (current != 1){
            current = 1;
            swapContent(a1, b2);
            swapContent(a2, b1);
        }
        console.log(current);

    });



    $('#score_kanan').click(function() {

        if($('#player_kanan').val() < minScore){
            // Get the current value of the input field
            var currentValue = $('#player_kanan').val();

            // Increment the value by 1
            var newValue = parseInt(currentValue) + 1;

            // Update the input field with the new value
            $('#player_kanan').val(newValue);

            // Update the value in localStorage
            localStorage.setItem('number1', newValue);

            if($('#player_kanan').val() > minVal){
                swapContent('.p2a', '.p2b')
                swapContent(b1, b2)
                console.log("kanan");

            }

        }else{
            alert("Permainan berakhir")

        }

        if (current != 2){
            current = 2;
            swapContent(b1, a2);
            swapContent(b2, a1);
        }

        console.log(current);
    });


}

$('#roundclear').click(function(){
    $('.round2').show();
    $('.round1').hide();

    location.reload(true);
    // $('.cock img').remove();
    // $('.cock img').appendTo(server);

    //hapus local storage
    localStorage.clear();
    console.log("r1 done");

    //hapus cock pertama
    // $('.cock img').first().remove();

    //pindahkan score ke atas
    $('#r1_kiri').text($('#player_kiri').val());
    $('#r1_kanan').text($('#player_kanan').val());

    //kosongkan papan score
    $('#player_kiri').val(0);
    $('#player_kanan').val(0);

    round2;
})

function round2(){

    let minVal = 0;
    let minScore = 21;

    $('#score_kiri').click(function() {

        //jika score lebih dari 21 makan permainan berakhir
        if($('#player_kiri').val() < minScore){
            // Get the current value of the input field
            var currentValue = $('#player_kiri').val();

            // Increment the value by 1
            var newValue = parseInt(currentValue) + 1;

            // Update the input field with the new value
            $('#player_kiri').val(newValue);

            // Update the value in localStorage
            localStorage.setItem('number', newValue);

            //jika score berubah maka lakukan swap posisi pemain
            if($('#player_kiri').val() > minVal){
                swapContent('.p1a', '.p1b')
                swapContent(a1, a2)
                console.log("kiri");
            }
        }else{
            alert("permainan berakhir");
        }

        //jika lawan mencetak angka maka cock akan berpindah
        // console.log($('.1b').html(), $('.1a').html());
        if (current != 1){
            current = 1;
            swapContent(a1, b2);
            swapContent(a2, b1);
        }
        console.log(current);

    });



    $('#score_kanan').click(function() {

        if($('#player_kanan').val() < minScore){
            // Get the current value of the input field
            var currentValue = $('#player_kanan').val();

            // Increment the value by 1
            var newValue = parseInt(currentValue) + 1;

            // Update the input field with the new value
            $('#player_kanan').val(newValue);

            // Update the value in localStorage
            localStorage.setItem('number1', newValue);

            if($('#player_kanan').val() > minVal){
                swapContent('.p2a', '.p2b')
                swapContent(b1, b2)
                console.log("kanan");

            }

        }else{
            alert("Permainan berakhir")

        }

        if (current != 2){
            current = 2;
            swapContent(b1, a2);
            swapContent(b2, a1);
        }

        console.log(current);
    });



}



$('#roundclear1').click(function(){
    $('.round2').hide();
    $('.round3').show();
    $('.cock img').remove();
    $(server).prepend(ball);


    //hapus local storage
    localStorage.clear();
    console.log("r2 done");

    //hapus cock pertama
    // $('.cock img').first().remove();

    //pindahkan score ke atas
    $('#r2_kiri').text($('#player_kiri').val());
    $('#r2_kanan').text($('#player_kanan').val());

    //kosongkan papan score
    $('#player_kiri').val(0);
    $('#player_kanan').val(0);

    finished;

})

function finished(){

    let minVal = 0;
    let minScore = 21;

    $('#score_kiri').click(function() {

        //jika score lebih dari 21 makan permainan berakhir
        if($('#player_kiri').val() < minScore){
            // Get the current value of the input field
            var currentValue = $('#player_kiri').val();

            // Increment the value by 1
            var newValue = parseInt(currentValue) + 1;

            // Update the input field with the new value
            $('#player_kiri').val(newValue);

            // Update the value in localStorage
            localStorage.setItem('number', newValue);

            //jika score berubah maka lakukan swap posisi pemain
            if($('#player_kiri').val() > minVal){
                swapContent('.p1a', '.p1b')
                swapContent(a1, a2)
                console.log("kiri");
            }
        }else{
            alert("permainan berakhir");
        }

        //jika lawan mencetak angka maka cock akan berpindah
        // console.log($('.1b').html(), $('.1a').html());
        if (current != 1){
            current = 1;
            swapContent(a1, b2);
            swapContent(a2, b1);
        }
        console.log(current);

    });



    $('#score_kanan').click(function() {

        if($('#player_kanan').val() < minScore){
            // Get the current value of the input field
            var currentValue = $('#player_kanan').val();

            // Increment the value by 1
            var newValue = parseInt(currentValue) + 1;

            // Update the input field with the new value
            $('#player_kanan').val(newValue);

            // Update the value in localStorage
            localStorage.setItem('number1', newValue);

            if($('#player_kanan').val() > minVal){
                swapContent('.p2a', '.p2b')
                swapContent(b1, b2)
                console.log("kanan");

            }

        }else{
            alert("Permainan berakhir")

        }

        if (current != 2){
            current = 2;
            swapContent(b1, a2);
            swapContent(b2, a1);
        }

        console.log(current);
    });
}


$('#finished').click(function(){
    $('.round2').hide();
    $('.round3').show();
    $('.cock img').remove();

    //hapus local storage
    localStorage.clear();
    console.log("finish");

    //hapus cock pertama

    //pindahkan score ke atas
    $('#r3_kiri').text($('#player_kiri').val());
    $('#r3_kanan').text($('#player_kanan').val());

    //kosongkan papan score
    $('#player_kiri').val(0);
    $('#player_kanan').val(0);

})

$('#tim-b').hide();
$('#tim-a').hide();
$('.tim-1').click(function(){
    $('#tim-b').show();
    $('#tim-a').hide();
});
$('.tim-2').click(function(){
    $('#tim-a').show();
    $('#tim-b').hide();
});



$('#slc_team1').click(function(){
    //swap pemain kiri ke kanan
    $('.p1a').appendTo('.player2-a')
    $(a1).appendTo('.player2-a')
    $('.p1b').appendTo('.player2-b')
    $(a2).appendTo('.player2-b')

    //swap pemain kanan ke kiri
    $('.p2a').appendTo('.player1-a')
    $(b1).appendTo('.player1-a')
    $('.p2b').appendTo('.player1-b')
    $(b2).appendTo('.player1-b')

    //swap score board
    $('#player_kiri').appendTo('.tim-b')
    $('#player_kanan').appendTo('.tim-a')

    //swap button score
    $('#score_kiri').appendTo('.sc_kanan')
    $('#score_kanan').appendTo('.sc_kiri')

    //swap round score

    //r1
    $('#r1_kiri').appendTo('.r1-kanan')
    $('#r1_kanan').appendTo('.r1-kiri')

    //r2
    $('#r2_kiri').appendTo('.r2-kanan')
    $('#r2_kanan').appendTo('.r2-kiri')

    //r3
    $('#r3_kiri').appendTo('.r3-kanan')
    $('#r3_kanan').appendTo('.r3-kiri')


});

let ball = "<img src='assets/img/cock.png' alt=''>";
