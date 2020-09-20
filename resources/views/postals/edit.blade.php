@extends('layouts.metronic')

@section('breadcrumb')
    <div class="subheader py-2 py-lg-4 subheader-solid">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Edit Postal</h5>
                    <small class="text-muted">Edit this postal</small>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{route('postal.create')}}" class="btn btn-light font-weight-bold btn-sm">
                    <span class="fa fa-plus"></span> Create Postal
                </a>
                <a href="{{route('postal.index')}}" class="btn btn-light font-weight-bold btn-sm">
                    <span class="fa fa-list"></span> Postal List
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('postal.update',$postal->id)}}">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-7">
                            <input type="text" value="{{$postal->name}}" class="form-control" name="name"
                                   placeholder="Postal Title">
                        </div>
                        <div class="col">
                            <select name="district_id" id="district_id" class="form-control">
                                @foreach($districts as $district)
                                    <option
                                        {{$district->id==$postal->district_id?'selected':''}} value="{{$district->id}}">{{strtoupper($district->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" value="{{$postal->code}}" class="form-control" name="code"
                                   placeholder="Postal Code">
                        </div>
                    </div>
                </div>

                <button class="btn btn-success"><i class="fa fa-save"></i> Save</button>
            </form>
        </div>
    </div>
@endsection
