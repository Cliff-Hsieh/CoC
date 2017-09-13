<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2 class='text-center text-primary'>全分部最大的戰犯系統上線摟！</h2>
    <table class="table table-striped">
        <thead>
            <tr>
               <th>Order</th><th>ID</th><th>Attack1</th><th>Attack2</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($warLog as $log)
            <tr>
                <td>{{ $log['mapPosition'] }}</td>
                <td>{{ $log['name'] }}</td>
                @if (isset($log['attacks']))
                    @if (count($log['attacks']) > 0)
                        @foreach ($log['attacks'] as $attack)
                            <td><span>{{ $attack['stars'] }}<span><span class="glyphicon glyphicon-star"><span>{{ $attack['destructionPercentage'] }}</span><span>%</span></td>
                        @endforeach
                    @endif
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
