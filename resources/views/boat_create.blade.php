@extends('layouts.app')

@section('title')
    Nieuw schip toevoegen
@endsection

@section('tools')
    <li role="navigation">
        <a onClick="window.history.back()">
            <i class="fa fa-arrow-left"></i>&nbspTerug
        </a>
    </li>
@endsection
@section('content')
    {!! Form::open(['route' => ['boat.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
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
                    {!! Form::label('length', 'Lengte (meters)', ['class' => 'control-label']) !!}
                    {!! Form::text('length', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        {!! Form::label("isPrimary", "Primair schip",['class'=>'control_label']) !!}
                        {!! Form::hidden("isPrimary",0) !!}
                        {!! Form::checkbox("isPrimary") !!}

                        {!! Form::hidden("ownerId",$user->id) !!}
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
