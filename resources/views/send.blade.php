<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="wrap">
        <h1>Регистрация</h1>
        <div class="row align-items-center gap-3">

            <div class="row ">
                <div class="col">
                    Наименование организации: {{$nameOrganization}}
                </div>


                <div class="col">
                    Юридический адрес организации: {{$legalAdress}}
                </div>

                <div class="col">
                    Почтовый индекс: {{$postcode}}
                </div>

            </div>
            <div class="row">
                <div class="col">
                    Телефонный номер: {{$number}}
                </div>


                <div class="col">
                    Название банка: {{$bankname}}
                </div>


                <div class="col">
                    E-mail адрес организации: {{$email}}
                </div>


            </div>
            <div class="row">
                <div class="col">
                    БИН: {{$bin}}
                </div>


                <div class="col">
                    БИК: {{$bik}}
                </div>


                <div class="col">
                    ИИК: {{$iik}}
                </div>

            </div>

            <div class="row">
                <div class="col">
                    Ответственное лицо: {{$responsPerson}}
                </div>


                <div class="col">
                    Телефон ответственного лица: {{$responsnumber}}
                </div>


                <div class="col">
                    E-mail ответственного лица: {{$responsemail}}
                </div>


            </div>
            <div class="row">
                <div class="col">
                    ФИО руководителя организации: {{$name}}
                </div>


                <div class="col">
                    Желаемое название доменного имени в зоне edu.kz: {{$domain}}
                </div>


            </div>
        </div>
    </div>
</div>
</body>
</html>
