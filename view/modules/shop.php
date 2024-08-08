<section class="section-margin--small mb-5">
    <div class="container">
        <div class="row">
            <?php
            include "view/modules/slidebar.php";
            ?>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                      
                    </div>
                    <div class="sorting mr-auto">
                       
                    </div>
                    <div>
                        <div class="input-group filter-bar-search">
                            <input type="text" placeholder="Search">
                            <div class="input-group-append">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <?php
                                if(!empty($_GET["id"])) {
                                    $cat_id = $_GET["id"];
                                    $fac_id = $_GET["id"];
                                    $col_id = $_GET["id"];
                                    if($_GET["type"]=="cat"){
                                        $sqlProduct = "SELECT * FROM product WHERE `status` = 1 AND cat_id= '$cat_id' ";
                                    }
                                    else if($_GET["type"]=="fac"){
                                        $sqlProduct = "SELECT * FROM product WHERE `status` = 1 AND fac_id= '$fac_id' ";
                                    }else{
                                        $sqlProduct = "SELECT * FROM product WHERE `status` = 1 AND col_id= '$col_id' ";
                                    }
                                  
                                }else{
                                    $sqlProduct = "SELECT * FROM product WHERE `status` = 1";
                                }

                                $resultPro = mysqli_query($conn, $sqlProduct) or die("Lỗi kết nối");
                                if (mysqli_num_rows($resultPro) > 0) {
                                    while ($rowPro = mysqli_fetch_assoc($resultPro)) {
                                
                                ?>
                                 <div class="col-md-6 col-lg-4">
                                     <div class="card text-center card-product">
                                         <div class="card-product__img">
                                             <img style="height:280px;width:200px;" class="card-img" src="<?php echo $rowPro["images"]; ?>" alt="<?php echo $rowPro["pro_name"]; ?>">
                                       <ul class="card-product__imgOverlay">
                                                 <li><button><i class="ti-search"></i></button></li>
                                                 <li><button><i class="ti-shopping-cart"></i></button></li>
                                                 <li><button><i class="ti-heart"></i></button></li>
                                             </ul>
                                         </div>
                                         <div class="card-body">
                                             <h4 class="card-product__title"><a href="index.php?page=detail-product&id=<?php echo $rowPro["pro_id"] ?>"><?php echo $rowPro["pro_name"]; ?></a></h4>
                                             <p class="card-product__price"><?php echo number_format( $rowPro["price"], 0, '', ','); ?></p>
                                         </div>
                                     </div>
                                 </div>
                        <?php
                             }
                     }
                        ?>
                       
                    </div>
                </section>
                <!-- End Best Seller -->
            </div>
        </div>
    </div>
</section>