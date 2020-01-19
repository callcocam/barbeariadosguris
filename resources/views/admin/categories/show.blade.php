@extends('layouts.admin')

@section('breadcrumb')
    <div class="breadcrumb">
        <h1>{{ $tenant->name }}</h1>
        <ul>
            <li><a href="{{ route('admin.admin.index') }}">{{ __('Painel') }}</a></li>
            <li><a href="{{ route('admin.categories.index') }}">{{ __('Categorias') }}</a></li>
            <li>{{ __('Excluir Categoria') }} - {{ $rows->name }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">

       <div class="col-12">
           <div class="card mb-4">
               <div class="card-header">{{ $rows->name }}</div>
               <div class="card-body">
                   <form action="{{ route('admin.categories.destroy',$rows->id) }}" method="POST">
                       @csrf
                       @method("DELETE")
                       <button class="btn btn-warning btn-rounded">{{ __('Excluir Categoria') }}</button>
                       <a class="btn btn-danger btn-rounded" href="{{ route('admin.categories.index') }}">{{ __('Voltar Categorias') }}</a>
                   </form>
               </div>
           </div>
       </div>

    </div>

@endsection

