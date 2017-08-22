<!doctype html>

<html>
<head>

<title> Exercicio aula02</title>
  <meta charset = "utf-8">
  
  <style>
    table {
        border : 1px solid black;
        margin : auto;
    }
 
  t{
    border : 1px solid black; 
  }
 
    body {
    text-align : center;
   
 }
 
  </style>
  
</head>
  
<body>

<?php
  $A=10;
  $B=20;
?>

  <h1> PHP - aula02 </h1>
  
  <h3> Considerando de A seja igual a 10  e B seja igual a 20, eis os seguintes calculos: </h3>
  
 <table>
 
  <tr>
      <th>  Operacao </th>
      <th> Resultado </th>
  </tr>
  
  <tr>
      <td>  A+B </td>
      <td> 
      <?php 
        echo $A+$B;
      ?> </td>
  </tr>
  
  <tr>
      <td>  A-B </td>
      <td> 
      <?php
        echo $A -$B;
        ?>
      </td>
  </tr>
  
  <tr>
      <td> A X B </td>
      <td> 
       <?php
        echo $A*$B;
        ?>
      </td>
  </tr>
  
  <tr>
      <td>  A/B </td>
      <td> 
      <?php
        echo $A/$B;
        ?>
      
      </td>
  </tr>
  
  <tr>
      <td>  B <sup>a </sup> </td>
      <td> 
      <?php
        echo pow($base, $exponente);
      ?>
      </td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
 </table>
  
