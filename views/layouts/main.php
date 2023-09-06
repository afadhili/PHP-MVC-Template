<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example Title | <?= $data['judul']; ?></title>

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= asset('css/styles.css'); ?>">
</head>

<body>
  <?php require_once 'views/' . $view . '.php'; ?>
</body>

</html>