<?php
    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result ->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $endereco = $user_data['endereco'];
            $data_nasc = $user_data['data_nasc'];
            $estado = $user_data['estado'];
            $cidade = $user_data['cidade'];
            }
        }

        else
        {
            header('Location: sistema.php');
        }
    }else{
        header('Location: sistema.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>

<a href="sistema.php">Voltar</a>

    <div class="box">
        <form action="saveEdit.php" method="post">
            <fieldset>
                <legend><b>Formulario de cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" value="<?php  echo $nome?>" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" value="<?php  echo $email?>" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" value="<?php  echo $senha?>" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" value="<?php  echo $telefone?>" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br>
                <br>

                    <label for="data_nascimento"><b>Data de nascimento:</b> </label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php  echo $data_nasc?>" required>

                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" value="<?php  echo $cidade?>" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" value="<?php  echo $estado?>" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" value="<?php  echo $endereco?>" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>

                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>
