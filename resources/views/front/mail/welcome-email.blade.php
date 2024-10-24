<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        p{
            text-align: justify;
            color: rgb(0, 0, 0);
        
        }
        h1{
            text-align: center;
            color: rgb(71, 60, 60);
        
        }

    </style>
</head>
<body >
   <center> <img src="{{ asset('front-assets/images/logo1-black.png') }}" style='max-width:90px' alt="logo"></center>
   <h1>Welcome {{ $userName }}</h1>
   <pre><p >{{ $userMessage }}</p></pre>
   {{-- @dd($name ) --}}
</body>
</html>