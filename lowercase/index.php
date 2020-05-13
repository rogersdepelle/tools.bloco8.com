<?php include '../base.php' ?>

<?php startblock('meta_title') ?>
  Convert text to Lowercase
<?php endblock() ?>

<?php startblock('meta_description') ?>
  Just type or paste your text for convert to lowercase, free, simple and online!
<?php endblock() ?>

<?php startblock('meta_keywords') ?>
  lowercase, online lowercase, free lowercase, online lowercase, lowercase text
<?php endblock() ?>

<?php startblock('title') ?>
  Convert text to Lowercase
<?php endblock() ?>

<?php startblock('description') ?>
  Just type or paste your text for convert to lowercase, free, simple and online!
<?php endblock() ?>

<?php startblock('form') ?>
  <?php include '../textareas.php' ?>
  <script>
    $(function() {
      $('textarea[id$=source]').keyup(function() {
          var sourceText = $(this).val();
          $('textarea[id$=result]').val(sourceText.toLowerCase());
      });
    });
  </script>
<?php endblock() ?>
