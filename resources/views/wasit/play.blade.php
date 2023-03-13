@extends('layout.app')
@section('title', 'play')
@section('content')



<div class="container-home">
    <div class="one mb-2">
        <div class="kiri-1">
            <div class="add_cock">
                <img src="assets/img/cock.png" alt="">
                <input type="number" class="form-control" name="" id="jumlah_cock" value="0" disabled>
            </div>
        </div>

        <div class="kiri-2">
            <button class="btn btn-primary btn-back"><i class="fa-solid fa-reply"></i></button>
        </div>

            <div class="tengah">
                <button class="btn btn-dark btn-play" id="play" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-circle-play"></i></button>

                <form class="score">
                    @csrf
                    <div>

                        <div class="atas">
                            <div class="kiri">
                                <div class="r1-kiri">
                                    <h1 id="r1_kiri">0</h1>
                                </div>

                                <i class="fa-solid fa-minus pt-4"></i>

                                <div class="r1-kanan">
                                    <h1 id="r1_kanan">0</h1>
                                </div>

                            </div>

                            <div class="tengah">
                                <div class="r2-kiri">
                                    <h1 id="r2_kiri">0</h1>
                                </div>

                                <i class="fa-solid fa-minus pt-4"></i>

                                <div class="r2-kanan">
                                    <h1 id="r2_kanan">0</h1>
                                </div>
                            </div>

                            <div class="kanan">
                                <div class="r3-kiri">
                                    <h1 id="r3_kiri">0</h1>
                                </div>

                                <i class="fa-solid fa-minus pt-4"></i>

                                <div class="r3-kanan">
                                    <h1 id="r3_kanan">0</h1>
                                </div>
                            </div>
                        </div>

                        <div class="bawah">
                            <div class="tim-a">
                                <input class="form-control" style="text-align: center;" type="number" name="kiri" id="player_kiri" min="1" value="0" disabled>
                            </div>

                            <i class="fa-solid fa-minus pt-4"></i>

                            <div class="tim-b">
                                <input class="form-control" style="text-align: center;" type="number" name="kanan" id="player_kanan" min="1" value="0" disabled>
                            </div>

                        </div>

                    </div>
                </form>
            </div>

            <div class="kanan-1">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pelanggaran"><i class="fa-solid fa-triangle-exclamation"></i></button>
            </div>

            <div class="kanan-2">
                <form>
                    @csrf
                    <div class="round1">
                        <button class="btn btn-warning btn-tantangan-kanan" data-bs-toggle="modal" data-bs-target="#r1_finish" id="roundclear" name="button" value="1">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <h5>Next Round</h5>
                    </div>

                    <div class="round2">
                        <button class="btn btn-warning btn-tantangan-kanan" data-bs-toggle="modal" data-bs-target="#r2_finish" id="roundclear1" name="button" value="2">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <h5>Next Round</h5>
                    </div>

                    <div class="round3">
                        <button class="btn btn-warning btn-tantangan-kanan" data-bs-toggle="modal" data-bs-target="#finish" id="finished" name="button" value="3">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <h5>Finish</h5>

                    </div>
                </form>
            </div>

        <!-- modals -->

        <!-- Modal round 1-->
        <div class="modal fade pt-5" id="r1_finish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <p>Round 1 Selesai</p>
                        <button class="btn btn-primary w-100" style="font-size: 30px" data-bs-dismiss="modal">Ok</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal round 2-->
        <div class="modal fade pt-5" id="r2_finish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <p>Round 2 Selesai</p>
                        <button class="btn btn-primary w-100" style="font-size: 30px" data-bs-dismiss="modal">Ok</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal finish-->
        <div class="modal fade pt-5" id="finish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <p>Pertandingan Selesai</p>
                        <button class="btn btn-primary w-100" style="font-size: 30px" data-bs-dismiss="modal">Ok</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal Pelanggaran -->
        <div class="modal fade" id="pelanggaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pelanggaran</h1>
                    </div>

                    <div class="modal-body">
                        <div class="pelanggaran-pemain">
                            <div class="row col-md-12 ctr-warn">
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <div class="card" style="background-color: #ffd24b; height: 80px; width: 60px;"></div>
                                            <p>Warning</p>
                                        </center>
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <div class="card" style="background-color: #ff1100; height: 80px; width: 60px;"></div>
                                            <p>Fault</p>
                                        </center>
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <h1 style="font-size: 60px; color: #4b9dda">R</h1>
                                            <p>Referee Called</p>
                                        </center>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <h1 style="font-size: 60px; color: #4b9dda">S</h1>
                                            <p>Suspension</p>
                                        </center>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <h1 style="font-size: 60px; color: #4b9dda">O</h1>
                                            <p>Overrule</p>
                                        </center>

                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <h1 style="font-size: 60px; color: #4b9dda">I</h1>
                                            <p>Injury</p>
                                        </center>

                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <div class="card" style="background-color: #000; height: 80px; width: 60px;"></div>
                                            <p>Disqualified</p>
                                        </center>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <h1 style="font-size: 60px; color: #4b9dda">RET</h1>
                                            <p>Retired</p>
                                        </center>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <h1 style="font-size: 60px; color: #4b9dda">C</h1>
                                            <p>Serice Court Error</p>
                                        </center>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal_pelanggaran1">
                                        <center>
                                            <h1 style="font-size: 60px; color: #4b9dda">PMD</h1>
                                            <p>Promoted</p>
                                        </center>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal pelanggaran 1 -->
        <div class="modal fade" id="modal_pelanggaran1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Pemain</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <button class="btn btn-dark w-100 tim-1" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Samsudin(MU)</h1>
                        </button>

                        <button class="btn btn-dark w-100 mt-2 tim-1" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Joko(MU)</h1>
                        </button>

                        <button class="btn btn-dark w-100 mt-2 tim-2" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Sugiri(SF)</h1>
                        </button>

                        <button class="btn btn-dark w-100 mt-2 tim-2" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Widodo(SF)</h1>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#pelanggaran">Back</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih tim pada posisi kanan</h1>
                    </div>

                    <div class="modal-body">
                        <button class="btn btn-dark w-100" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#modal1" id="slc_team1">
                            <h1>Samsudin(MU)</h1>
                            <h1>Joko(MU)</h1>
                        </button>

                        <button class="btn btn-dark mt-3 w-100" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#modal1" id="slc_team2" >
                            <h1>Sugiri(SF)</h1>
                            <h1>Widodo(SF)</h1>
                        </button>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Server-->
        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Server</h1>
                    </div>

                    <div class="modal-body">
                        <button class="btn btn-dark w-100 tim-1 tim_a1" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Samsudin(MU)</h1>
                        </button>

                        <button class="btn btn-dark w-100 mt-2 tim-1 tim_a2" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Joko(MU)</h1>
                        </button>

                        <button class="btn btn-dark w-100 mt-2 tim-2 tim_b1" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Sugiri(SF)</h1>
                        </button>

                        <button class="btn btn-dark w-100 mt-2 tim-2 tim_b2" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#penerima">
                            <h1>Widodo(SF)</h1>
                        </button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Back</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Receiver -->
        <div class="modal fade" id="penerima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Receiver</h1>
                    </div>
                    <div class="modal-body">
                        <div id="tim-a">
                            <button class="btn btn-dark w-100 play" data-bs-dismiss="modal" onclick="round1()">
                                <h1>Samsudin(MU)</h1>
                            </button>

                            <button class="btn btn-dark w-100 mt-3 play" data-bs-dismiss="modal" onclick="round1()">
                                <h1>Joko(MU)</h1>
                            </button>
                        </div>

                        <div id="tim-b">
                            <button class="btn btn-dark w-100 mt-3 play" data-bs-dismiss="modal" onclick="round1()">
                                <h1>Sugiri(SF)</h1>
                            </button>

                            <button class="btn btn-dark w-100 mt-3 play" data-bs-dismiss="modal" onclick="round1()">
                                <h1>Widodo(SF)</h1>
                            </button>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal1">Back</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal round -->
        <div class="modal fade" id="round_over" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="two">
        <div class="kiri">
            <div class="atas">
                <button class="btn btn-light" id="minus_cock"><i class="fa-solid fa-minus"></i> <img src="assets/img/cock.png" alt=""></button>
            </div>

            <div class="bawah sc_kiri">
                <button class="btn btn-light score_plus" id="score_kiri"><h1>SCORE</h1></button>
            </div>
        </div>

        <div class="tengah">
            <div class="lapangan">
                <img src="assets/img/lapangan1.jpg" alt="">

                <div class="kiri" id="lapangan_kiri">
                    <div class="player1">
                        <div class="player1-a">
                            <div class="pemain p1a">
                                <h4></h4>
                            </div>

                            <div class="cock 1a">

                            </div>
                        </div>

                        <div class="player1-b">
                            <div class="pemain p1b">
                                <h4></h4>
                            </div>

                            <div class="cock 1b">

                            </div>
                        </div>

                    </div>
                </div>

                <div class="kanan" id="lapangan_kanan">
                    <div class="player2">
                        <div class="player2-a">

                            <div class="cock 2a">

                            </div>

                            <div class="pemain p2a">
                                <h4></h4>
                            </div>
                        </div>

                        <div class="player2-b">
                            <div class="cock 2b">

                            </div>

                            <div class="pemain p2b">
                                <h4></h4>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="kanan">
            <div class="atas">
                <button class="btn btn-light" id="plus_cock"><i class="fa-solid fa-plus"></i> <img src="assets/img/cock.png" alt=""></button>
            </div>

            <div class="bawah sc_kanan">
                <button class="btn btn-light score_plus" id="score_kanan"><h1>SCORE</h1></button>
            </div>

        </div>

    </div>
</div>


@endsection
