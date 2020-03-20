
/**
 * Фильтр на главной странице
 */
jQuery('.check-box').on('click', (e) => {
    e.target.classList.toggle('checkbox-checked')
})


/**
 * Отмена перезагрузки слайдера
 */
jQuery('.arrow-slider').on('click',(e)=>{
    e.preventDefault();
})

/**
 * Выпадающие фильтры
 */
jQuery('.img-arrow').on('click', (e)=>{
    const img = e.target
    order = img.getAttribute("data-order")
    jQuery('.sidebar-item__content[data-order="'+ order +'"]').toggleClass('sidebar-item-opened');
    const height = jQuery('.sidebar-item__content[data-order="'+ order +'"]').offsetHeight;
    jQuery('.img-arrow[data-order="'+order+'"]').toggleClass('img-arrow-active');

})

/**
 *Бургер меню
 */
var opened = true
jQuery('.burger').on('click',(e)=>{
    jQuery('.nav-bar__menu-container').toggleClass('burger-menu__opened')
    jQuery('.dark_layout').toggleClass('dark_layout-active')
    if(opened) {
        jQuery("html,body").css("overflow", "hidden");
        opened = !opened
    }else {
        jQuery("html,body").css("overflow", "scroll");
        opened = !opened
    }
})


/**
 * Checkbox toggle
 * @type {jQuery}
 */
jQuery('.checkbox-container').on('click', (e)=>{
    let inpSpan = jQuery(e.target)
    let cat = inpSpan.attr('data-cat-type')
    let inp = jQuery('input[data-cat-type="'+ cat +'"]')
    if(inp.attr("checked")) {
        inp.removeAttr("checked")
    }
    else {
        inp.attr("checked",'checked')
    }
})
