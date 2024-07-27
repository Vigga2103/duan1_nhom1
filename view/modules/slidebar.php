<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Categories</div>
        <ul class="main-categories">
            <li class="common-filter">
                <form action="#">
                    <ul>
                        <?php
                        $sqlSelect = "SELECT * FROM category WHERE `status` = 1";
                        $resultCat = mysqli_query($conn, $sqlSelect) or die("Lỗi kết nối dữ liệu");
                        if (mysqli_num_rows($resultCat) > 0) {
                            while ($rowCat = mysqli_fetch_assoc($resultCat)) {


                        ?>
                                <li class="filter-list"><a href="index.php?page=shop&type=cat&id=<?php echo $rowCat["cat_id"]; ?>">
                                        <input class="pixel-radio" type="radio"><label for="men"><?php echo $rowCat["cat_name"]; ?></label></a></li>
                        <?php
                            }
                        }
                        ?>
                </form>
            </li>
        </ul>
    </div>
    <div class="sidebar-filter">
        <div class="top-filter-head">Factory</div>
        <div class="common-filter">

                <form action="#">
                     <ul>
                            <?php
                                $sqlSelectFac = "SELECT * FROM factory WHERE `status` = 1";
                                $resultFac = mysqli_query($conn, $sqlSelectFac) or die("Lỗi kết nối dữ liệu");
                                if (mysqli_num_rows($resultFac) > 0) {
                                    while ($rowFac = mysqli_fetch_assoc($resultFac)) {


                                ?>
                                        <li class="filter-list"><a href="index.php?page=shop&type=fac&id=<?php echo $rowFac["fac_id"]; ?>">
                                                <input class="pixel-radio" type="radio"><label for="men"><?php echo $rowFac["fac_name"]; ?></label></a></li>
                                <?php
                                    }
                                }
                            ?>
                     </ul>
                </form>
            </div>
        <div class="common-filter">
            <div class="head">Color</div>
            <form action="#">
                     <ul>
                            <?php
                                $sqlSelectCol = "SELECT * FROM color WHERE `status` = 1";
                                $resultCol = mysqli_query($conn, $sqlSelectCol) or die("Lỗi kết nối dữ liệu");
                                if (mysqli_num_rows($resultCol) > 0) {
                                    while ($rowCol = mysqli_fetch_assoc($resultCol)) {


                                ?>
                                        <li class="filter-list"><a href="index.php?page=shop&type=col&id=<?php echo $rowCol["col_id"]; ?>">
                                                <input class="pixel-radio" type="radio"><label for="men"><?php echo $rowCol["col_name"]; ?></label></a></li>
                                <?php
                                    }
                                }
                            ?>
                     </ul>
                </form>
        </div>
        <div class="common-filter">
            <div class="head">Price</div>
            <div class="price-range-area">
                <div id="price-range" class="noUi-target noUi-ltr noUi-horizontal">
                    <div class="noUi-base">
                        <div class="noUi-origin" style="left: 15.7143%;">
                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="58.3" aria-valuenow="15.7" aria-valuetext="1000.00" style="z-index: 5;"></div>
                        </div>
                        <div class="noUi-connect" style="left: 15.7143%; right: 41.6667%;"></div>
                        <div class="noUi-origin" style="left: 58.3333%;">
                            <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="15.7" aria-valuemax="100.0" aria-valuenow="58.3" aria-valuetext="5000.00" style="z-index: 4;"></div>
                        </div>
                    </div>
                </div>
                <div class="value-wrapper d-flex">
                    <div class="price">Price:</div>
                    <span>$</span>
                    <div id="lower-value">1000.00</div>
                    <div class="to">to</div>
                    <span>$</span>
                    <div id="upper-value">5000.00</div>
                </div>

            </div>
        </div>
    </div>
</div>