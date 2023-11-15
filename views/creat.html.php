<?php namespace M2i\Tpcrudbook\Controller;

require 'partials/header.html.php'; ?>



<div class="max-w-5xl mx-auto">
    <?php foreach($errors as $error) { ?>
        <p><?= $errors; ?></p>
   <?php } ?>
    <form action="" method="post">
        <input type="text" name="name" value="<?= $book->title; ?>">
        <button>Sauvegarder</button>
    </form>
</div>

<?php require 'partials/footer.html.php';