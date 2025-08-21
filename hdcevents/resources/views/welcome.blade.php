@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>
<img src="/img/banner.jpg">
@if (10 > 5)
<p>A condição é verdadeira</p>
@endif

<p>{{ $nome }}</p>
@if (strcasecmp($nome, "irineu") == 0)
<p>O nome é Irineu</p>
@elseif (strcasecmp($nome, "junior") == 0)
@else
<p>O nome é {{ $nome }}</p>
@endif

@if ($idade >= 18)
<p>Maior de idade</p>
@else
<p>Menor de idade</p>
@endif

<p>O nome é {{ $nome }}, possui {{ $idade }} e sua profissão é {{ $profissao }}</p>

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - [{{$i}}]</p>
@endfor

@foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach


@php
    $name = "Junior";
    echo $name;
@endphp

<!-- Comentario em HTML -->
{{-- Este é um comentário do Blade --}}

@endsection
