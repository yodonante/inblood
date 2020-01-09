<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
     {{'name'}}
     </div>
    <form action="persona/importar" method="post">
        {{ csrf_field() }}
        <label for="excel">Sube tu archivo</label>
        <input type="file" name="excel" id="excel">
        <input type="submit" value="Subir">
    </form>
</body>
</html>