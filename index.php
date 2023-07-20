<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Garage V.Garrot</title>
</head>

<?php
    require_once ('template/header.php');
?>


    <main class="main">
        
        <div class="logo">
            <img src="img/logogarage.png" alt="logo garage" width="568px" height="255px">
        </div>
        <div class="phrase">
            <h2>"Laissez votre voiture <br> entre de bonnes mains"</h2>
        </div>  
    </main>
    <div class="client">
        <div class="conteneurtitre">
            <h1 class="titreclient">TEMOIGNAGE</h1>
        </div>
        <div class="temoignage">
            <section>
                <h3 class="nomclient">Anne</h3>
                <p class="commentclient"> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quaerat doloribus quas exercitationem nisi esse!"</p>
            </section>
            <section>
                <h3 class="nomclient">Pierre</h3>
                <p class="commentclient"> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste inventore deserunt, itaque officiis officia illo?"</p>
            </section>
            <section>
                <h3 class="nomclient">Claude</h3>
                <p class="commentclient"> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum inventore doloribus perspiciatis ratione, sunt nisi!"</p>
            </section>
        </div>          
    </div>


    
    <?php
        require_once ('template/footer.php')
    ?>
   