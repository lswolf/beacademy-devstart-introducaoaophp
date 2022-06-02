<?php
declare(strict_types=1);

function Login(string $email, string $senha){
    $connect = mysqli_connect('localhost','root','','be');
  
      if (isset($entrar)) {
  
        $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
  
          if (mysqli_num_rows($verifica)<=0){
  
            return 'email e/ou senha incorretos';
           
  
          }else{
  
              return 'Bem Vindo! pena que não tem para aonde ir agora kk ¯\_(ツ)_/';
          }
  
      }
      mysqli_close($connect);

}
function Cadastro(string $email, string $senha, string $nome, int $cpf){
$senha = password_hash($senha, PASSWORD_ARGON2I);
$connect = mysqli_connect('localhost','root','','be');

$query_select = "SELECT email , cpf FROM usuarios WHERE email = '$email' OR cpf = '$cpf'";

$select = mysqli_query($connect,$query_select);

$array = mysqli_fetch_array($select);

$emailarray = $array['email'];

$cpfarray = $array['cpf'];

if(($emailarray == $email)||($cpfarray == $cpf)){

        return 'Esse email ou cpf já existe';

        die();
      }else{

        $query = "INSERT INTO usuarios (email,senha,nome,cpf) VALUES ('$email','$senha','$nome','$cpf')";

        $insert = mysqli_query($connect,$query);

        if($insert){

          return 'Usuário cadastrado com sucesso!';

        }else{

         return 'Não foi possível cadastrar esse usuário';

        }

      }
      mysqli_close($connect);

}
function Listar(){

}
 