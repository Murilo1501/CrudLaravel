<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
</head>
<body>

    <h1>Usuários cadastrados no sistema:</h1>
    <table>
        @foreach($users as $dataUser)
            <tr>
                <td>{{$dataUser->name}}</td>
                <td>{{$dataUser->email}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>