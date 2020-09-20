@extends('layouts.metronic')
@section('breadcrumb')
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Add District</h5>
                    <small class="text-muted">Add district for your application</small>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{route('district.index')}}" class="btn btn-light font-weight-bold btn-icon btn-sm">
                    <span class="fa fa-list"></span>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form method="post" action="{{route('district.store')}}">
        @csrf
        <div class="form-group">
            <input name="name" type="text" class="form-control" autofocus placeholder="District name">
        </div>
        <button class="btn btn-success">Save</button>
    </form>
@endsection
