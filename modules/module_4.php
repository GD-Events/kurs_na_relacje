<?php
include_once("../sample/navigation.html")
?>
<link rel="stylesheet" href=".././style/style.css">
<section class="main">
<section class="left-bar">

    <h4>
        <a href="module_1.php">
        wartości, czyli o ukrytych motywach naszego dzialania</a>
    </h4>
   
        
        <h4><a href="module_2.php" class="module-choice"> docenianie czyli budowanie fundamentu adekwatnego poczucia własnej wartości</a></h4>
        <h4><a href="module_3.php" class="module-choice"> omówienie, czyli świętowanie sukcesow i analizowanie porażek</a></h4>
        <form action="module_4.php" method="post">
        <h4><a href="module_4.php" class="module-choice" style="color: #02aab0;"> przyszłość</a></h4>
        <li><button type="submit" name="choice1" class="button-choice">co zyskasz realizujac ten moduł?</button></li>
        <li><button type="submit" name="choice2" class="button-choice">studium przypadku</button></li>
        <li><button type="submit" name="choice3" class="button-choice">refleksja</button></li>
        <li><button type="submit" name="choice4" class="button-choice">wiedza</button></li>
        <li><button type="submit" name="choice5" class="button-choice">praktyka</button></li>
        <li><button type="submit" name="choice6" class="button-choice">rozwój</button></li>
        <li><button type="submit" name="choice7" class="button-choice">10 błędów popełnianych przez dobrych rodziców</button></li>
        </form>
        <h4><a href="module_5.php" class="module-choice"> wartośc, czyli o ukrytych motywach naszego działania</a></h4>
        <h4><a href="module_6.php" class="module-choice"> oceny z zachowania</a></h4>
</section>
<section class="content content3">
    <?php
    if(isset($_POST['choice1'])){
        include_once("part4/4_1.html");}
    elseif(isset($_POST['choice2'])){
        include_once('part4/4_2.html');
    }
    elseif(isset($_POST['choice3'])){
        include_once('part4/4_3.html');}
    elseif(isset($_POST['choice4'])){
        include_once('part4/4_4.html');}
    elseif(isset($_POST['choice5'])){
        include_once('part4/4_5.html');}
    elseif(isset($_POST['choice6'])){
        include_once('part4/4_6.html');}
    elseif(isset($_POST['choice7'])){
        include_once('part4/4_7.html');}
        else{
            include_once('part4/4_1-main.html');
        }
    ?>
</section>
</section>

<?php
include_once("../sample/footer.html")
?>