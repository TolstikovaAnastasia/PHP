<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }

        #username {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        #password {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
                <h3>Регистрация</h3>
                <label for="registName" class="visually-hidden">Введите ваше имя</label>
                <input type="text" id="registName" name="registName" class="form-control mt-3" placeholder="Имя" required="" autofocus="">
                <label for="registUsername" class="visually-hidden">Введите логин</label>
                <input type="text" id="registUsername" name="registUsername" class="form-control mt-3" placeholder="Логин" required="" autofocus="">
                <label for="registPassword" class="visually-hidden">Введите пароль</label>
                <input type="password" id="registPassword" name="registPassword" class="form-control" placeholder="Пароль" required="">
                <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Зарегистрироваться</button>
                <div class="mt-3">
                    <a href="/">На главную</a>
                </div>
            </form>
        </div>
    </div>
</body>