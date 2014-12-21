<?php
/**
 * Created by PhpStorm.
 * User: Dexx
 * Date: 21/12/2014
 * Time: 11:58
 */
?>

<?php if( $send && $valid ): ?>
<div>Bienvenue <?php echo $nom; ?> !</div>
<?php endif; ?>
<form action="" method="post">
    <div class="form-group">
        <input type="text" name="nom" value="<?php echo $nom; ?>" placeholder="Noël" required />
        <input type="submit" name="form-submit" value="Envoyer" />
    </div>
</form>