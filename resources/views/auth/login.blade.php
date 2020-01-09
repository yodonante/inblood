<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INBLOOD - yodonante</title>
    <link rel="shortcut icon" href="/img/faviconn.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row justify-content-center" style="margin-top:10vh">
                <el-col :xs="{span:'18'}" :sm="{span:'12'}" :md="{span:'12'}" :lg="{span:'9'}" :xl="{span:'9'}">
                    <el-row justify="center">
                        <el-col :xs="{span:'12',offset:'6'}" :sm="{span:'12',offset:'6'}" 
                        :md="{span:'12',offset:'6'}" :lg="{span:'12',offset:'6'}" :xl="{span:'12',offset:'6'}">
                            <img src="/img/logoo.png" width="210" center>
                        </el-col>
                    </el-row>
                    <el-card shadow="hover">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <el-row style="margin-top:30px">
                                <el-col :span="24">
                                    <div class="demo-input-suffix">
                                        <el-input id="email" type="email" name="email" placeholder="Usuario" required></el-input>
                                    </div>

                                    @if ($errors->has('email'))
                                        <script>
                                            M.toast({html: 'El usuario o contraseña ingresado no coincide con los datos registrados en nuestra base de datos'})
                                        </script>
                                    @endif
                                </el-col>
                            </el-row>

                            <el-row style="margin-top:30px">
                                <el-col :span="24">
                                    <div class="demo-input-suffix">
                                        <el-input id="password" type="password" name="password" required placeholder="Contraseña" required show-password></el-input>
                                    </div>            
                                    @if ($errors->has('password'))
                                    <script>
                                        M.toast({html: 'El usuario o contraseña ingresado no coincide con los datos registrados en nuestra base de datos'})
                                    </script>
                                    @endif
                                </el-col>
                            </el-row>
                            
                            <div class="form-group row mb-0" style="margin-top:30px">
                                <div class="col-md-8 offset-md-4">
                                    <el-button name='btn_login' style="background-color:#ad4e5b" type="danger" native-type="submit">Iniciar Sesión</el-button>
                                </div>
                            </div>
                        </form>
                    </el-card>
                </el-col>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
    <script>
        var Main = {
            data() {
                return {
                    input: ''
                }
            }
        }
        var Ctor = Vue.extend(Main)
        new Ctor().$mount('#app')
    </script>
    <style>
    .toast {
        border-radius: 2px;
        top: 35px;
        width: auto;
        margin-top: 10px;
        position: relative;
        max-width: 100%;
        height: auto;
        min-height: 48px;
        line-height: 1.5em;
        background-color: #323232;
        padding: 10px 25px;
        font-size: 1.1rem;
        font-weight: 300;
        color: #fff;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        cursor: default;
      }

      .toast .toast-action {
            color: #eeff41;
            font-weight: 500;
            margin-right: -25px;
            margin-left: 3rem;
        }

        .toast.rounded {
        border-radius: 24px;
        }

        @media only screen and (max-width: 600px) {
            .toast {
                width: 100%;
                border-radius: 0;
            }
        }

        .z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-small, .btn-floating, .dropdown-content, .collapsible, .sidenav {
  -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
}

#toast-container {
  display: block;
  position: fixed;
  z-index: 10000;
}

@media only screen and (max-width: 600px) {
  #toast-container {
    min-width: 100%;
    bottom: 0%;
  }
}

@media only screen and (min-width: 601px) and (max-width: 992px) {
  #toast-container {
    left: 5%;
    bottom: 7%;
    max-width: 90%;
  }
}

@media only screen and (min-width: 993px) {
  #toast-container {
    top: 10%;
    right: 7%;
    max-width: 86%;
  }
}
    </style>
</body>
</html>