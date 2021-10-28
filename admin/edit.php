
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">

</head>

<body>

    <div class="container">

        <h2 class="mt-5 h2 margen"></h2>
        <div class="alert" id="alert" role="alert"></div>
        <form id="form-send">
            <a href="index.php" class="float-left btn btn-success">HOME</a>

            <input type="button" value="Cadatrar" name="submit" id="submit" class="float-right btn btn-info" onclick="cadatrar();">
            </br>
            </br>
            <label>Marca:</label>
            <input type="text" name="marca" id="marca"  class="form-control margen" value="">
            <label>Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control margen" value="">
            <label>Ano Fabrico</label>
            <input type="text" name="ano" id="ano" class="form-control margen" value="">
            <label>Km:</label>
            <input type="text" name="km" id="km" class="form-control margen" value="">
            <label>Preco</label>
            <input type="text" name="valor" id="valor" class="form-control margen" value="">
            <label>Combustivel</label>
            <input type="text" name="combustivel" id="combustivel" class="form-control margen" value="">
            <label>Cor</label>
            <input type="text" name="car" id="cor" class="form-control margen" value="">

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit").click(function() {


                var marca = $('#marca').val();
                var modelo = $('#modelo').val();
                var ano = $('#ano').val();
                var km = $('#km').val();
                var valor = $('#valor').val();
                var combustivel = $('#combustivel').val();
                var cor = $('#cor').val();


                $("#alert").html('');
                if (marca == '') {
                    $("#alert").html("Preencher O Nome")
                    $("#alert").addClass("alert-danger")
                    return false;
                }


                $("#alert").html('');
                if (modelo == '') {
                    $("#alert").html("Preencher o Telefone")
                    $("#alert").addClass("alert-danger")
                    return false;
                }

                $("#alert").html('');
                if (ano == '') {
                    $("#alert").html("Preencher a Cidade")
                    $("#alert").addClass("alert-danger")
                    return false;
                }
                $("#alert").html('');
                if (km == '') {
                    $("#alert").html("Preencher O Km")
                    $("#alert").addClass("alert-danger")
                    return false;
                }


                $("#alert").html('');
                if (valor == '') {
                    $("#alert").html("Preencher o valor")
                    $("#alert").addClass("alert-danger")
                    return false;
                }

                $("#alert").html('');
                if (combustivel == '') {
                    $("#alert").html("Preencher a Combustivel")
                    $("#alert").addClass("alert-danger")
                    return false;
                }
                $("#alert").html('');
                if (cor == '') {
                    $("#alert").html("Preencher a Cor")
                    $("#alert").addClass("alert-danger")
                    return false;
                }



                $("#alert").html('');
                $.ajax({
                    type: "POST",
                    url: "enviar.php",
                    data: {

                        marca: marca,
                        modelo: modelo,
                        ano: ano,
                        km: km,
                        valor: valor,
                        combustivel: combustivel,
                        cor: cor
                    },
                    success: function() {
                        $("#form-send").trigger("reset");
                        $("#alert").addClass("alert-success");
                        $("#alert").html("DADOS INSERIDOS COM SUCESSO");
                        setTimeout(function() {
                            $("#alert").fadeOut('Slow')
                        }, 3000)
                    },

                })
            })
        });
    </script>
</body>

</html>