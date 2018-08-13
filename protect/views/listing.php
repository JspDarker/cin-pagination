<!-- Column2 Section -->

<div class="col2">
    <div class="col2_top">&nbsp;</div>
    <div class="col2_center">
        <h4 class="heading colr">Featured Products</h4>
        <div class="small_banner">
            <a href="#"><img src="public/images/small_banner.gif" alt="" ></a>
        </div>
        <div class="sorting">
            <p class="left colr">4 Item(s)</p>
            <ul class="right">
                <li class="text">
                    Sort by Position
                    <a href="?mod=listing&id_cate=<?=$_GET['id_cate']?>&page=<?=$_GET['page']?>&per_page=<?php echo $limit;?>&order=1" class="colr">Name </a>
                    <a href="?mod=listing&id_cate=<?=$_GET['id_cate']?>&page=<?=$_GET['page']?>&per_page=<?php echo $limit;?>&order=2" class="colr">Price</a>
                </li>

                <li class="text">Page
                    <?php for($i = 1; $i <= $page_number ; $i++):?>
                        <a href="?mod=listing&id_cate=<?=$_GET['id_cate']?>&page=<?=$i?>&per_page=<?php echo $limit;?>" class="colr<?php if($_GET['page'] == $i) echo' high-light';?>"><?=$i?></a>
                    <?php endfor;?>

                    <!--<a href="#" class="colr">2</a>
                    <a href="#" class="colr">3</a>-->
                    <a href="#" class="colr">/ All</a>
                </li>
            </ul>
            <div class="clear"></div>
            <p class="left">View as: <a href="#" class="bold">Grid</a>&nbsp;<a href="#" class="colr">List</a></p>
            <ul class="right">
                <li class="text">
                    Sort by Position
                    <a href="#" class="colr">Name </a>
                    <a href="#" class="colr">Price</a>
                </li>
            </ul>
        </div>
        <div class="listing">
            <h4 class="heading colr">New Products for March 2010</h4>
            <ul>
                <?php $count=1; ?>
                <?php foreach ($products as $list):?>
                    <li<?php echo ($count % 4 == 0) ? " class='last'" : ''; $count++?>>
                        <a itemid="<?=$list->pro_id?>" href="detail.html" class="thumb"><img src="public/images/product/<?=$list->urlHinh?>" alt="<?=$list->img_alt?>" ></a>
                        <h6 class="colr"><?=$list->pro_name?></h6>
                        <div class="stars">
                            <a href="#"><img src="public/images/star_green.gif" alt="" ></a>
                            <a href="#"><img src="public/images/star_green.gif" alt="" ></a>
                            <a href="#"><img src="public/images/star_green.gif" alt="" ></a>
                            <a href="#"><img src="public/images/star_green.gif" alt="" ></a>
                            <a href="#"><img src="public/images/star_grey.gif" alt="" ></a>
                            <a href="#">(<?=$list->views?>) Reviews</a>
                        </div>
                        <div class="addwish">
                            <a href="#">Add to Wishlist</a>
                            <a href="#">Add to Compare</a>
                        </div>
                        <div class="cart_price">
                            <a href="cart.html" class="adcart" itemid="<?=$list->pro_id?>">Add to Cart</a>
                            <p class="price">$<?php echo round((($list->pro_price)/1000000),2)?></p>
                        </div>
                    </li>
                <?php endforeach?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div class="col2_botm">&nbsp;</div>
</div>
<?php include 'col_one.php'?>