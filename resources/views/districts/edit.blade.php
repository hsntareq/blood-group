@extends('layouts.metronic')
@section('breadcrumb')
    <div class="subheader py-2 py-lg-4 subheader-solid">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Edit District</h5>
                    <small class="text-muted">Edit district of your application</small>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{route('district.create')}}" class="btn btn-light font-weight-bold btn-sm mr-2">
                    <span class="fa fa-plus"></span> Add district
                </a>
                <a href="{{route('district.index')}}" class="btn btn-light font-weight-bold btn-sm">
                    <span class="fa fa-list"></span> District list
                </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form method="post" action="{{route('district.update',$district->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
            <input name="name" type="text" class="form-control" value="{{$district->name}}" autofocus
                   placeholder="District name">
        </div>
        <button class="btn btn-success">Save</button>
    </form>
@endsection
