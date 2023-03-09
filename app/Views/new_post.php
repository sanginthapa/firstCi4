<?= $this->extend('layouts\main')?>
<?= $this->section('content')?>
<h1><?= $page_title ?></h1>
  <div class="col-12 col-md-8 offset-md-2">
    <form method="post" action="/blog/new">
      <div class="form-group">
        <label for="">Title</label>
        <input id="" class="form-control" type="text" name="post_title">
      </div>
      <div class="form-group">
        <label for="">Content</label>
        <textarea class="form-control" name="post_content" id="" rows="3"></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-success btn-sm">Create</button>
      </div>
    </form>
  </div>
<?= $this->endSection()?>