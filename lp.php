<?php

   /*
   
   se o arquivo existe, ele vai criar um buffer, pegar os dados do arquivo original e jogar nesse buffer,
   -> jogando em uma array e desse array jogando para o arquivo de teste, para verificando como vai ficar


   caso o arquivo nao exista, ele vai criar um novo .pjs que é arquivo buffer, quando a pessoa clicar para salvar, ele vai criar um novo como a pessoa escreveu e apagar o arquivo temporario 



   */
system("clear");

$options = getopt("f:hp", ["-f"]);
$armazenamento = array();
$armazenamento2 = array();
// quando clicar para salvar, ele vai excluir o arquivo temporario e salvar com o nome principal
// pegar arquivo, se ele nao existir, criar um( mas criando primeiro o arquivo buffer)

system("stty raw");
function buffer_($arquivo_file){

   while($buffer = fgets($arquivo_file, 300)){ // lendo arquivo
      $e = explode("\n", $buffer);
      array_push($armazenamento, $e);
      while(true){
         $swap = @fopen($options["f"].".pjs", "a+");// cria um arquivo temporario 
         for($pp = 0; $pp <= count($e)+1; $pp++){ // gravando coluna por coluna
               fwrite($swap, $armazenamento[0][$pp]);
            } 
         while($bufferr = fgets($swap, 900)){ // ler o arquivo temporario   
            // envia os dados do aramazenamento para o arquivo temporario 
            echo $bufferr;
            // parte do cursor, ele vai andar de acordo com as colunas que existem no arquivo
            // vai contar quantas linhas tem em cada coluna, criar um 

            
         }
      }
   }
}

try{
   $file = @fopen($options["f"], "r+");
   

   if(file_exists($options["f"])){

         while(true){
            buffer_($file);
         }
         
      }else{
         echo "nao existe";
   }

}catch(Exception $error){
   echo $error;
}

system("stty sane");