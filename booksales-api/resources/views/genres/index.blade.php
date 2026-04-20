<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semua Data Genre</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
        }

        th {
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 20px;
            border-bottom: 1px solid #e0e0e0;
            color: #444;
            font-size: 15px;
        }

        tbody tr {
            transition: background 0.2s ease;
        }

        tbody tr:nth-child(even) {
            background: #f8f9fb;
        }

        tbody tr:hover {
            background: #eef0ff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Table Data Genre</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['description'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div style="text-align: center">
            <a href="{{ route('authors.index') }}" style="text-decoration: none">Ke Data Author</a>
        </div>
    </div>
</body>
</html>