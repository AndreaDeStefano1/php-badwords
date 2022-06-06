<?php 
$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio atque inventore ipsum expedita iure obcaecati magnam, libero autem quam repudiandae laborum. Expedita soluta repellendus facilis exercitationem! Necessitatibus quasi vitae consectetur iste eos debitis voluptatem eius, labore quod iure maxime voluptate ipsa laborum. Praesentium officiis reiciendis atque expedita, suscipit molestias fugiat. Doloremque distinctio praesentium, deleniti doloribus voluptates sit aspernatur! Magni quidem dolores sed, natus ratione culpa quisquam odio a laboriosam enim, aliquam eum maxime possimus! Aliquam, nobis assumenda? Beatae, necessitatibus? Quam, ex facilis quaerat magnam vel sed neque porro nesciunt a nisi? Quis iure deleniti debitis quasi, impedit molestiae tempore quos.';

$badWord = $_GET["parola"];
$newText =  str_replace($badWord, '***', $text );

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Testo:</h1>
<p>
  <?php echo $newText ?>  
</p>
<h1> La lunghezza del testo è : <span><?php echo strlen($newText)?></span></h1>

</body>
</html>