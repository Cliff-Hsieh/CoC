<!doctype HTML>
<html>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-2">
                    <h2 class="text-primary">{{ $clan['name'] }}</h2>
                    <h4>{{ $clan['tag'] }}</h4>
                </th>
                <th class="col-md-1">{{ $clan['type'] }}</th>
                <th class="col-md-9" colspan="3">{{ $clan['description'] }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Name</th>
                <th>Rank</th>
                <th>Role</th>
                <th>Level</th>
                <th>Trophies</th>
            </tr>
            @foreach ($members as $member)
                @if ( $member['clanRank'] > $member['previousClanRank'])
                    @php ($rank = ($member['clanRank'] - $member['previousClanRank']))
                    @php ($rankIcon = 'glyphicon glyphicon-triangle-top')
                    @php ($rankClass = 'text-success')
                @elseif ($member['clanRank'] < $member['previousClanRank'])
                    @php ($rank = ($member['previousClanRank'] - $member['clanRank']))
                    @php ($rankIcon = 'glyphicon glyphicon-triangle-bottom')
                    @php ($rankClass = 'text-danger')
                @else
                    @php ($rank = '')
                    @php ($rankIcon = 'glyphicon glyphicon-minus')
                    @php ($rankClass = 'text-muted')
                @endif     
            <tr>
                <td><a href="/player/{{ urlencode($member['tag']) }}">{{ $member['name'] }}</a></td>
                <td class="{{ $rankClass }}"><span>{{ $member['clanRank']}}</span>(<span class="{{ $rankIcon }}"><span>{{ $rank }}</span>)</td>
                <td>{{ $member['role'] }}</td>
                <td>{{ $member['expLevel'] }}</td>
                <td><img src="{{ $member['league']['iconUrls']['tiny'] }}" />{{ $member['trophies'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
