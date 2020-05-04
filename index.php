<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="cadastro">
        <form method="post" id="cadastroUser" enctype="multipart/form-data">
            <input type="file" id="file" name="file" />
            <br><br>
            <div class="input_group">
                <input type="submit" name="cadastro_user" id="inputcadastroUser" class="btn cadastro" value="Cadastre-se">
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/forms.js"></script>
</body>
</html>