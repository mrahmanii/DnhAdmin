<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: verdana,arial,sans-serif;
            font-size:11px;
            color:#333333;
            border-width: 1px;
            border-color: #a9c6c9;
            border-collapse: collapse;
        }

        th, td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #a9c6c9;
        }

        .even {
            background-color:#d4e3e5;
        }
        .odd {
            background-color:#c3dde0;
        }

        .total{
            background-color:#90D4AD;
        }
    </style>
</head>
<body>
<div>
    <div style="display: inline-block; width: 50%; vertical-align:top;" >
        <h1>Jaarrekening {{$year}}</h1>    </div>
    <div style="display: inline-block; width: 49%; vertical-align:top; text-align: right;">
        <?php
        echo '<p style="font-size: 10px;"> Datum van genereren: ' . date("Y-m-d h:i:sa") . '</p>';
        ?>
    </div>
</div>
<div style="width: 99%; float: center;">
    <table style="width: 100%">
        <thead>
        <tr style="background-color:#c3dde0;">
            <th>{!! 'Naam' !!}</th>
            <th>{!! 'Inkomsten' !!}</th>
            <th>{!! 'Uitgaven' !!}</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $c = 0;
        ?>
        @foreach($data as $element)
            <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">
                <td>{!! $element->name !!}</td>
                <td class="inkomsten">{!!'€ '. $element->debt !!}</td>
                <td class="uitgaven"> {!!'€ '. $element->credit !!}</td>
            </tr>
        @endforeach
        <tr class="total">
            <td>{!! 'Totaal' !!}</td>
            <td>{!! 1200 !!}</td>
            <td>{!! 1400 !!}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>