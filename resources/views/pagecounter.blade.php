@extends('template')

@section('content')
	<div class="container-fluid" style="display:flex;height:60px;align-items:center;background-color:rgb(214, 255, 214);color:darkgreen">
        Anda Pengunjung ke: {{ $pagecounter->jumlah }}
    </div>
@endsection
