@extends('defaultsite.desktop.layouts.ui-main')

@section('content')
    <div class="static-container">
        {{-- @dump($row) --}}
        <h1 class="fw-bold">{{ $row['title'] ?? null }}</h1>
        <div class="static-text">{!! htmlspecialchars_decode($row['content'] ?? null) !!}</div>
    </div>
@endsection