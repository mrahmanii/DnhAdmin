@extends('layouts.app')

@section('tools')
    <li role="navigation">
        <a onClick="window.history.back()">
            <i class="fa fa-arrow-left"></i>&nbspTerug
        </a>
    </li>
@endsection

@section('content')
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Profile</title>

    </head>
    <body>

    <div class="user-container">
        <div class="col-md-7 ">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4> Lid > {{$user->name}} </h4>
                </div>

                <div class="panel-body">
                    <div class="col-sm-6"></div>
                    <div class="clearfix"></div>

                    <div class="col-sm-5 col-xs-6 tital ">Naam:</div>
                    <div class="col-sm-7"> {{ $user->name }} </div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital ">Email:</div>
                    <div class="col-sm-7"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital ">Telefoonnummer:</div>
                    <div class="col-sm-7"> {{ $user->phone }} </div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital ">Adres:</div>
                    <div class="col-sm-7"> {{ $user->adress_street }} </div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital ">Huisnummer:</div>
                    <div class="col-sm-7"> {{ $user->adress_nr }} </div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital ">Woonplaats:</div>
                    <div class="col-sm-7"> {{ $user->adress_city }} </div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital "> Elektriciteit:</div>
                    <div class="col-sm-7">
                        @if ($user->pays_electricity == 0)
                            Betaalt geen elektriciteit
                        @endif

                        @if ($user->pays_electricity == 1)
                            Betaalt elektriciteit
                        @endif
                    </div>
                    <div class="col-sm-7">
                        <br>
                        <h4>{{ $user->name }}'s schepen</h4>
                        @if (count($boats) < 1)
                            Deze gebruiker heeft nog geen schip.
                            <br>
                            (<a href="{!! url('user_edit/'.$user->name.'/boat_create') !!}">Ik wil er nu een
                                toevoegen!</a>)
                        @endif
                        @foreach($boats as $boat)
                            <br>
                            <strong><a href="{!! url('user_edit/'.$user->name.'/boat_edit/'.$boat->id) !!}">{{ $boat->name }}</a></strong>
                            <br>
                            Lengte: {{ $boat->length }} meter
                            <br>
                            @if ($boat->isPrimary == 0)
                                Secundair schip
                            @endif

                            @if ($boat->isPrimary == 1)
                                Primair schip
                            @endif
                            <br>

                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>
                </div>
            </div>
        </div>
    </div>


    </body>

    </html>
@endsection
