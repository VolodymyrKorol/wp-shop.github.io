jQuery(document).ready(()=>{


jQuery('#showProds').on('click',()=>{

    let fromPrice = jQuery('#fromPrice').val();
    let toPrice = jQuery('#toPrice').val();
    let male = jQuery('#male').is(':checked');
    let data = {};
    let categories='';

    jQuery('#gender_filter').find ('input').each(function() {
        data[this.getAttribute('data-cat-type')] = jQuery(this).attr('checked')=='checked'? true: false
        categories = JSON.stringify(data)
    })
    console.log(categories)
    jQuery.ajax({
        url: 'http://wp-shop/ajaxfilter',
        type: 'POST',
        cache: false,
        data: {'fromPrice':fromPrice,
               'toPrice':toPrice,
               'categories': categories
        },
        dataType: 'html',
        beforeSend:()=>{
            jQuery('.load-line').toggleClass('load-line-active')
        },
        success: (data)=>{
            console.log(data)
             jQuery('.shop-wrap').empty();
             jQuery('.shop-wrap').append(data);
            jQuery('.load-line').toggleClass('load-line-active')
        }
    })
})
    jQuery('.all-items').on('click',()=>{


    jQuery.ajax({
        url: 'http://wp-shop/ajaxfilter',
        type: 'POST',
        cache: false,
        data: {},
        dataType: 'html',
        beforeSend:()=>{
            jQuery('.load-line').toggleClass('load-line-active')
        },
        success: (data)=>{
             jQuery('.shop-wrap').empty();
             jQuery('.shop-wrap').append(data);
            jQuery('.load-line').toggleClass('load-line-active')
        }
    })
})

})