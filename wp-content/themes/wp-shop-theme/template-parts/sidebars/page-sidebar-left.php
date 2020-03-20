<div class="sidebar">
    <div class="sidebar-container page-item">
        <div class="sidebar-btns">
            <button class="all-items">All products</button>
            <button type="button" id="showProds">Show</button>
        </div>
        <div class="sidebar-item">
            <div class="sidebar-item__title">
                <p>Price</p>
                <div class="sidebar-arrow"><img data-order="1" class="img-arrow" width="16px" height="16px"
                                                src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>"
                                                alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="1">
                <form action="#" method="post" id="price-filter">
                    <div class="sidebar-item__content-row">
                        <p><span>from</span> <input id="fromPrice" type="number"> uan.</p>
                        <p><span>to</span> <input id="toPrice" type="number"> uan.</p>
                    </div>
                    <div class="sidebar-item__content-row">
                        <input class="range-input" type="range" min="0" max="10000">
                    </div>
                </form>
            </div>
        </div>
        <div class="sidebar-item">
            <div class="sidebar-item__title">
                <p>Gender</p>
                <div class="sidebar-arrow"><img data-order="2" class="img-arrow" width="16px" height="16px"
                                                src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>"
                                                alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="2">
                <form action="#" method="post" id="gender_filter">
                <div class="sidebar-item__content-row">
                    <div class="checkbox-container">
                        <span class="check-box" data-cat-type ="man"></span> <label for="male"> <input data-cat-type = "man" type="checkbox" name="male" id="male"
                                                                                 class="gender category-checkinput">Male</label>
                    </div>
                </div>
                <div class="sidebar-item__content-row">
                    <div class="checkbox-container">
                        <span class="check-box" data-cat-type ="woman"></span> <label for="female"><input data-cat-type ="woman" type="checkbox" name="female" id="female"
                                                                                   class="gender category-checkinput">Female</label>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="sidebar-item">
            <div class="sidebar-item__title">
                <p>Price</p>
                <div class="sidebar-arrow"><img data-order="3" class="img-arrow" width="16px" height="16px"
                                                src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>"
                                                alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="3">

            </div>
        </div>
        <div class="sidebar-item">
            <div class="sidebar-item__title">
                <p>Price</p>
                <div class="sidebar-arrow"><img data-order="4" class="img-arrow" width="16px" height="16px"
                                                src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>"
                                                alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="4">

            </div>
        </div>
    </div>
</div>