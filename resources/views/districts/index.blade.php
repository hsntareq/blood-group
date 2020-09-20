@extends('layouts.metronic')
@section('breadcrumb')
    <div class="subheader py-2 py-lg-4 subheader-solid">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Districts</h5>
                    <small class="text-muted">List of districts</small>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{route('district.create')}}" class="btn btn-light font-weight-bold btn-sm">
                    <span class="fa fa-plus"></span> Add District
                </a>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>SL</td>
                    <td>District Name</td>
                    <td>Created</td>
                    <td width="10">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($districts as $key=>$district)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$district->name}}</td>
                        <td>{{$district->created_at}}</td>
                        <td>

                            <form action="{{route('district.destroy',$district->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="btn-group">
                                    <a href="{{route('district.edit',$district->id)}}"
                                       class="btn btn-sm btn-icon btn-light-primary"><i class="fa fa-edit"></i></a>
                                    <button type="submit" data-id="{{$district->id}}"
                                            class="btn btn-sm btn-icon btn-light-danger btn_delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
