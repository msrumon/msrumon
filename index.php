<?php

$_DIRECTORIES = [];
foreach (scandir('./') as $_) {
  if (is_dir($_) && preg_match('/^[\w\-]+$/', $_) === 1) {
    array_push($_DIRECTORIES, $_);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-dark.min.css">
  <title>RoomOn</title>
</head>

<body>
  <header>
    <a href="/" class="logo">RoomOn</a>
    <a href="https://www.msrumon.com" class="button" target="_blank">
      <span class="icon-link"></span>
      <span>Developer</span>
    </a>
  </header>
  <main class="container">
    <div class="row">
      <div class="col-sm">
        <?php if (count($_DIRECTORIES) > 0) : ?>
          <h1>Active:</h1>
          <p>Below is the list of my currently ongoing projects:</p>
          <ol>
            <?php foreach ($_DIRECTORIES as $_) : ?>
              <li><a href="<?= $_ ?>"><?= $_ ?></a></li>
            <?php endforeach ?>
          </ol>
        <?php else : ?>
          <h1>Empty!</h1>
          <p>I have no ongoing projects right now. Please come back another time.</p>
        <?php endif ?>
      </div>
    </div>
  </main>
</body>

</html>