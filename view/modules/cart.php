  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Tên</th>
                              <th scope="col">Giá</th>
                              <th scope="col">Số Lượng</th>
                              <th scope="col">Tổng</th>
                              <th scope="col">Xóa</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $total = 0;
                    //   $value["price"];
                    //   $int_value = number_format($value["price"], 0, '', '');
                    if(isset($_SESSION["cart"])){
                        foreach($_SESSION["cart"] as $key=>$value){
                 ?>
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="<?php echo $value["images"]; ?>" style=" height:50px; wwidth: 100px;" alt="">
                                      </div>
                                      <div class="media-body">
                                          <p><?php echo $value["name"]; ?></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5 class="price-prduct"><?php echo number_format($value["price"], 0, '', ','); ?></h5>
                              </td>
                              <td>
                                <div class="record-product" style="width:200px;">
                                        <span class="input-group-btn" onclick="minesCart()"> 
                                        <button type="button" class="btn btn-primary minus" data-product="<?php echo  $value['price'] ?>" data-type="minesCart" data-field=""> - </button>
                                        </span>
                                        <input type="number" name="quantity" id="quantity" data-product="<?php echo  $value['price'] ?>"  maxlength="12" value="<?php echo $value["quantity"]; ?>" title="Quantity:" class="input-number" min="1" max="10"  onchange="validateQuantityCart()">
                                        <span class="input-group-btn" onclick="plusCart()">
                                        <button type="button" class="btn btn-primary plus" data-type="plusCart" data-field=""> + </button>
                                        </span>
                                    </div>
                              </td>
                              <td>
                                  <h5 class="total-product"><?php echo number_format($value["price"]*$value["quantity"], 0, '', ','); $total +=  $value["price"]*$value["quantity"];?></h5>
                              </td>
                              <td><button type="button" class="btn btn-danger">Xóa</button></td>
                          </tr>
                 <?php 
                       }
                    }
                 ?>
                          <tr class="bottom_button">
                              <td>
                                  <a class="button" href="#">Update Cart</a>
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="cupon_text d-flex align-items-center">
                                      <input type="text" placeholder="Coupon Code">
                                      <a class="primary-btn" href="#">Apply</a>
                                      <a class="button" href="#">Have a Coupon?</a>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Subtotal</h5>
                              </td>
                              <td>
                                  <h5><span class="total-cart" data-total-cart="<?php echo $total; ?>"><?php echo number_format($total, 0, '', ',');?></span></h5>
                              </td>
                          </tr>
                          <tr class="shipping_area">
                              <td class="d-none d-md-block">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Shipping</h5>
                              </td>
                              <td>
                                  <div class="shipping_box">
                                      <ul class="list">
                                          <li><a href="#">Flat Rate: $5.00</a></li>
                                          <li><a href="#">Free Shipping</a></li>
                                          <li><a href="#">Flat Rate: $10.00</a></li>
                                          <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                      </ul>
                                      <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                      <select class="shipping_select">
                                          <option value="1">Bangladesh</option>
                                          <option value="2">India</option>
                                          <option value="4">Pakistan</option>
                                      </select>
                                      <select class="shipping_select">
                                          <option value="1">Select a State</option>
                                          <option value="2">Select a State</option>
                                          <option value="4">Select a State</option>
                                      </select>
                                      <input type="text" placeholder="Postcode/Zipcode">
                                      <a class="gray_btn" href="#">Update Details</a>
                                  </div>
                              </td>
                          </tr>
                          <tr class="out_button_area">
                              <td class="d-none-l">

                              </td>
                              <td class="">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <a class="gray_btn" href="#">Continue Shopping</a>
                                      <a class="primary-btn ml-2" href="#">Proceed to checkout</a>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->