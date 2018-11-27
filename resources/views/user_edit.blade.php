@extends('layouts.app')

@section('title')
    lid bewerken
@endsection

@section('tools')
    <li role="navigation">
        <a onClick="window.history.back()">
            <i class="fa fa-arrow-left"></i>&nbspTerug
        </a>
    </li>
@endsection
@section('content')
    {!! Form::open(['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
    <div class="forms">
        <div class="form-group">
            <div class="col-sm-3">
                {!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
                {!! Form::text('name', ''.$user->name, ['class' => 'form-control', 'placeholder' => ''.$user->name]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::email('email', ''.$user->email, ['class' => 'form-control', 'placeholder' => ''.$user->email]) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::label('phone', 'Telefoonnummer', ['class' => 'control-label']) !!}
                {!! Form::text('phone', ''.$user->phone, ['class' => 'form-control', 'placeholder' => ''.$user->phone]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {!! Form::label('adress_street', 'Straat', ['class' => 'control-label']) !!}
                {!! Form::text('adress_street', ''.$user->adress_street, ['class' => 'form-control', 'placeholder' => ''.$user->adress_street]) !!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('adress_nr', 'Huisnr', ['class' => 'control-label']) !!}
                {!! Form::text('adress_nr', ''.$user->adress_nr, ['class' => 'form-control', 'placeholder' => ''.$user->adress_nr]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {!! Form::label('adress_zipcode', 'Postcode', ['class' => 'control-label']) !!}
                {!! Form::text('adress_zipcode', ''.$user->adress_zipcode, ['class' => 'form-control', 'placeholder' => ''.$user->adress_zipcode]) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::label('adress_city', 'Woonplaats', ['class' => 'control-label']) !!}
                {!! Form::text('adress_city', ''.$user->adress_city, ['class' => 'form-control', 'placeholder' => ''.$user->adress_city]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5">
                {!! Form::label("pays_electricity", "Betaald electriciteit",['class'=>'control_label']) !!}
                {!! Form::hidden("pays_electricity",$user->pays_electricity) !!}
                {!! Form::checkbox("pays_electricity") !!}
                {!! Form::close() !!}
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i>Opslaan
                </button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                {!! Form::open(['method' => 'delete', 'route' => ['user.destroy', $user->id]]) !!}
                {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
