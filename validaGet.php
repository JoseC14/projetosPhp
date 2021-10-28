<?php 
  
  $valor = $_GET['vlr'];
  

  if(isset($valor)){
    echo "Você clicou no link: ".$valor;
  }else{
    echo "Nenhum valor foi selecionado";
  }
  ;
 

 ?>