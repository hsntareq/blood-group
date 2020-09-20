@extends('layouts.register')

@section('content')
    <div class="donor-register">
        <form method="post" action="{{route('dStore')}}">
            @csrf
            <input name="name" type="text" class="form-control mb-3" placeholder="Donor Name">
            <input name="email" type="text" class="form-control mb-3" placeholder="Donor email">
            <select name="blood_group" class="form-control custom-select mb-3">
                <option value="">-select blood-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="AB+">AB+</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <button type="submit" class="btn-block btn btn-success">Save</button>
        </form>
    </div>
@endsection
