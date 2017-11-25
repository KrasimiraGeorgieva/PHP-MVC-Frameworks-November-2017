<?php
/** @var \ViewEngine\ViewInterface $this
 * @var DTO\UserProfileViewModel $model
 */
?>

<h1>Welcome, <?= $model->getUsername(); ?></h1>

<a href="<?=$model->getUsername(), $model->getId();?>">Edit your profile</a>