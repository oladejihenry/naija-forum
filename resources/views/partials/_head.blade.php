<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Naijaswift Forum</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/real.css')}}">
        <link rel="stylesheet" href="{{asset('css/invalid.css')}}">
        <link rel="stylesheet" href="{{ asset('minified/themes/default.min.css') }}">
        <script src="{{asset('minified/sceditor.min.js')}}"></script>
        <script src="{{asset('minified/icons/monocons.js')}}"></script>
        <script src="{{asset('minified/formats/bbcode.js')}}"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            ul {
                list-style: none;
                padding: 0;
            }
            .inner {
                    padding-left: 1em;
                    overflow: hidden;
                    display: none;
                
                }
            .inner li {
                font-size: 11px;
                padding: 5px;
            }
            .inner:show {
                /*display: block;*/
                }
            a.toggle {
                    width: 100%;
                    display: block;
                    background: #ffffff;
                    color: #838383;
                    padding: 10px 0;
                    border-radius: 0.15em;
                    transition: background .3s ease;
                }
            a.toggle:hover {
               
            }
        </style>
    </head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i style="font-size:10px" class="fa fa-chevron-up"></i></button>