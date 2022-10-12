@extends('defaultsite.desktop.layouts.ui-main')
@section('title', 'Article Page')

@section('content')
    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                {{-- ?? BERITA UTAMA ?? --}}
                @include('defaultsite.desktop.components-ui.ui-main-content-video')

                {{-- ?? RELATED TAG ?? --}}
                @include('defaultsite.desktop.components-ui.ui-related-tag')

                {{-- ?? CREDITS ?? --}}
                @include('defaultsite.desktop.components-ui.ui-credit')

                {{-- ?? SHARE NEWS ?? --}}
                @include('defaultsite.desktop.components-ui.ui-share-news')

                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-light report-btn"><i
                        class="fa-solid fa-triangle-exclamation" style="color: #ca0000"></i> Report Article </button>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        {{-- ?? MODAL CONTENT ?? --}}
                        <div class="modal-content">
                            <div class="modal-body">
                                {{-- ?? FORM REPORT ?? --}}
                                @include('defaultsite.desktop.components-ui.ui-form-report')
                            </div>
                        </div>

                    </div>
                </div>
                {{-- ?? BERITA TERKAIT ?? --}}
                @include('defaultsite.desktop.components-ui.ui-related-news', ['latest' => $row['latest']])

            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $row ?? null])
            </div>
        </div>
    </div>

@endsection
