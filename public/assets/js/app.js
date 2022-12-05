const round_ov = new bootstrap.Modal('#round_over', {

});
//cock position
let a1 = $('.1a');
let a2 = $('.1b');
let b1 = $('.2a');
let b2 = $('.2b');

//players
// let p1a = $('h4').html("Samsudin");
// let p1b = $('h4').html("Joko");
// let p2a = $('h4').html("Sugiri");
// let p2b = $('h4').html("Widodo");

let x=1;
let i=1;
let current = -1;

$('.tim_a1').click(function(){
    $(a1).prepend(ball);
    current = 1;
});

$('.tim_a2').click(function(){
    $(a2).prepend(ball);
    current = 1;
});

$('.tim_b1').click(function(){
    $(b1).prepend(ball);
    current = 2;
});

$('.tim_b2').click(function(){
    $(b2).prepend(ball);
    current = 2;
});

let ball = "<img src='assets/img/cock.png' alt=''>";
$('.score').hide();

$('.play').click(function() {
    $( "#play" ).hide();
    $( ".score" ).show();
    // console.log('baaa');


    function swapContent(a, b){
        tmp = $(a).html()
        $(a).html($(b).html())
        $(b).html(tmp)
    }

    $('#score_kiri').click(function() {
        $('#player_kiri').val(i++);
        swapContent('.p1a', '.p1b')
        swapContent(a1, a2)

        // console.log($('.1b').html(), $('.1a').html());
        if (current != 1){
            current = 1;
            swapContent(a1, b2);
            swapContent(a2, b1);
        }
        console.log(current);
    });



    $('#score_kanan').click(function() {
        $('#player_kanan').val(x++);
        swapContent('.p2a', '.p2b')
        swapContent(b1, b2)

        if (current != 2){
            current = 2;
            swapContent(b1, a2);
            swapContent(b2, a1);
        }

        console.log(current);
    });


    let cocks=1;

    $('#minus_cock').click(function(){
        $('#jumlah_cock').val(cocks--);
    });

    $('#plus_cock').click(function(){
        $('#jumlah_cock').val(cocks++);
    });
});

let vals = 1;

$('#tv_kiri').val(vals);

console.log("kntl");

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

