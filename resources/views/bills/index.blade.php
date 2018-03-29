@extends('layouts.master')

@section('content')
    <h1">Bill Splitter</h1>

    <form method='GET' action='/bills'>
    <ul>
        <li><label>How much was the tab?
            <span>$</span>
            <input type='number' name='tabTotal' min='0' step='.01' >
            <span> *required </span>
        </label></li>
        <li><label >Split how many ways?
            <input type='number' name='splitNum' min='1'>
            <span > *required </span>
        </label></li>
        <li><label >How was the service?
            <select name='serviceLevel' id='serviceLevel'>
                <option>Select an option</option>
                @foreach(config('app.possibleServiceLevels') as $serviceLevel => $description)
                <option value='{{ $serviceLevel  }}'> {{ $description }} </option>
                @endforeach
            </select>
            <span> *required </span>
        </label></li>
        <li><label >Round up?:
            <input type='checkbox' name='roundUp' id='roundUp' value='1'> Yes
        </label></li>

        <li><label>
            <input type='submit' value='Calculate'>
        </label></li>
        <li><label>
            <input type='button' value='Clear input' onClick='window.location.href=window.location.href'>
        </label></li>
    </ul>
    </form>

    @if($tabTotal)
        <h2>Tab total is {{ $tabTotal }} for {{ $splitNum }} people and the tip is {{ $serviceLevel }} of the bill</h2>
        <h2>And everyone pays {{ $total }} </h2>
    @endif
@endsection