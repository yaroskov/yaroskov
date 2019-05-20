<?php foreach($ctrl->mainMenu as $i => $item): ?>
    <div class="block <?php echo ($i % 2 == 0) ? 'bg-color-light' : 'bg-color-light'; ?>">
        <div class="block__content">
            <h2 class="title-2"><?php echo $item['sectionTitle']; ?></h2>

            <ul class="list">
                <?php foreach($item['menuItems'] as $menuEl): ?>

                    <?php $link = '';
                    if(isset($menuEl['link'])) {
                        $link = '/?clean=true&section=' . $item['section']
                            . '&page=' . $menuEl['link']
                            . '&title=' . $menuEl['title'];
                    } ?>

                    <li>
                        <a href="<?php echo $link; ?>">
                            <?php echo $menuEl['title']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endforeach; ?>