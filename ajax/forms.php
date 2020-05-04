<?php
    include('../config.php');

    $result['sucesso'] = true;
    $result['mensagem'] = "";
    $img = '';

    if(empty($_FILES['file'])){
        $result['sucesso'] = false;
        $result['mensagem'] = 'Escolha uma imagem.';
    }else{
        if(isset($_FILES['file'])){
            if(\Painel::imagemValida($_FILES['file'])){
                //se a imagem for válida faz o upload
                $img = $_FILES['file'];
                $img = \Painel::uploadFile($img);
                $insere = \Conexao::conectar()->prepare("INSERT INTO tb_imagem VALUES (null, ?)");
                $insere->execute([$img]);
                if($insere){
                    $result['sucesso'] = true;
                    $result['mensagem'] = "Cadastro realizado com sucesso.";
                } 
            }else{
                $img = '';
                $result['sucesso'] = false;
                $result['mensagem'] = ' Informe um formato de imagem correto.<br> *Formatos permitidos: jpg, png e jpeg.';
            }             
        }    
    }

    die(json_encode($result));
