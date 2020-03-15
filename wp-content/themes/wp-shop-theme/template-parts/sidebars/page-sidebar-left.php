<div class="sidebar">
    <div class="sidebar-container page-item">
        <button class="all-items">All products</button>
        <div class="sidebar-item">
            <div class="sidebar-item__title">
                <p>Price</p>
                <div class="sidebar-arrow" ><img data-order="1" class="img-arrow"  width="16px" height="16px" src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>" alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="1">
                <form action="#" method="post" id="price-filter">
                <div class="sidebar-item__content-row">
                    <p><span>from</span> <input type="number"> uan.</p>
                    <p><span>to</span> <input type="number"> uan.</p>
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
                <div class="sidebar-arrow" ><img data-order="2" class="img-arrow" width="16px" height="16px" src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>" alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="2">
                <div class="sidebar-item__content-row">
                    <label for="male"><input type="checkbox" id="male" class="gender">Male</label>
                </div>
                <div class="sidebar-item__content-row">
                    <label for="female"><input type="checkbox" id="female" class="gender">Female</label>
                </div>
            </div>
        </div>
        <div class="sidebar-item">
            <div class="sidebar-item__title">
                <p>Price</p>
                <div class="sidebar-arrow" ><img data-order="3" class="img-arrow" width="16px" height="16px" src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>" alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="3">

            </div>
        </div>
        <div class="sidebar-item">
            <div class="sidebar-item__title">
                <p>Price</p>
                <div class="sidebar-arrow" ><img data-order="4" class="img-arrow" width="16px" height="16px" src="<?php echo get_template_directory_uri() . '/assets/img/sidebar/arrow.svg' ?>" alt="arrow"></div>
            </div>
            <div class="sidebar-item__content" data-order="4">

            </div>
        </div>
    </div>
</div>