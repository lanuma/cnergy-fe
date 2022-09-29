@extends('defaultsite.desktop.layouts.ui-main')

@section('content')
    <div class="mt-4">
        <div class="content-wrapper">
            <gcse:searchresults-only></gcse:searchresults-only>
        </div>
    </div>
    {{-- <div class="container w-kly px-8">
        <div id="v5-content" style="min-height: 80vh; overflow: hidden;">

            <gcse:searchresults-only></gcse:searchresults-only>

        </div>
    </div> --}}
@endsection
