<?php include '../base.php' ?>

<?php startblock('meta_title') ?>
Convert text to Capitalized Case
<?php endblock() ?>

<?php startblock('meta_description') ?>
Just type or paste your text for convert to capitalized, free, simple and online!
<?php endblock() ?>

<?php startblock('meta_keywords') ?>
capitalized, online capitalized, free capitalized, online capitalized, capitalized text
<?php endblock() ?>

<?php startblock('title') ?>
Convert text to Capitalized
<?php endblock() ?>

<?php startblock('description') ?>
Just type or paste your text for convert to capitalized, free, simple and online!
<?php endblock() ?>

<?php startblock('form') ?>
<?php include '../textareas.php' ?>
<script>
    $(function() {
        $('textarea[id$=source]').keyup(function() {
            var sourceText = $(this).val();
            $('textarea[id$=result]').val(sourceText.replace(/^(.)|\s(.)/g, function($1){
                return $1.toUpperCase( );
            }));
        });
    });
</script>
<?php endblock() ?>
