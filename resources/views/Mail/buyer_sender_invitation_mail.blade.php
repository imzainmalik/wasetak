<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

    </head>
    <body>
        <div>
            <p>Hello!</p>
            <p>You are invited to {{config('app.name')}}!</p>
            <p>One of our users has sent you an invite, so you can begin your transaction under a safe middleman platform. SWAPD offers escrow services to make sure your item and money get from point A to point B, in a safe and secure manner. Ready to begin?</p>
            <p>Transaction participants:</p>
            <hr/>
            <p>Seller: <b>{{$buyer_email}}</b></p>
            <p>Buyer: <b>{{$seller_email}}</b></p>
            <p>To begin, please <a href="{{route('user.index')}}">register</a> and start a checkout ticket.</p>
            <p>If you received this email by mistake, simply ignore it.</p>
        </div>
    </body>
</html>
