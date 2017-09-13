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
                <th>Clan Name</th>
                <th>Clan ID</th>
                <th>Clan Type</th>
                <th>Clan Level</th>
                <th>War Wins</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($clans as $clan)
        <tr>
             <td>{{ $clan['name'] }}</td>
             <td>{{ $clan['tag'] }}</td>
             <td>{{ $clan['type'] }}</td>
             <td>{{ $clan['clanLevel'] }}</td>
             <td>{{ $clan['warWins'] }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
