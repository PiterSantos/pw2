<?php

include 'db.php';

$nome = $_POST['nome'];
$obs = $_POST['obs'];

$image = $_FILES['image']['name'];
$destino = 'assets/' . basename($image);

if (!is_dir('assets')) {
    mkdir('assets', 0777, true);
}

move_uploaded_file($_FILES['image']['tmp_name'], $destino);

$query = "insert into cadastros(nome, obs) 
values('$nome', '$obs')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
