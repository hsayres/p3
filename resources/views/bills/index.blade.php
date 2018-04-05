@extends('layouts.master')

@section('content')
    <h1>{{config('app.name')}}</h1>

    <form method='GET' action='/bills'>
    <ul>
        <li><label>How much was the tab?
            <span>$</span>
            <input type='number' name='tabTotal' min='0' step='.01' value='{{ $tabTotal or old('tabTotal') }}' >
            <span class='required'> *required </span>
             @include('modules.error-field', ['field' => 'tabTotal'])
        </label></li>
        <li><label >Split how many ways?
            <input type='number' name='splitNum' min='1' value='{{ $splitNum or old('splitNum') }}'>
            <span class='required'> *required </span>
             @include('modules.error-field', ['field' => 'splitNum'])
        </label></li>
        <li><label >How was the service?
            <select name='serviceLevel' id='serviceLevel' >
                <option value='100'>Select an option</option>
                @foreach(config('app.possibleServiceLevels') as $serviceLevel => $description)


                    <option value="{{ $serviceLevel }}"  @if( (Request::has('serviceLevel') && Request::input('serviceLevel') ==  $serviceLevel) or (Request::old('serviceLevel') == $serviceLevel))) selected='selected' @endif> {{ $description }} </option>
                @endforeach
            </select>
            <span class='required'> *required </span>
            @include('modules.error-field', ['field' => 'serviceLevel'])
        </label></li>
        <li><label >Round up?:
            <input type='checkbox' name='roundUp' id='roundUp' value='1' @if (Request::has('roundUp')) or (old('roundUp'))) checked="checked" @endif> Yes
        </label></li>

        <li><label>
            <input type='submit' value='Calculate' name='submitInput' class='btn-primary inputButton'>
        </label></li>
        <li><label>
            <input type='button' value='Clear input' onclick="window.location.href='/bills'" class='btn-danger inputButton'>
        </label></li>
    </ul>
    </form>

    @if($tabTotal)
        <p class='bg-success'>Everyone owes $<?= $total ?> each</p>
    @endif
@endsection