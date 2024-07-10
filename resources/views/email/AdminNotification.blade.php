<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f2f3f8;
            color: #333;
        }
        .container {
            max-width: 670px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 3px;
            padding: 20px;
            box-shadow: 0 6px 18px 0 rgba(0,0,0,.06);
        }
        .content {
            font-size: 15px;
            line-height: 24px;
        }
        .content p {
            margin: 0 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h4>{{ $formData['subject'] }}</h4>
            <p>{{ $formData['message'] }}</p>
            <hr>
            <p>{{ $formData['full_name'] }}</p>
            <p>{{ $formData['email'] }}</p>
            <p>{{ $formData['phone_number'] }}</p>
        </div>
    </div>
</body>
</html>
