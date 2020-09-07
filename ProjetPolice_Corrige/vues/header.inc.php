<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/projetpolice_corrige/css/bootstrap.css">
    <link rel="stylesheet" href="/projetpolice_corrige/css/style.css">
    <link rel="icon" href="/projetpolice_corrige/img/logo-police.png">
    <title>Recrutement Police</title>
</head>
<?php
if(!empty($_SESSION['message'])){
    $mesMessages=$_SESSION['message'];
    foreach($mesMessages as $key=>$message){
        echo '<div class="container pt-5" >
                <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">'.$message.'    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>';
    }
    $_SESSION['message']=[];
}?>