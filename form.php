<?php
/**
 * Created by PhpStorm.
 * User: Dexx
 * Date: 21/12/2014
 * Time: 11:58
 */
?>

<?php if( $send ): ?>
    <?php if($valid) : ?><div class="success">Bienvenue <strong><?php echo $nom; ?></strong> !</div>
    <?php else : ?><div class="error">Nom invalide :/</div>
    <?php endif; ?>
<?php endif; ?>
<form action="" method="post">
    <div class="form-group">
        <input type="text" name="nom" value="<?php echo $nom; ?>" placeholder="Votre prénom" required />
        <input type="submit" name="form-submit" value="Envoyer" />
    </div>
</form>