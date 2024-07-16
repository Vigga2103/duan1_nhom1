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
                        <!-- <select style="display: none;">
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select>
                        <div class="nice-select" tabindex="0"><span class="current">Default sorting</span>
                            <ul class="list">
                                <li data-value="1" class="option selected">Default sorting</li>
                                <li data-value="1" class="option">Default sorting</li>
                                <li data-value="1" class="option">Default sorting</li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="sorting mr-auto">
                        <!-- <select style="display: none;">
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                        <div class="nice-select" tabindex="0"><span class="current">Show 12</span>
                            <ul class="list">
                                <li data-value="1" class="option selected">Show 12</li>
                                <li data-value="1" class="option">Show 12</li>
                                <li data-value="1" class="option">Show 12</li>
                            </ul>
                        </div> -->
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
                        <!-- <?php
                                // $sqlPro = "SELECT * FROM product WHERE `status` = 1 LIMIT 15 ";
                                // $resultPro = mysqli_query($conn, $sqlPro) or die("Lỗi kết nối");
                                // if (mysqli_num_rows($resultPro) > 0) {
                                //     while ($rowPro = mysqli_fetch_assoc($resultPro)) {
                                // 
                                ?>
                        <!-- //         <div class="col-md-6 col-lg-4">
                        //             <div class="card text-center card-product">
                        //                 <div class="card-product__img">
                        //                     <img class="card-img" src="<?php echo $rowPro["images"]; ?>" alt="<?php echo $rowPro["pro_name"]; ?>">
                        //                     <ul class="card-product__imgOverlay">
                        //                         <li><button><i class="ti-search"></i></button></li>
                        //                         <li><button><i class="ti-shopping-cart"></i></button></li>
                        //                         <li><button><i class="ti-heart"></i></button></li>
                        //                     </ul>
                        //                 </div>
                        //                 <div class="card-body">
                        //                     <h4 class="card-product__title"><a href="index.php?page=detail-product&id=<?php echo $rowPro["pro_id"] ?>"><?php echo $rowPro["pro_name"]; ?></a></h4>
                        //                     <p class="card-product__price"><?php echo $rowPro["price"]; ?></p>
                        //                 </div>
                        //             </div>
                        //         </div> -->
                        <?php
                        //     }
                        // }
                        ?> -->
                        <?php
                        if (isset($GET["id"])) {
                            $cat_id = $_GET["id"];
                            $sqlProduct = "SELECT * FROM product WHERE `status` = 1 AND cat_id ";
                            $resultProduct = mysqli_query($conn, $sqlProduct) or die("Lỗi kêt nối hiển thị");
                            if (mysqli_num_rows($resultProduct) > 0) {
                                while (mysqli_fetch_assoc($result)) {
                                }
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