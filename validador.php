<?php
function validar_cpf($cpf){
    $cpf = preg_replace('/[^0-9]/','',$cpf);
    if(strlen($cpf)!=11||preg_match('/(\d)\1{10}/',$cpf)){
        return false;
    }
    for($i=9;$i<11;$i++){
        $acumulador=0;
        for($j=0;$j<$i;$j++){
            $peso=($i+1)-$j;
            $acumulador+=$cpf[$j]*$peso;
        }
        
        $acumulador=(10*$acumulador)%11;
        if($acumulador!=$cpf[$i]){
            return false;
        }
    }
    return true;
}

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $cpf=$_POST["cpf"]??"";
        //echo $cpf;
        if(validar_cpf($cpf)){
            echo "Este é um cpf válido.";
        }else{
            echo "Este é um cpf inválido.";
        }
        echo "<a href='index.php'>Voltar</a>";
    }else{
        header("Location:index.php");
    }
?>