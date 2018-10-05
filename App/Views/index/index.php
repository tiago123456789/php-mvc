<?php  foreach ($this->view->peoples as $people): ?>
<ul>
    <li>
        <?= $people["nome"] ?> ## <?= $people["email"] ?>
    </li>
</ul>
<?php endforeach; ?>
