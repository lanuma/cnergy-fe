@extends('defaultsite.mobile.layouts.ui-main')

@section('content')
<div id="v5-content" class=" my-4 mx-4" style="min-height: 80vh; overflow: hidden; ">
    <h1 class="dt-title text-30 font-bold mb-4 " style="align-items: center">{{$row['title']??null}}</h1>
    <div style="text-align: justify;">{!! htmlspecialchars_decode($row['content']??null)!!}</div>
</div>
@endsection