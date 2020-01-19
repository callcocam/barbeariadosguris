@extends('layouts.admin')

@section('breadcrumb')
    <div class="breadcrumb">
        <h1>{{ $tenant->name }}</h1>
        <ul>
            <li><a href="{{ route('admin.admin.index') }}">{{ __('Painel') }}</a></li>
            <li>{{ __('Posts') }}</li>
        </ul>
        <div style="right: 2%;position: absolute;">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-rounded pull-right"><span class="icon i-Add-File"></span> {{ __('Cadastrar Post') }}</a>
        </div>
    </div>
@endsection
@section('content')

    <!-- content goes here-->
    <section class="product-cart">
        <div class="row list-grid">
            @if($rows->count())
                @foreach($rows as $row)

                    <div class="list-item col-md-3">
                        <div class="card o-hidden mb-4 d-flex flex-column">
                            <div class="list-thumb d-flex"><img alt="" src="{{ asset($row->cover) }}" /></div>
                            <div class="flex-grow-1 d-bock">
                                <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                        <div class="item-title">
                                            {{ $row->name }}
                                        </div>
                                    </a>
                                    <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-{{ check_status($row->status) }}">{{ $row->status }}</span></p>
                                    <div class="clearfix"></div>
                                    <p class="m-0 ml-48 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-info">{{ str_pad($row->views, 5, '0', STR_PAD_LEFT) }}</span></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    @if($row->categorie()->first())
                                        <li class="list-group-item">
                                            <p class="m-0 text-muted text-small w-15 w-sm-100"> {{ $row->categorie()->first()->name }}</p>
                                        </li>

                                    @endif


                                    @if($row->tagNames())
                                        <li class="list-group-item">
                                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                                @foreach($row->tagNames() as $tag)
                                                    <span class="badge badge-pill badge-outline-primary p-2 m-1">{{$tag}}</span>
                                                @endforeach
                                            </p>
                                        </li>
                                    @endif
                                </ul>
                                <div class="card-body">
                                    <a class="btn btn-outline-primary btn-rounded card-link" href="{{ route('admin.posts.edit',$row->id) }}">{{ __('Editar Post') }}</a>
                                    <a class="btn btn-outline-danger btn-rounded card-link" href="{{ route('admin.posts.show',$row->id) }}">{{ __('Excluir Post') }}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 mt-3">
                    <nav aria-label="Page navigation example">
                        {{ $rows->render() }}
                    </nav>
                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        @include("admin.includes.empty", [
                               'url' =>route('admin.posts.create')
                           ])
                    </div>
                </div>

            @endif
        </div>
    </section><!-- end of main-content -->
@endsection

@include("admin.includes.alert")
