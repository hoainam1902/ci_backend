
<div class="cart-table-area section-padding-100">
    <?php   
    $this->load->view('widget/textNotify');
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Shopping Cart</h2>
                </div>
                <form method="post" action="<?= route('cart.update') ?>">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($cartArray as $id => $product) {

                                    ?>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="<?= route($product['slug']) ?>"><img src="<?= $product['image'] ?>" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                         <a href="<?= route($product['slug']) ?>"><h5><?= $product['name'] ?></h5></a>
                                     </td>
                                     <td class="price">
                                        <span><?= $product['price'] ?></span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <!-- <p>Qty</p> -->
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty<?= $product['id'] ?>'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty<?= $id ?>" step="1" min="1" max="300" name="quantity[<?= $product['id'] ?>]" value="<?= $product['qty'] ?>">
                                                <input type="text" class="totalPrice" name="totalPrice[<?= $product['id'] ?>]" id="totalPrice[<?= $product['id'] ?>]" value="<?= $product['price'] * $product['qty']   ?>" hidden="false">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty<?= $id ?>'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                       <span><a href="<?= route('cart.removeItem.'. $product['id']) ?>">delete</a></span>
                                   </td>
                               </tr>
                               <?php } ?>
                       <!--      <tr>
                                <td class="cart_product_img">
                                    <a href="#"><img src="img/bg-img/cart2.jpg" alt="Product"></a>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>Minimal Plant Pot</h5>
                                </td>
                                <td class="price">
                                    <span>$10</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <p>Qty</p>
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </td>
                            </tr> -->
                            

                        </tbody>
                    </table>
                    
                    <div class="cart-btn ">
                        <button class="btn amado-btn">Update</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-4">
            <div class="cart-summary">
                <h5>Cart Total</h5>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span id="spanSubtotal">$140.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>total:</span> <span id="spanTotal">$140.00</span></li>
                </ul>
                <div class="cart-btn mt-100">
                    <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- ##### Main Content Wrapper End ##### -->
