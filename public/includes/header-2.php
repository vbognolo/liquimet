<?php
declare(strict_types = 1);                                 
require '../src/setup.php';       

$id_group = filter_input(INPUT_GET, 'id_group', FILTER_VALIDATE_INT); 
$id_category = filter_input(INPUT_GET, 'id_category', FILTER_VALIDATE_INT);
$category = $model->getCategory()->get($id_group, $id_category);                    // Get category data

$transports = $model->getTransport()->getAll();     
$quantities = $model->getQuantity()->getAll();

$navigation = $model->getCategory()->getGroups();
$categories = $model->getCategory()->getAll();
$group = $category['id_group'];                                 // Current category
$section = $category['id_category'];
$title = $category['name']; 
?>    
    
    <section class="submenu align-items-center my-auto mx-auto p-2">
        <div class="grid-item mx-auto my-3 p-1 justify-content-center">
            <h2 class="my-1 p-4 submenu-title"><?= $title ?> </h2>

            <div class="breadcrumb-holder justify-content-center mx-auto p-2">
                <ul class="rounded-breadcrumbs mx-auto my-auto p-1 justify-content-center">
                <?php foreach ($categories as $menu){ ?>
                    <li class="breadcrumb-link active" aria-current="page">
                        <a href="category.php?id_category=<?= $menu['id_category'] ?>">
                            <?= ($section == $menu['id_category']) ? 'class="active" aria-current="page"' : '' ?>>
                            <?= html_escape($menu['name']) ?>
                        </a>
                    </li>

                    <li class="vr"></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </section> 