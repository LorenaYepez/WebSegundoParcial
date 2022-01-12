<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Ventas</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
   	
   	<form action="" method="post">
   		<img src="img/user.png" class="user">
		   <h3>Acceder</h3>
   		   <!-- correo -->
			  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                     <input class="input100" type="email" name="correo" id="correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     <span class="focus-input100"></span>
                     <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                     </span>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
		   <input type="password" name="contraseña" placeholder="Contraseña" id="t">

   		<input type="submit" value="INGRESAR" id="b">
   	</form>
</body>
<script>
      // function Login(){
      //             var urlajax="http://localhost:8000/api/medico/login";
      //             var correo = $("#correo").val();
      //             var contrasena = $("#contrasena").val();
      //             var datos= {
      //                         correo: correo,
      //                         contrasena:contrasena,
      //                   }; 
      //             $.ajax({                    
      //                   url: urlajax,
      //                   data: {
      //                         correo: correo,
      //                         contrasena:contrasena} , 
      //                   type : 'POST',
      //                   dataType: "json",
                                          
      //                   beforeSend:function( ) {   
      //                   //   $("#btncarga").show();
      //                   },                    
      //                   success:function(response) {
      //                         console.log(Response);
      //                   },
      //                error: function (data) {
      //                   // console.log(data.responseText);
      //                   console.log(data);
      //                },               
      //                complete:function( ) {
      //                   //var gnNumeroTransaccion,gnSwVerificacionQr;
      //                },
      //             });
      //       }
function error(tnIdImput)
{             
$(tnIdImput).css("border-color", "red");
$(tnIdImput).css("border-style", "outset");
$(tnIdImput).css("border-width", "revert");
}
function valido(tnIdImput)
{             
$(tnIdImput).css("border-color", "#47FB13");
$(tnIdImput).css("border-style", "outset");
$(tnIdImput).css("border-width", "revert");
}
</script>
</html>