<div class="x_content">

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title">Số thứ tự </th>
                            <th class="column-title">Ngày tạo đơn hàng</th>
                            <th class="column-title">Mã đơn hàng</th>
                            <th class="column-title">Tên dăng nhập</th>
                            <th class="column-title">Tên người mua hàng</th>
                            <th class="column-title">Email đặt hàng </th>
                            <th class="column-title">Số điện thoại </th>
                            <th class="column-title">Trạng thái </th>
                            <th class="column-title">Tổng tiền hàng </th>
                            <th class="column-title no-link last"><span class="nobr">Thao tác</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $sqlSelectOder = "SELECT * FROM oder";
                                $resultSelectOder = mysqli_query($conn, $sqlSelectOder) or die("Lỗi truy vấn dữ liệu");
                                if (mysqli_num_rows($resultSelectOder) > 0) { //Đếm xem có bản ghi nào k; Khi lấy dữ liệu ra thì nó sẽ có bản ghi để lặp lại
                                    $i = 0; // biến đếm 
                                    while ($rowSelectOder = mysqli_fetch_assoc($resultSelectOder)) { //Kiểm tra tất cả các điều kiện trước khi lặp.
                                        $i++;

                                
                            ?>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </td>
                            <td class=" "><?php echo $i; ?></td>
                            <td class=" "><?php echo $rowSelectOder["date_create"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["oder_id"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["ctm_id"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["firt_name"]." ".$rowSelectOder["last_name"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["email"]; ?></td>
                            <td class=" "><?php echo $rowSelectOder["phone"]; ?></td>
                            <td class=" ">
                            <label>
                                    <?php 
                                        switch ($rowSelectOder["status"]) {
                                            case  1:
                                                 echo "Đã xác nhận đơn hàng"; 
                                              break;
                                            case 2:
                                                 echo "Đơn hàng đang vận chuyển";
                                              break;
                                            case 3:
                                                echo "Đơn hàng bị hủy";
                                                break;
                                            case 4:
                                                echo "Đơn hàng đã giao thành công";
                                                break;
                                            default:
                                              echo "Đơn hàng đang xử lí";
                                          }
                                        
                                    ?>
                                </label>
                            </td>
                            <td class="a-right a-right "><?php echo number_format($rowSelectOder["odertotal"], 0, '', ','); ?></td>
                            <td>
                                <a href="index.php?page=oder-detail&id=<?php echo $rowSelectOder["oder_id"]; ?>" style="color:red"><i class="fa fa-eye">Xem chi tiết</i></a>
                                <a href="index.php?page=status&id=<?php echo $rowSelectOder["oder_id"]; ?>&edit=1&status=<?php echo $rowSelectOder["status"]; ?>" style="color:#0066FF">
                                    <i class="fa fa-check-square">Xác nhận</i></a>
                            </td>
                            </td>
                          </tr>
                          <?php 
                              }
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>