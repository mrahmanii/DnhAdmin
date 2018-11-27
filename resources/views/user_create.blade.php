@extends('layouts.app')

@section('title')
    Nieuw lid toevoegen
@endsection

@section('tools')
    <li role="navigation">
        <a onClick="window.history.back()">
            <i class="fa fa-arrow-left"></i>&nbspTerug
        </a>
    </li>
@endsection
@section('content')
    {!! Form::open(['route' => ['user.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="forms">
            <div class="form-group">
                <div class="col-sm-3">
                    {!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('phone', 'Telefoonnummer', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    {!! Form::label('adress_street', 'Straat', ['class' => 'control-label']) !!}
                    {!! Form::text('adress_street', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
                <div class="col-sm-1">
                    {!! Form::label('adress_nr', 'Huisnr', ['class' => 'control-label']) !!}
                    {!! Form::text('adress_nr', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    {!! Form::label('adress_zipcode', 'Postcode', ['class' => 'control-label']) !!}
                    {!! Form::text('adress_zipcode', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('adress_city', 'Woonplaats', ['class' => 'control-label']) !!}
                    {!! Form::text('adress_city', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-5">
                    {!! Form::label("pays_electricity", "Betaald electriciteit",['class'=>'control_label']) !!}
                    {!! Form::hidden("pays_electricity",0) !!}
                    {!! Form::checkbox("pays_electricity") !!}
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>Opslaan
                    </button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
