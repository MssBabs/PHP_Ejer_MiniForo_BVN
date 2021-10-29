<?php
   /* CHEQUEAR USUARIO-> REQUISITOS REGISTRO: NOMBRE USUARIO =< 8 && CONTRASELA == NOMBRE USUARIO ESCRITO AL REVÉS*/
   function usuarioOk($nombre, $contraseña) :bool {
      $checkUsuario= false;
      $checkcontraseña= false;
      
      /* STRINGS LENGTH: strlen()-> cuenta chars String */
      if(strlen($nombre) >= 8){
         $checkUsuario= true;
      } else{
         echo '<script language="javascript">alert("ERROR, nombre de usuario requiere minimo 8 caracteres");</script>';
      }

      /* STRINGS REVERSE: strrev()-> Invierte String */
      $usuarioInvertido= strrev($nombre);
      
      /* STRINGS COMPARE: strcmp()-> Devuelve un num: 0 igual, 1 diferente */
      if(strcmp($contraseña, $usuarioInvertido)==0){
         $checkcontraseña= true;
      } else{
         echo '<script language="javascript">alert("ERROR, la contraseña no es igual al nombre invertido de usuario");</script>';
      }

      if(($checkUsuario == true)&&($checkcontraseña == true)){
         return true;
      } else{
         return false;
      }
   }

   /* TEXTO MAX: 300-> RESTRINCION HTML: MACLENGTH */

   /*DETALLES*/
   function numsChars(){
      $numsChars= strlen($_REQUEST['comentario']);
      return $numsChars;
   }
   function numPalabras(){
      $numsPalabras= count(explode(" ", $_REQUEST['comentario']));
      return $numsPalabras;
   }
   function letraMasRepe(){
      $comentario= $_REQUEST['comentario'];
      $auxChar="";
      $numAuxChar=0;
      $charMasReper="";
      $numCharMasRepe=0;

      for($i=0; $i<strlen($comentario); $i++){
         if($i==0){
            $charMasReper=$comentario[$i];
            $numCharMasRepe=substr_count($comentario, $charMasReper);
         }else{

            $auxChar=$comentario[$i];
            $numAuxChar=substr_count($comentario, $auxChar);

            if($numAuxChar>$numCharMasRepe){
               $charMasReper= $auxChar;
               $numCharMasRepe= $numAuxChar;
            }
         }
      }
      return $charMasReper;
   }
   function palabraMasRepe(){
      $comentario= $_REQUEST['comentario'];
      $palabras= explode(" ", $comentario);
      $auxPalabra="";
      $numAuxPalabra=0;
      $palabraMasRepe="";
      $numPalabraMasRepe=0;

      for($i=0; $i<count($palabras); $i++){
         if($i==0){
            $palabraMasRepe= $palabras[$i];
            
            $numPalabraMasRepe=substr_count($comentario, $palabraMasRepe);
         }else{

            $auxPalabra= $palabras[$i];
            $numAuxPalabra=substr_count($comentario, $auxPalabra);

            if($numAuxPalabra>$numPalabraMasRepe){
               $palabraMasRepe= $auxPalabra;
               $numPalabraMasRepe= $numAuxPalabra;
            }
         }
      }
      return $palabraMasRepe;
   }
?>