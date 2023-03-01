<!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Document1</title>
    <body>
<?php
include('sample/navigation.html');
?>
<section class="content content-2">
<article>
<h2>
    Moduły
</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quas, asperiores ullam neque aperiam similique ea at sint, vitae obcaecati quasi quam? Molestiae quam accusantium, eius deserunt at quasi earum?</p>
</article>
</section>
<section class="modules"> 
<a href="modules_parent/part1/1_1-main.php" class="button-black">rodzic</a>
<a href="modules.php" class="button-blue">nauczyciel</a>
<a href="modules_dyr/part1/1_1-main.php" class="button-black">dyrektor</a>
</section> 
</body>
<?php
include_once('sample/footer.html');
?>
</html>