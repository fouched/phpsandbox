<?php

$loggedIn = true;

echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
echo '<br>';

$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered . '<br>';

?>

<div>
<?php if ($loggedIn): ?>
    <h1>Welcome User</h1>
<?php else: ?>
    <h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<?php
    $arr = [1, 2, 3, 4, 5];
?>

<?php foreach ($arr as $val): ?>
    <?php echo $val; ?>
<?php endforeach; ?>
