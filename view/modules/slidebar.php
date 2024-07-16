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
                                <li class="filter-list"><a href="index.php?page=product&id=<?php echo $rowCat["cat_id"]; ?>">
                                        <input class="pixel-radio" type="radio" id="men" name="brand"><label for="men"><?php echo $rowCat["cat_name"]; ?></label></a></li>
                        <?php
                            }
                        }
                        ?>
                        <!-- <li class="filter-list"><input class="pixel-radio" type="radio" id="women" name="brand"><label for="women">Women<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="accessories" name="brand"><label for="accessories">Accessories<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="footwear" name="brand"><label for="footwear">Footwear<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="bayItem" name="brand"><label for="bayItem">Bay item<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="electronics" name="brand"><label for="electronics">Electronics<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="food" name="brand"><label for="food">Food<span> (3600)</span></label></li> -->
                    </ul>
                </form>
            </li>
        </ul>
    </div>
    <div class="sidebar-filter">
        <div class="top-filter-head">Product Filters</div>
        <div class="common-filter">
            <div class="head">Brands</div>
            <form action="#">
                <ul>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                </ul>
            </form>
        </div>
        <div class="common-filter">
            <div class="head">Color</div>
            <form action="#">
                <ul>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
                            Leather<span>(29)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
                            with red<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
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