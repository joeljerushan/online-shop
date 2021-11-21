<?php include 'header.php'; ?>

<div class="ix_category_page">
    <div class="large-3 medium-3 columns ix_category_left_menu ix_search_left_menu">
        <div class="ix_single">
            <h4>GENDER</h4>
            <ul>
                <li><a href="#" class="active">Womens</a></li>
                <li><a href="#">Mens</a></li>
            </ul>
        </div>
        <div class="ix_single">
            <h4>PRODUCT TYPE</h4>
            <ul>
                <li><a href="#">T SHIRTS</a></li>
                <li><a href="#">POLO SHIRTS</a></li>
                <li><a href="#">TOPS</a></li>
                <li><a href="#">HOODIES</a></li>
                <li><a href="#">JUMPERS</a></li>
                <li><a href="#">RUGBY</a></li>
            </ul>
        </div>
        <div class="ix_single ix_non_expand">
            <h4>SIZE</h4>
            <ul>
                <li><a href="#">SHORTS</a></li>
                <li><a href="#">SWIMWEAR</a></li>
                <li><a href="#">JEANS</a></li>
                <li><a href="#">JOGGERS</a></li>
                <li><a href="#">TROUSERS</a></li>
            </ul>
        </div>
        <div class="ix_single ix_non_expand">
            <h4>COLOR</h4>
            <ul>
                <li><a href="#">BAGS</a></li>
                <li><a href="#">SUNGLASSES</a></li>
                <li><a href="#">WATCHES</a></li>
                <li><a href="#">UNDERWEAR & SOCKS</a></li>
                <li><a href="#">KNITTED ACCESSORIES</a></li>
                <li><a href="#">SUNGLASSES</a></li>
                <li><a href="#">OTHER ACCESSORIES</a></li>
                <li><a href="#">FRAGRANCE</a></li>
            </ul>
        </div>
    </div>
    <div class="large-9 medium-9 columns ix_search_wrap">
        <div class="ix_simple_nav">
            <ul>
                <li><a href="#">Timothy</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">T-shirts</a></li>
            </ul>
        </div>

        <div class="clearfix"></div>

        <div class="ix_filter">
            <div class="left">
                <strong><i class="fa fa-truck"></i> 500 items</strong>
            </div>
            <div class="right">
                <span>Sort by <i class="fa fa-sort-amount-asc" aria-hidden="true"></i> </span>
                <span>
                    <select>
                        <option>Most Relevant</option>
                        <option>Highest Rated</option>
                    </select>
                </span>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="ix_page_title">
            <h2>Search</h2>
        </div>

        <div class="clearfix"></div>

        <div class="ix_search_product_loop ix_product_loop">
            <?php include "product_loop_search_4.php"; ?>
            <?php include "product_loop_search_4.php"; ?>
            <?php include "product_loop_search_4.php"; ?>
        </div>

    </div>

    <?php include 'footer.php'; ?>
