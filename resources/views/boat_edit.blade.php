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
    {!! Form::open(['route' => ['boat.update', $boat->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
    <div class="forms">
        <div class="form-group">
            <div class="col-sm-3">
                {!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
                {!! Form::text('name', ''.$boat->name, ['class' => 'form-control', 'placeholder' => ''.$boat->name]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {!! Form::label('length', 'Lengte (meters)', ['class' => 'control-label']) !!}
                {!! Form::text('length', $boat->length, ['class' => 'form-control', 'placeholder' => $boat->length]) !!}
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
                {!! Form::close() !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                {!! Form::open(['method' => 'delete', 'route' => ['boat.destroy', $boat->id]]) !!}
                {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
