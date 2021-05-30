<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{asset('images/icon.png')}}">
        <style>
            body, html {
                height: 100%;
                margin: 0;
            }

            .bg {
                /* The image used */
                background-image: url('{{asset('images/bg.png')}}');

                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            @media only screen and (max-width: 600px) {
                .bg{
                    background-color: #231f20;
                    background-size: contain;
                }
            }

        </style>
    </head>
    <body>
        <div class="bg"></div>
    </body>
</html>
