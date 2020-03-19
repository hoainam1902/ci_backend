
<div class="cart-table-area section-padding-100">
    <?php
    $this->load->view('widget/notify');
    ?>  
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Thông tin thanh toán</h2>
                    </div>

                    <form id="formCheckout" action="<?= route('checkout') ?>" method="post">
                        <div class="row">
                                    <!-- <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="first_name" value="" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="last_name" value="" placeholder="Last Name" required>
                                    </div> -->
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Tên đầy đủ" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Địa chỉ email" value="">
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" name="address" id="street_address" placeholder="Địa chỉ" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <select class="w-100" name="city" id="cỉty" placeholder="Thành phố">
                                            <option value="hanoi">Hà Nội</option>
                                            <option value="hochiminh">Hồ Chí Minh</option>
                                            <option value="haiphong">Hải Phòng</option>
                                            <option value="quangninh">Quảng Ninh</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="city" placeholder="Town" value="">
                                    </div> -->
                                    <!-- <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" value="">
                                    </div> -->
                                    <div class="col-12 mb-3">
                                        <input type="number" class="form-control" name="phone" id="phone_number" min="0" placeholder="Điện thoại di động" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="note" class="form-control w-100" id="note" cols="30" rows="10" placeholder="Leave a note about your order"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Ship to a different address</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>$140.00</span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$140.00</span></li>
                            </ul>

                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                </div>
                                <!-- Paypal -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="img/core-img/paypal.png" alt=""></label>
                                </div>
                            </div>

                            <div class="cart-btn mt-100">
                                <a href="#" id="btnCheckout" onclick="document.getElementById('formCheckout').submit();" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>