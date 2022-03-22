<ul class="pagination home-product__pagination">
    <li class="pagination-item">
        <a href="#" class="pagination-item__link">
            <i class="pagination-item-icon fas fa-angle-left"></i>
        </a>
    </li>
    <?php for ($i = 1; $i <= $page_number; $i++) { ?>
    <li class="pagination-item pagination-item--active">
        <a href="?page=<?php echo $i?>&search=<?php echo $search?>" class="pagination-item__link">
            <?php echo $i ?>
        </a>
    </li>
    <?php } ?>
    <li class="pagination-item">
        <a href="#" class="pagination-item__link">
            <i class="pagination-item-icon fas fa-angle-right"></i>
        </a>
    </li>
</ul>