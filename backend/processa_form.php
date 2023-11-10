<?php 
$nome=$_GET["nome"];
$idade=$_GET["idade"];
echo '<h1> Dados do Usuário</h1>';
echo '<hr>';
echo "<p>O usuário $nome tem  $idade anos </p>";
echo '<a href="http://localhost/udesc/Projeto1/frontend/index.html"><button> Home Page </button> </a>';
echo '<button type="button" onclick="javascript:history.back()">Voltar</button>';
echo ' <button onclick="window.location.href=\'https:\\www.udesc.br\'"> Vai para UDESC</button>';
?> 
