<?php
require_once("C:/xampp/htdocs/PI-FATECDSM2SMSB/Site/classes/validadora.php");
class Funcionalidade
{
    public function validaCpf($cpf){
        $cpf = preg_replace("/\D/", "", $cpf);
        if(strlen($cpf) != 11){
            return false;
        }
        $cpfBool1 = $this->validaDigitoCpf(substr($cpf, 0, 10), $this->numericoCpf(substr($cpf, 0, 9)));
        $cpfBool2 = $this->validaDigitoCpf(substr($cpf, 0, 11), $this->numericoCpf(substr($cpf, 0, 10)));
        if(!$cpfBool1 || !$cpfBool2){
            return false;
        }
        return true;
    }
    
    public function validaDigitoCpf($cpf, $calculo){
        if($calculo == 0 || $calculo == 1){
            if(!($cpf[strlen($cpf) - 1] == 0)){
                return false;
            }
        }else{
            if(!(11 - $calculo == $cpf[strlen($cpf) - 1])){
                return false;  
            }
        }
        return true;
    }
    public function numericoCpf($substrCpf){
        $soma = 0;
        $peso = (strlen($substrCpf) + 1);
        for($x = 0; $x < strlen($substrCpf); $x++){
            $digito = $substrCpf[$x];
            $multiplicacao = $digito * $peso;
            $peso--;
            $soma += $multiplicacao; 
        }
        $soma = $soma % 11;
        return $soma;
    }
    public function validaTelefone($telefone){
        $telefone2 = preg_replace("/[^a-zA-Z]/", "", $telefone);
        if(strlen($telefone2) > 0){
            return false;
        }
        $telefone = preg_replace("/\D/", "", $telefone);
        if(strlen($telefone) > 15 || strlen($telefone) < 10){
            return false;
        }
        return true;
    }
    public function validaNome($nome){
        $nome2 = preg_replace("/[^a-zA-Z ]/", "", $nome);
        if(strlen($nome2) != strlen($nome)){
            return false;
        }
        return true;
    }
    
    public function validaNascimento($data){
        $hoje = date("Y-m-d");
        if($data <= "1900-01-01" || $data >= $hoje){
            return false;
        }
        return true;
    }
    public function validaSenha($senha){
        if(strlen($senha) < 8){
            return false;
        }
        return true;
    }
    public function validaCampos($nome, $cpf, $senha, $telefone, $nascimento){
        $nome_valido = $this->validaNome($nome);
        if(!$nome_valido){
            $_SESSION["nome"] = true;
            return false;
        }
        $cpf_valido = $this->validaCpf($cpf);
        if(!$cpf_valido){
            $_SESSION["cpf"] = true;
            return false;
        }
        $senha_valido = $this->validaSenha($senha);
        if(!$senha_valido){
            $_SESSION["senha"] = true;
            return false;
        }
        $telefone_valido = $this->validaTelefone($telefone);
        if(!$telefone_valido){
            $_SESSION["telefone"] = true;
            return false;
        }
        $nascimento_valido = $this->validaNascimento($data_nascimento);
        if(!$nascimento_valido){
            $_SESSION["nascimento"] = true;
            return false;
        }
        return true;
    }
            
}

?>