@extends('layout.main')

@section('play', 'active')

@section('title', 'Tebak Hewan')

@section('content')
<body>
	<div class="playPage">
        <div class="left">
            <img src="img/about.png" alt=""  width="325" height="535">   
        </div>
        <div class="right">
            <form action="result">
            <button>Lorem ipsum dolor sit, amet consectetur</button>
            <button>Lorem ipsum dolor sit, amet consectetur</button>
            <button>Lorem ipsum dolor sit, amet consectetur</button>
            <button>Lorem ipsum dolor sit, amet consectetur</button> 
        </form>       
        </div>
        
    </div>
</body>

@endsection