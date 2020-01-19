@extends('layouts.admin')
@section('breadcrumb')
    <div class="breadcrumb">
        <h1>{{ $tenant->name }}</h1>
        <ul>
            <li><a href="{{ route('admin.admin.index') }}">{{ __('Painel') }}</a></li>
            <li><a href="{{ route('admin.posts.index') }}">{{ __('Posts') }}</a></li>
            <li>{{ $rows->name }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="card user-profile o-hidden mb-4">
        <div class="header-cover m-3" style="background-image: url({{ asset($rows->cover) }});background-size: contain;background-position: top;"></div>
        <div class="card-body">
            <div class="row mb-5">
                <div class="col-md-12">
                    {!! form($form) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'} );
    </script>
@endpush
