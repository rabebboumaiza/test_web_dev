<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>QR Code Generator</title>
</head>
<body>
    <script>
        // your "Imaginary javascript"
        
         window.location.href = '{{route("qr-code")}}'; //using a named route
        </script>
    <div class="container">
    <h4>QR generate</h4>
    <br>
    <div class="row">
        @foreach($tabs as $tab)
        <div class="col-md-3 mb-2">
                {!! QrCode::size(150) ->generate($tab) !!}
                {!! QrCode::format('png') ->size(200)
                    ->generate($tab,storage_path('qrcode/code_'.$tab.'_'.time().'.png')) !!}
                    <h5 class="align-center">{{$tab}}</h5>
        </div>
        @endforeach
    </div>
    <br><br>
    <div class="container">
            <a href="{{ route('create-zip',['download'=>'zip']) }}" class="btn btn-info" >Download ZIP</a>	
    </div>
    



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>