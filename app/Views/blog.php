<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<h1><?= $page_title ?></h1>
<div class="row justify-content-around">
  <?= $this->include('partials/sidebar') ?>
  <div class="row col-12 col-sm-9">
    <?php foreach($taukos as $head):?>
      <?= view_cell('\App\Libraries\Blog::postItem',['title'=>$head]); ?>
    <?php endforeach; ?>
  </div>
</div>

<?= $this->endSection() ?>