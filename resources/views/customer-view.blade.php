@extends('layouts')
@section('content')
{{-- <form action="{{route('customer.create')}}" method="POST"> --}}
    <div class="container">
        <div class="row m-2">
            <form action="" class="col-9">
                <div class="form-group">
                    <input type="search" name="search"id="" placeholder="Search by name or email" value="{{$search}}">
                </div>
                <button class="btn btn-primary">
                    Search
                </button>
                <a href="{{url('/customer')}}">
                <button class="btn btn-primary" type="button">
                    Reset
                </button>
                </a>
                <a href="{{url('/customer/create')}}">
                    <button class="btn btn-primary" type="button" style="float: right">
                        Add
                    </button>
                    </a>
            </form>

        </div>
        <table class="table table border-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Date Of Birth</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phonenumber}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>
                        <a href="{{route('customer.delete', $customer->id)}}">
                            <button class="btn btn-danger">
                            Delete
                        </button>
                        <a href="{{route('customer.edit', $customer->id)}}">
                            <button class="btn btn-danger">
                            Edit
                        </button>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="row">
          {{$customers->links()}}
        </div>
    </div>
{{-- </form> --}}
@endsection