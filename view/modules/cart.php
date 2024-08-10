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
                                        <button type="button" class="btn btn-primary minus" data-type="minesCart" data-field=""> - </button>
                                        </span>
                                        <input type="number" onblur="updateCart(<?php echo  $key;?>)" name="quantity_<?php echo  $key;?>" id="quantity_<?php echo  $key;?>" data-product="<?php echo  $value['price'] ?>"  maxlength="12" value="<?php echo $value["quantity"]; ?>" title="Quantity:" class="input-number" min="1" max="10" >
                                        <span class="input-group-btn" onclick="plusCart()">
                                        <button type="button" class="btn btn-primary plus" data-type="plusCart" data-field=""> + </button>
                                        </span>
                                    </div>
                              </td>
                              <td>
                                  <h5 class="total-product"><?php echo number_format($value["price"]*$value["quantity"], 0, '', ','); $total +=  $value["price"]*$value["quantity"];?></h5>
                              </td>
                              <td><a href="javascript:void(0)" onclick="deleteCart(<?php echo  $key;?>)"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm này ra khỏi giỏ hàng không?');">Xóa</button></a></a></td>
                          </tr>
                 <?php 
                       }
                    }
                 ?>
                          <tr class="bottom_button">
                              <td>
                                  
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="cupon_text d-flex align-items-center">
                                      <input type="text" placeholder="Coupon Code">
                                      <a class="primary-btn" href="#">Áp mã</a>
                                      <a class="button" href="#">Bạn có mã giảm giá không?</a>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Tổng só tiền hàng</h5>
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
                                  <h5>Phụ phí ship</h5>
                              </td>
                              <td>
                                  <div class="shipping_box">
                                      <ul class="list">
                                          <li><a href="#">Giá nội thành: 50,000</a></li>
                                          <li><a href="#">Giá ngoại thành: 150,000</a></li>
                                          <li><a href="#">Giá ngoại quốc: 3,000,000</a></li>
                                          <li class="active"><a href="#">Miễn phí vận chuyển</a></li>
                                      </ul>
                                     
                                     
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
                                      <a class="gray_btn" href="index.php?page=shop">Tiếp tục mua sắm</a>
                                      <a class="primary-btn ml-2" href="index.php?page=payment">Thanh toán</a>
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