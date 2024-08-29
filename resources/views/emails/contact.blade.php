<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Contact Email') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #ffffff;
            overflow: hidden; /* Ensures corners are rounded properly */
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            text-align: center;
            background-color: #9B48D4;
            padding: 10px;
        }
        .content {
            padding: 20px;
        }
        .info {
            font-size: 16px;
            color: #555555;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #999999;
            text-align: center;
            padding: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">{{ __('EfficiënC') }}</div>
        <div class="content">
            <div class="info">
                {{ __('Dear,') }}
                <br><br>
                {{ __('The first step towards less stress and higher efficiency for your business has been taken!') }}
                <br><br>
                {{ __('I would like to schedule an intake meeting to discuss our possibilities together. For this, it would be useful to plan a Teams call.') }}
                <br><br>
                {{ __('Could you please let us know when this would be most convenient for you?') }}
                <br><br>
                {{ __('I look forward to hearing from you.') }}
            </div>
        </div>
        <div class="footer">
            {{ __('Kind regards,') }}<br>
            {{ __('Jeroen Bolhuis from EfficiënC') }}
        </div>
    </div>
</body>
</html>
