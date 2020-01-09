<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INBLOOD - yodonante</title>
    <link rel="shortcut icon" href="/img/faviconn.png">
    <link rel="stylesheet" href="/css/plantilla.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background-color:#f0f2f5">
    <div id="app">
        <el-row>
            <el-col :span="2" class="sidebar-container">
                <sidebar style="height:100%"></sidebar>
            </el-col>
            <el-col :span="22" class="main-container">
                <navbar></navbar>
                <router-view></router-view>
            </el-col>
        </el-row>
    </div>
    
    <script src="/js/app.js"></script>
    <script src="/js/plantilla.js"></script>

</body>
</html>