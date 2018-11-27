@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lid toevoegen</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Naam</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Telefoonnummer</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                            <label for="zipcode" class="col-md-4 control-label">Postcode</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}" required autofocus>

                                @if ($errors->has('zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                           </div>
                        </div>

                        <div class="form-group{{ $errors->has('adress_street') ? ' has-error' : '' }}">
                            <label for="adress_street" class="col-md-4 control-label">Straat</label>

                            <div class="col-md-6">
                                <input id="adress_street" type="text" class="form-control" name="adress_street" value="{{ old('adress_street') }}" required autofocus>

                                @if ($errors->has('adress_street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress_street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('adress_nr') ? ' has-error' : '' }}">
                            <label for="adress_city" class="col-md-4 control-label">Huisnummer</label>

                            <div class="col-md-6">
                                <input id="adress_nr" type="text" class="form-control" name="adress_nr" value="{{ old('adress_nr') }}" required autofocus>

                                @if ($errors->has('adress_nr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress_nr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('adress_city') ? ' has-error' : '' }}">
                            <label for="adress_city" class="col-md-4 control-label">Plaats</label>

                            <div class="col-md-6">
                                <input id="adress_city" type="text" class="form-control" name="adress_city" value="{{ old('adress_city') }}" required autofocus>

                                @if ($errors->has('adress_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress_city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pays_electricity" class="col-md-4 control-label">Telefoonnummer</label>

                            <div class="col-md-6">
                             {!! Form::checkbox("pays_electricity",true,false) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" clas="btn btn-primary">
                                    <i class="btn btn-primary"></i>Toevoegen
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
