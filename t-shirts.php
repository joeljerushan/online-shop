<?php include 'header.php'; ?>

<div class="ix_category_page">
    <div class="large-3 medium-3 columns ix_category_left_menu ix_search_left_menu">
        <div class="ix_single">
            <h4>Product Type</h4>
            <ul>
                <li><a href="#">Long Sleeve T shirt</a></li>
                <li><a href="#">Plain T shirt</a></li>
                <li><a href="#">Printed T shirt</a></li>
                <li><a href="#">Short Sleeve Top</a></li>
                <li><a href="#">Sports Top</a></li>
                <li><a href="#">Striped T shirt</a></li>
            </ul>
        </div>
        <div class="ix_single">
            <h4>Size</h4>
            <ul>
                <li><a href="#">XS</a></li>
                <li><a href="#">S</a></li>
                <li><a href="#">M</a></li>
                <li><a href="#">L</a></li>
                <li><a href="#">XL</a></li>
                <li><a href="#">XXL</a></li>
                <li><a href="#">XXXl</a></li>
            </ul>
        </div>
        <div class="ix_single ix_non_expand">
            <h4>Color</h4>
            <ul>
                <li><a href="#">Black</a></li>
                <li><a href="#">Blue</a></li>
                <li><a href="#">Tan</a></li>
                <li><a href="#">Brown</a></li>
                <li><a href="#">Dark Gary</a></li>
                <li><a href="#">Red</a></li>
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
                <strong><i class="fa fa-truck"></i> 345 items</strong>
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
            <h2>T - Shirts</h2>
            <h4>Classic fit t-shirts rooted in the history of the Superdry label. Vintage t-shirts, long sleeve, printed t-shirts and the classic orange label t-shirt.
            </h4>
        </div>

        <div class="clearfix"></div>

        <div class="ix_search_product_loop ix_product_loop">
            <?php include "product_loop_search_4.php"; ?>
            <?php include "product_loop_search_4.php"; ?>
            <?php include "product_loop_search_4.php"; ?>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
