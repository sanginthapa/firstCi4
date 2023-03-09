<?= $this->extend('layouts\main')?>
<?= $this->section('content')?>
<h1><?= $page_title ?></h1>
<a href="/blog/edit/<?= (isset($post['post_id'])?$post['post_id']:'') ?>" class="btn btn-primary">Update</a> 
<a href="/blog/delete/<?= (isset($post['post_id'])?$post['post_id']:'') ?>" class="btn btn-danger">Delete</a> 
<a href="/blog/new" class="btn btn-success">Goto create new</a> 
<?= $this->endSection()?>