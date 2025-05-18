<?php
   /*
   
   ler um arquivo de texto, enviar todos os dados dentro dele 
   para um lugar na memoria, fazer tipo de input ler os dados
   
   */
system("clear");

// $options = getopt("f:hp", ["-f","-h","-v"]);



// $buffer_memoria = array(); // array para armazenar dados

// $f = fopen($options["f"].".pjs", "a+"); // abrindo ou criando arquivo de produção 

/////////////////////////////////////////////////////
// $original_file = fopen($options["f"], "r"); // lendo arquivo original

// $read_original_file = fread($original_file, filesize($options["f"]));

// $separar = explode("\n", $read_original_file);
// $countt = count($separar);

// array_push($buffer_memoria,$separar);

/////////////////////////////////////////////////////

// print_r($buffer_memoria);

// criar um arquivo reserva para escrever nele, quando 
// clicar para salvar, tudo no arquivo será corpiado


// if(file_exists($options["f"],"r+")){
//    return 0;
// }

function interfacee(){
   $coluna = exec("tput cols");
   $linha = exec("tput lines");



   while(true){
      system("clear");
      for($x = 0; $x<= $coluna-2; $x++){
         echo "=";
      }
   }
}

interfacee();