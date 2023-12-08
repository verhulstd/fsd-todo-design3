<?php
require('ENV.php');
require('includes/db.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>public webpage</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <?php include("includes/cs.inc.php"); ?>
</head>

<body>
    <main class="app">
      <form action="" class="app__form">
        <input
          type="text"
          class="app__form__input"
          placeholder="Add an activity..."
        />
        <button class="app__form__submit"></button>
      </form>
      <ul class="app__list">
        <li class="app__list__item">
          <span class="text text--checked"
            >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio at
            reiciendis nemo aspernatur consequatur? Quaerat odio accusantium nam
            perferendis corporis, quidem provident laudantium maiores est totam
            quam eum laborum libero.</span
          >
          <a href="" class="icon icon--delete"></a>
          <a href="" class="icon icon--checked"></a>
        </li>
        <li class="app__list__item">
          <span class="text"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
            doloribus velit atque aliquid nisi veniam amet est, magnam numquam
            deleniti.</span
          >
          <a href="" class="icon icon--delete"></a>
          <a href="" class="icon icon--check"></a>
        </li>
        <li class="app__list__item">
          <span class="text text--checked">Lorem ipsum dolor</span>
          <a href="" class="icon icon--delete"></a>
          <a href="" class="icon icon--checked"></a>
        </li>
      </ul>
    </main>
</body>

</html>