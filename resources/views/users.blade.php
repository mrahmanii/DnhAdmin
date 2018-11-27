@extends('layouts.app')

@section('content')
    @if (count($users) > 0)
        <table class="table table-striped table-hover">
            <thead>
            <th class="col-sm-1">Lidnr</th>
            <th class="col-sm-1">Naam</th>
            <th class="col-sm-1">Telefoonnummer<i class="fa fa-phone"></i></th>
            <th class="col-sm-2">E-mail<i class="fa fa-at"></i></th>
            <th class="col-sm-0"></th>
            <th class="col-sm-1"></th>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr style="cursor: pointer;"
                    data-href="{{action('UserController@show', ['id' => $user->id]) }}">
                    <td class="table-text">{{ $user->id }}</td>
                    <td class="table-text"><a href="{!! url('userprofile/'.$user->name) !!}">{{ $user->name }}</a></td>
                    <td class="table-text">{{ $user->phone }}</td>
                    <td class="table-text"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                    <form method="get" action="{!! url('user_edit/'.$user->name) !!}">
                        <td class="table-text">
                            <button type="submit" class="btn-edit btn-primary-edit">Bewerken
                            </button>
                        </td>
                    </form>
                    <form method="get" action="{!! url('user_edit/'.$user->name.'/boat_create')!!}">
                        <td class="table-text">
                            <button type="submit" class="btn-edit btn-primary-edit">Schip toevoegen
                            </button>
                        </td>
                    </form>
                    <form method="get" action="{!! url('pdf_generate/'.$user->id)!!}">
                        <td class="table-text">
                            <button type="submit" class="btn-edit btn-primary-edit">PDF Genereren
                            </button>
                        </td>
                    </form>

                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
@section('scripts')
    <script>
        jQuery(document).ready(function ($) {
            $(".row-link").click(function () {
                window.document.location = $(this).data("href");
            });
            $('#cohort-tabs a:first').tab('show') // Select first tab
        });
    </script>
@endsection