<div class="block bg-color-light">
    <div class="block__content">
        <h2 class="title-2"><?php echo $_GET['title']; ?></h2>

        <?php require_once dirname(__FILE__) . '/sections/' . $_GET['section'] . '/' . $_GET['page'] . '.php'; ?>
    </div>
</div>