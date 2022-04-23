@extends('layouts')
@section('content')
<form action="{{url('customer.create')}}" method="POST">
    <div class="container">
        <table class="table table border-2">
            <thead>
                <tr>
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
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phonenumber}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</form>
@endsection