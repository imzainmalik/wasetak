<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    {{-- <title>Your Email Title</title> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 20px;
        }

        p {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #0062cc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Reset Password</h1>
        <p>Hello {{ $data['name'] }},</p>
        <p>Thank you for signing up for our service. To get started, please click the button below:</p>
        <a href="{{ $data['link'] }}" class="button">Get Started</a>
        <p>If the button above doesn't work, you can also copy and paste the following link into your browser:</p>
        <p>{{ $data['link'] }}</p>
        <p>Thank you,</p>
        {{-- <p>The [Company Name] Team</p> --}}
    </div>
</body>

</html>
