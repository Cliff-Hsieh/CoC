@php
    $donation = $data['donations'];
    $donationReceive = $data['donationsReceived'];
    $donationRate = round(($donation / $donationReceive), 2);
@endphp
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--@include('navbar'); -->

<div class="container">
    <!--<div><input /><button class="btn-primary">Search!</button></div>-->
    <table class="table table-striped">
        <thead>
            <tr>
                <th colspan="5"><h2 class="text-primary">{{ $data['name'] }}</h2>{{ $data['tag'] }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Town Hall Level</th>
                <th>Builder Hall Level</th>
                <th>Level</th>
                <th>Trophies</th>
                <th>All Time Best</th>
            </tr>
            <tr>
                <td>{{ $data['townHallLevel'] }}</td>
                <td>{{ $data['builderHallLevel'] }}</td>
                <td>{{ $data['expLevel'] }}</td>
                <td><img src="{{ $data['league']['iconUrls']['small'] }}" />{{$data['trophies'] }}</td>
                <td>{{ $data['bestTrophies'] }}</td>
            </tr>
            <tr>
                <th>War Star</th>
                <th>Attack Won</th>
                <th>Defense Won</th>
                <th>War Stars Won</th>
                <th></th>
            </tr>
            <tr>
                <td>{{ $data['warStars'] }}</td>
                <td>{{ $data['attackWins'] }}</td>
                <td>{{ $data['defenseWins'] }}</td>
                <td>{{ $data['versusBattleWins'] }}</td>
                <td>{{ $data['role'] }}</td>
            </tr>
            <tr>
                <th colspan="5"><h4 class="text-primary">Clans</h4></th>
            </tr>
            <tr>
                <th>Clan Name</th>
                <th>Clan Level</th>
                <th>Troops Donated</th>
                <th>Troops Received</th>
                <th>Troops Donate Rate</th>
            </tr>
            <tr>
                <td><a href="{{ $data['clan']['tag'] }}">{{ $data['clan']['name'] }}</a><img src="{{ $data['clan']['badgeUrls']['small'] }}" /></td>
                <td>{{ $data['clan']['clanLevel'] }}</td>
                <td>{{ $data['donations'] }}</td>
                <td>{{ $data['donationsReceived'] }}</td>
                <td>{{ $donationRate }}</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
