<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR CODE</title>
</head>
<body>
    

    <div class="container">

        <div class="table-responsive">
            <h3> Gerador de QR CODE</h3> <br>
             <div class="box">
                <form method="$_POST" action="qrcode.php">
                    <div class="form-group">
                        <label for=""> Insira a url</label>
                        <input type="text" 
                            name="qrtext"
                            id="qrtext"
                            placeholder="https://exemplo.com.br"
                            required
                            data-parsley-pattern="^[a-zA-z]+"
                            data-parsley-trigger="keyup"
                            class="form-control">
                       
                        <div class="form-group">
                            <input type="submit" 
                                name="sbt-btn"
                                value="Gerar QR"
                                class="btn btn-sucess">
                        </div>
                    </div>
                </form>
             </div>   
        </div>
    
    </div>


</body>
</html>