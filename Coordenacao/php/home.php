<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'estilos.php'
        ?>

    </head>
    <body>    
                    <?php 
                        if(isset($_SESSION['alert'])){
                            ?>
                <div class="alert alert-success" id="center"><i class="fa fa-envelope-open"> Bem-vindo <?= $_SESSION['tipo']; ?>, Tudo bem <strong><?= $_SESSION['user']?></strong> ? <button class="btn btn-danger" id="cancelar">X</button></i></div>

                    <?php 
                        unset($_SESSION['alert']);
                        }
                    ?>
        <?php include 'menulateral.php';
        ?>

        <section style="min-height: 500px;">               
            
        </section>
        <?php include 'footer.php'; ?>

    </body>
    <script>
        $("#cancelar").click(function(){
            $("#center").hide();
        })
    </script>
</html>