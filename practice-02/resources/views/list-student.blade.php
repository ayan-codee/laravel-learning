<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h2>Student Records</h2>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>batch</th>
                <th>name</th>
                <th>cource</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $std)
            <tr>
                <td>{{$std->id}}</td>
                <td>{{$std->name}}</td>
                <td>{{$std->batch}}</td>
                <td>{{$std->cource}}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
