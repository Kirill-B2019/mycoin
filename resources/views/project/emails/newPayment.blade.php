<DOCTYPE html>
    <html lang=”en-US”>
    <head>
        <meta charset=”utf-8">
        <title>Платеж принят в обработку</title>
    </head>
    <body>
    <h2>Здравствуйте, {{$user->name}}!</h2>
    <p>Ваш платеж <strong>{{$payment->amount}} {{$currency_name}}</strong> принят.</p>
    <p>Информацию о статусе платежа  вы можете посмотреть в личном кабинете.</p>
    <a href ="{{getenv('APP_DOMAIN')}}/login">Перейти в личный кабинет</a><br>
    --------------------------------<br>
    С уважением, команда площадки <br>
    {{config('app.name')}}<br>
    <img src="https://is.my-coin.one/images/logo-2.png"  alt="{{config('app.name')}}"/>
    </body>
    </html>
