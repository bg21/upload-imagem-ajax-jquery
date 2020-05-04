<?php 
    class Painel{
        public static function imagemValida($img){
            //https://www.php.net/manual/pt_BR/function.image-type-to-mime-type.php
            if( $img['type'] == 'image/jpeg' || 
                $img['type'] == 'image/png' || 
                $img['type'] == 'image/webp' || 
                $img['type'] == 'image/jpg'){
                //Verificar o tamanho agora
                $tamanho = intval($img['size']/1024);
                if($tamanho < 900){
                    return true;
                }else{
                    return false;
                }
                //é uma imagem
            }else{
                return false;
                
            }
        }
        public static function uploadFile($file){
            $formatoArquivo = explode('.',$file['name']); //assim vc pega o nome do arquivo
            $nomeImagem = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1]; //vai gerar um id único
            if(move_uploaded_file($file['tmp_name'], BASE_DIR_PAINEL.'/uploads/'.$nomeImagem)){
                return $nomeImagem;
            }else{
                return false;
            }
        }
    }
?>