<?= $this->extend('layouts\main')?>


<?= $this->section('content')?>
<div class="container border-1">
  <div class="w-50 m-auto my-5 fs-5">
    <form method="post" action="/quiz/startQuiz">
      <div class="form-group m-2">
        <label for="student_name">Username:</label>
        <input id="student_name" class="form-control" type="text" name="student_name">
      </div>
      <div class="form-group m-2">
        <label for="email">Email:</label>
        <input id="email" class="form-control" type="email" name="email">
      </div>
      <div class="form-group text-center">
        <button class="btn btn-primary mt-5">Start Quiz</button>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection()?>