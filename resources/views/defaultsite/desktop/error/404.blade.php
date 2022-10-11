@extends('defaultsite.desktop.layouts.ui-main')

@section('content')
    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                @include('defaultsite.desktop.components-ui.ui-not-found')
            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => null])
            </div>
        </div>
    </div>
@endsection
