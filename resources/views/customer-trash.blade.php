@extends('layouts')
@section('content')
<div>
    <a href="/customer">All Customer</a>
</div>
<table class="table table-border">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Date of Birth</th>
    </tr>
    @foreach ($customers as $customer)
    <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->name}}</td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->phonenumber}}</td>
        <td>{{$customer->dob}}</td>
        <td>
            <a href={{route('customer.forcedelete', $customer->id)}}>
                <button>Delete Permanently</button>
            </a>
            <a href={{route('customer.restore', $customer->id)}}>
                <button>Restore</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection