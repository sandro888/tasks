<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th {
            text-transform: uppercase
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 15px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>lastName</th>
            <th>email</th>
            <th>biography</th>
            <th>date</th>

        </tr>
        @foreach ($newdata as $data)

        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$data["name"]}}</td>
            <td>{{$data["lastname"]}}</td>
            <td>{{$data["email"]}}</td>
            <td>{{$data["biography"]}}</td>
            <td>{{$data["date"]}}</td>
        </tr>
        @endforeach

    </table>
</body>

</html>