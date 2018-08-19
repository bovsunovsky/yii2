<h1>SHOW action</h1>

<?php
$this->title ='Одна статья';
?>



<?php debug($cats); ?>

<button class="btn btn-success" id="btn">Click me ...</button>

<?php

$js = <<<JS
$('#btn').on('click',function() {
  $.ajax(
      {
      url: 'index.php?r=post/index',
      data: {test: '123'},
      type: 'POST',
      success: function(res) {
        console.log(res);
      },
      error: function() {
        alert('Error!');
      }
      }
  )


})
JS;

$this->registerJs($js);
