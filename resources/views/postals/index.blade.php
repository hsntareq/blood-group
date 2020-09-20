@extends('layouts.metronic')

@section('breadcrumb')
    <div class="subheader py-2 py-lg-4 subheader-solid">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Postals</h5>
                    <small class="text-muted">List of postals</small>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{route('postal.create')}}" class="btn btn-light font-weight-bold btn-sm">
                    <span class="fa fa-plus"></span> Add Postal
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
                    <td>Name</td>
                    <td>District</td>
                    <td>Postal Code</td>
                    <td>Created</td>
                    <td width="10">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($postals as $key=>$postal)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$postal->name}}</td>
                        <td>{{$postal->district->name}}</td>
                        <td>{{$postal->code}}</td>
                        <td>{{$postal->created_at}}</td>
                        <td>
                            <form action="{{route('postal.destroy',$postal->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-icon btn-primary"
                                       href="{{route('postal.edit',$postal->id)}}"><i class="fa fa-edit"></i></a>
                                    <button data-id="{{$postal->id}}" class="btn btn-danger btn-sm btn-icon btn_delete">
                                        <i
                                            class="fa fa-trash"></i></button>
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
