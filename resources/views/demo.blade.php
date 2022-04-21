@extends('layouts')
@section('content')

<h1>Conditional Statements</h1>
<h3>IF ELSE</h3>
    @php
        $a = 3;
    @endphp
    @if ($a == 5)
        a is divisible by 5
    @else
        a is not divisible by 5
    @endif
<h4>Isset</h4>
    @isset($a)
        <p>$a is set</p>
    @endisset

<h4>Unless</h4>
    @unless ($a == 10)
        <p>$a is not 10</p>
    @endunless

<h4>LOOP</h4>
<h4>For Loop</h4>
    @for ($a = 1; $a<=10; $a++)
        <span>{{$a}}</span>
    @endfor

<h4>While Loop</h4>
    @php
        $a = 10;
    @endphp
    @while ($a<=0)
        {{$a}}
        @php
            $a++;
        @endphp
    @endwhile

<h4>For each</h4>
    @php
        $countrys = ["Nepal", 'India', 'Africa', 'America', 'Australia','Japan','China','London'];
    @endphp
    @foreach ($countrys as $country)
        <span>{{$country}}</span>
    @endforeach

<h4>Break</h4>
    @foreach ($countrys as $country)
    @if ($country == "Nepal")
    @break
    @endif
    <span>{{$country}}</span>
    @endforeach

<h4>Continue</h4>
    @foreach ($countrys as $country)
    @if ($country == "London")
    @continue
    @endif
    <span>{{$country}}</span>
    @endforeach
@endsection