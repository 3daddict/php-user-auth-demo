<?php
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/nav.php';
?>
<div class="container">
    <div class="well">
        <h2>Add a book</h2>
        <form action="procedures/addBook.php" method="post" class="form-horizontal">
            <?php include __DIR__ . '/inc/bookform.php'; ?>
        </form>
    </div>
</div>
<?php
require_once __DIR__ . '/inc/footer.php';