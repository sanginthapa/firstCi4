<?= $this->extend('layouts\main')?>
<?= $this->section('content')?>
<h1>This is display post page.</h1>
<div class="container">
    <?= view_cell('\App\Libraries\Display::showItem') ?>
</div>
<?= $this->endSection()?>