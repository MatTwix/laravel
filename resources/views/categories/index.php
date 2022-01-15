<p>Все категории:</p>
<?php foreach ($categories as $categoryItem): ?>
<strong>
    <a href="<?=route('categories.show', ['id' => $categoryItem['id']])?>">
        <?=$categoryItem['name']?>
    </a>
</strong>
<br>
<?php endforeach;
