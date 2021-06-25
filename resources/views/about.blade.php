@extends('layout.main')

@section('about', 'active')

@section('title', 'Tebak Hewan')

@section('content')
<body>
<div class="desc">
    <div class="left">
        <img src="img/about.png" alt="" width="325" height="535">
    </div>

    <div class="right">
        <p class="title">Tebak Hewan Yuk !</p>
        <p class="desc">Website game pendidikan yang dapat menebak hewan yang ada dipikiran user melalui memberikan clue dengan menjawab ciri-ciri yang diberikan oleh interface. Metode yang digunakan adalah metode Algoritma Breadth First Search yang dapat mengklasifikasi hewan yang terdapat diinginkan user.
            Setelah menebak hewan, maka akan menampilkan info unik dari hewan tersebut.
            </p>

    </div>

</div>
    
    <div class="team">
        <p class="title">Our Team</p>
        <div class="team1">
            <img src="img/team/fina.jpg" alt="" width="200" height="200">
            <p>Fina Enno Rizki Oktavia Putri</p>
            <p>M0519040</p>
        </div>
        <div class="team2">
            <img src="img/team/fina.jpg" alt="" width="200" height="200">
            <p>Farras Arkan Isnaini Josi</p>
            <p>M0519040</p>
        </div>
        <div class="team3">
            <img src="img/team/fina.jpg" alt="" width="200" height="200">
            <p>Fathiya Farahdilla Husna</p>
            <p>M0519040</p>
        </div>
        <div class="team4">
            <img src="img/team/fina.jpg" alt="" width="200" height="200">
            <p>Krisna Sanjaya</p>
            <p>M0519040</p>
        </div>
    </div>
</body>
@endsection