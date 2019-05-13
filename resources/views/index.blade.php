<!DOCTYPE html>
<html>
  <head>
    <title>Pago con Paypal</title>
    <meta charset="utf-8">
    <meta description="Acepta pagos con Paypal">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
  </head>
  <body id="home">
    <div class="container">
      @if($message = Session::get('Success'))
      <div class="success"><span onclick="this.parentElement.style.display='none'">&times;</span>
        <p>{!! $message !!}</p>
      </div><?php Session::forget('success');?>
      @endif
      @if($message = Session::get('Success'))
      <div class="error"><span onclick="this.parentElement.style.display='none'">&times;</span>
        <p>{!! $message !!}</p>
      </div><?php Session::forget('error');?>
      @endif
      <form method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
        <h1>Pago con Paypal</h1>
        {{ csrf_field() }}
        <input type="number" name="monto" placeholder="Monto">
        <input type="submit" value="Pagar">
      </form>
    </div>
  </body>
</html>