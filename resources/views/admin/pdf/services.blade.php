<!DOCTYPE html>
<html>
<head>
    <title>Services Report</title>

    <style>

        body{
            font-family: Arial, sans-serif;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table,th,td{
            border:1px solid black;
        }

        th,td{
            padding:8px;
        }

    </style>

</head>
<body>

<h1>Reyvora Analytics</h1>

<h3>Services Report</h3>

<table>

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
</tr>

@foreach($services as $service)

<tr>
    <td>{{ $service->id }}</td>
    <td>{{ $service->title }}</td>
    <td>{{ $service->description }}</td>
</tr>

@endforeach

</table>

</body>
</html>