<?php
session_start();
if (isset($_SESSION['nbre_vote'])){
    setcookie ("note", "yes", time() + 365*24*3600);
    header('location:affich.php') ;
}
else{
    $_SESSION['nbre_vote']=1 ;
    ?>
    <meta http-equiv="refresh" content="120; url=expiration.php" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div>
        <form action="vote_valid.php" method ="post">
            <div>evaluez le contenu du  cours PHP</div>
            <input type="radio" name="note" value="Bon">Bon<br>
            <input type="radio" name="note" value="Moyen"> Moyen<br>
            <input type="radio" name="note" value="Mauvais"> Mauvais
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php
}
?>
