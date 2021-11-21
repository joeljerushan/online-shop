<?php include "header.php"; ?>

<div class="large-9 medium-12 columns ix_signin_page ix_front_auth large-centered medium-centered">

    <div class="ix_normal_page_title">
        <h2>Hello, User Name</h2>
        <h5>Logged in As User Name | <a href="#">Log Out</a> </h5>
    </div>

    <div class="ix_user_account_wrap">
        <div class="ix_single_product_details">
            <div class="row column large-12 large-centered">

                <ul class="tabs text-center ix_single_product_details_tab_title">
                    <li class="tabs-title is-active" data-tab="tab-1">Account info</li>
                    <li class="tabs-title" data-tab="tab-2">Delivery Info</li>
                    <li class="tabs-title" data-tab="tab-3">Purchase History</li>
                    <li class="tabs-title" data-tab="tab-4"><a href="page_wishlist.php" target="_blank">Wish list</a> </li>
                    <li class="tabs-title" data-tab="tab-5">Gift Card</li>
                </ul>

                <!--account info tab start here -->
                <div id="tab-1" class="tab-content is-active">
                    <div class="ix_front_auth_content">
                        <h1>Manage Account Information</h1>
                        <div class="large-6 medium-6 columns ix_register_content_left">
                            <h2>Basic Information</h2>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Email Address <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Password <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Confirm Password <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Phone
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Mobile Phone
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Gender <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <select>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="large-6 medium-6 columns ix_register_content_right">
                            <h2>Billing Address</h2>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        First Name <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Last Name <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Address 1 <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Address 2
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        City <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        STATE/PROVINCE
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>


                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Zip/ Postal Code <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single">
                                <div class="ix_single_content">
                                    <div class="left">
                                        Country <span><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="right">
                                        <select>
                                            <option>Sri Lanka</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="ix_front_auth_footer">
                            <!-- check box -->
                            <span class="ix_check"> I would like to receive your newsletter</span>
                            <div>
                                <div class="ix_button ix_button_orange">Save Info</div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--account info tab ends here -->


                <!--delivery tab start here-->
                <div id="tab-2" class="tab-content">
                    <div class="ix_front_auth_content">
                        <h1>Manage Delivery Addresses</h1>
                        <div class="large-6 medium-6 columns ix_register_content_left">
                            <h2>Default</h2>
                            <div class="ix_button ix_button_orange">Billing Address</div>
                            <div class="ix_address_loop">
                                <div class="ix_single_address">
                                    <h4>Name, Road</h4>
                                    <h5>State, Country, 9999</h5>
                                </div>
                            </div>
                        </div>
                        <div class="large-6 medium-6 columns ix_register_content_right">
                            <h2>Other Addresses</h2>
                            <div class="ix_button ix_button_gray">Add New</div>
                            <div class="ix_address_loop">
                                <div class="ix_single_address">
                                    <h4>Name 1, Road <i class="fa fa-trash"></i> </h4>
                                    <h5>State, Country, 9999</h5>
                                </div>
                                <div class="ix_single_address">
                                    <h4>Name 2, Road <i class="fa fa-trash"></i> </h4>
                                    <h5>State, Country, 9999</h5>
                                </div>
                                <div class="ix_single_address">
                                    <h4>Name 3, Road <i class="fa fa-trash"></i> </h4>
                                    <h5>State, Country, 9999</h5>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--delivery tab ends here-->



                <!--Order info tab start here-->
                <div id="tab-3" class="tab-content">
                    <div class="ix_front_auth_content">
                        <h1>Your Purchase History</h1>
                        <div class="ix_info_box">
                            <ul>
                                <li><i class="fa fa-check" title="Checkout Complete"></i> - Checkout Complete</li>
                                <li><i class="fa fa-usd" title="Item Paid"></i> - Item Paid</li>
                                <li><i class="fa fa-archive" title="Item Shipped"></i> - Item Shipped</li>
                                <li><i class="fa fa-retweet" title="Payment Refunded"></i> - Payment Refunded</li>
                            </ul>
                        </div>
                        <div class="ix_order_loop">
                            <div class="ix_single_order">
                                <div class="ix_single_order_meta">
                                    <div class="large-4 medium-4 columns ix_single_order_date">
                                        Order Date : 2016-12-12
                                    </div>
                                    <div class="large-3 medium-3 columns ix_single_order_billing_address">
                                        Ship to : Address 1
                                    </div>
                                    <div class="large-3 medium-3 columns ix_single_order_amount">
                                        Order Total : $200.89
                                    </div>
                                    <div class="large-1 medium-1 columns ix_single_order_del ix_js_view">
                                        View
                                    </div>
                                    <div class="ix_single_order_items">
                                        <div class="ix_single">
                                            <div class="large-7 medium-7 columns ix_content">
                                                <div class="large-3 medium-3 columns ix_single_thumb">
                                                    <a href="product_single.php"><img src="http://image1.superdry.com/static/images/products/upload2921179158049390757.jpg"/></a>
                                                </div>
                                                <div class="large-9 medium-9 columns ix_single_info">
                                                    <h1><a href="product_single.php">Printed Dunagree Dress</a></h1>
                                                    <h4>Size - M</h4>
                                                    <h4>QTY - 7</h4>
                                                    <h4>Color - Red</h4>
                                                    <h4>Item Code - 123456789</h4>
                                                </div>
                                            </div>
                                            <div class="large-3 medium-3 columns ix_product_price">
                                                <h5>$ 54.99</h5>
                                            </div>
                                            <div class="large-2 medium-2 columns ix_product_status">
                                                <ul>
                                                    <li><i class="fa fa-check" title="Checkout Complete"></i></li>
                                                    <li><i class="fa fa-usd" title="Item Paid"></i></li>
                                                    <li><i class="fa fa-archive" title="Item Shipped"></i></li>
                                                    <li><i class="fa fa-retweet" title="Payment Refunded"></i></li>
                                                </ul>
                                                <a href="#popup_div" class="ix_button_orange ix_button ix_js_popup"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single_order">
                                <div class="ix_single_order_meta">
                                    <div class="large-4 medium-4 columns ix_single_order_date">
                                        Order Date : 2016-12-12
                                    </div>
                                    <div class="large-3 medium-3 columns ix_single_order_billing_address">
                                        Ship to : Address 1
                                    </div>
                                    <div class="large-3 medium-3 columns ix_single_order_amount">
                                        Order Total : $200.89
                                    </div>
                                    <div class="large-1 medium-1 columns ix_single_order_del ix_js_view">
                                        View
                                    </div>
                                    <div class="ix_single_order_items">
                                        <div class="ix_single">
                                            <div class="large-7 medium-7 columns ix_content">
                                                <div class="large-3 medium-3 columns ix_single_thumb">
                                                    <a href="product_single.php"><img src="http://image1.superdry.com/static/images/products/upload2921179158049390757.jpg"/></a>
                                                </div>
                                                <div class="large-9 medium-9 columns ix_single_info">
                                                    <h1><a href="product_single.php">Printed Dunagree Dress</a></h1>
                                                    <h4>Size - M</h4>
                                                    <h4>QTY - 7</h4>
                                                    <h4>Color - Red</h4>
                                                    <h4>Item Code - 123456789</h4>
                                                </div>
                                            </div>
                                            <div class="large-3 medium-3 columns ix_product_price">
                                                <h5>$ 54.99</h5>
                                            </div>
                                            <div class="large-2 medium-2 columns ix_product_status">
                                                <ul>
                                                    <li><i class="fa fa-check" title="Checkout Complete"></i></li>
                                                    <li><i class="fa fa-usd" title="Item Paid"></i></li>
                                                    <li><i class="fa fa-archive" title="Item Shipped"></i></li>
                                                    <li><i class="fa fa-retweet" title="Payment Refunded"></i></li>
                                                </ul>
                                                <a href="#popup_div" class="ix_button_orange ix_button ix_js_popup"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ix_single_order">
                                <div class="ix_single_order_meta">
                                    <div class="large-4 medium-4 columns ix_single_order_date">
                                        Order Date : 2016-12-12
                                    </div>
                                    <div class="large-3 medium-3 columns ix_single_order_billing_address">
                                        Ship to : Address 1
                                    </div>
                                    <div class="large-3 medium-3 columns ix_single_order_amount">
                                        Order Total : $200.89
                                    </div>
                                    <div class="large-1 medium-1 columns ix_single_order_del ix_js_view">
                                        View
                                    </div>
                                    <div class="ix_single_order_items">
                                        <div class="ix_single">
                                            <div class="large-7 medium-7 columns ix_content">
                                                <div class="large-3 medium-3 columns ix_single_thumb">
                                                    <a href="product_single.php"><img src="http://image1.superdry.com/static/images/products/upload2921179158049390757.jpg"/></a>
                                                </div>
                                                <div class="large-9 medium-9 columns ix_single_info">
                                                    <h1><a href="product_single.php">Printed Dunagree Dress</a></h1>
                                                    <h4>Size - M</h4>
                                                    <h4>QTY - 7</h4>
                                                    <h4>Color - Red</h4>
                                                    <h4>Item Code - 123456789</h4>
                                                </div>
                                            </div>
                                            <div class="large-3 medium-3 columns ix_product_price">
                                                <h5>$ 54.99</h5>
                                            </div>
                                            <div class="large-2 medium-2 columns ix_product_status">
                                                <ul>
                                                    <li><i class="fa fa-check" title="Checkout Complete"></i></li>
                                                    <li><i class="fa fa-usd" title="Item Paid"></i></li>
                                                    <li><i class="fa fa-archive" title="Item Shipped"></i></li>
                                                    <li><i class="fa fa-retweet" title="Payment Refunded"></i></li>
                                                </ul>
                                                <a href="#popup_div" class="ix_button_orange ix_button ix_js_popup"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--order info tab ends here-->

                <!--wish list tab start here-->
                <div id="tab-4" class="tab-content">
                    <div class="ix_front_auth_content">
                        <h1>Wish List</h1>
                        <a href="page_wishlist.php" class="ix_button ix_button_orange">Go to Wish Lists</a>
                    </div>
                </div>
                <!--wish list tab ends here-->


                <!--Gift Card tab start here-->
                <div id="tab-5" class="tab-content">
                    <div class="ix_front_auth_content">
                        <h1>Register Your Gift Card </h1>
                        <h5>Please enter the number on the back of your card below to register.</h5>


                        <div class="large-6 medium-6 columns ix_gift_inp_wrap">
                            <div class="ix_gift_inp">
                                Gift Card Number <input type="text"/>
                                <div class="ix_button ix_button_orange">Register Gift Card</div>
                            </div>
                        </div>
                        <div class="large-6 medium-6 columns ix_gift_loop_wrap">
                            <div class="ix_single">
                                <div class="ix_card_number">
                                    123456789
                                </div>
                                <div class="ix_card_balance">
                                    $ 454
                                </div>
                            </div>
                            <div class="ix_single">
                                <div class="ix_card_number">
                                    123456789
                                </div>
                                <div class="ix_card_balance">
                                    $ 454
                                </div>
                            </div>
                            <div class="ix_single">
                                <div class="ix_card_number">
                                    123456789
                                </div>
                                <div class="ix_card_balance">
                                    $ 454
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--wish list tab ends here-->

            </div>
        </div>
    </div>

    <div id="popup_div" class="ix_popup" style="display: none;">
        <div class="ix_popup_inner">
            <div class="ix_popup_header">
                Send message
            </div>
            <div class="ix_popup_content">
                <div class="ix_form">
                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Message"></textarea>
                </div>
            </div>
            <div class="ix_popup_footer">
                <div class="ix_button ix_button_orange">Send</div>
            </div>
        </div>
    </div>

</div>
<?php include "footer.php"; ?>


