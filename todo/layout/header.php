<header>
    <h1>Ma super TODO liste</h1>
</header>

<?php if(!empty($_SESSION['error'])): ?>
<p><?php echo $_SESSION['error'] ?></p>

<?php unset($_SESSION['error']) ?>

<?php endif; ?>