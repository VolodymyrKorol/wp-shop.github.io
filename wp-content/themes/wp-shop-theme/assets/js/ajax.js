jQuery(document).ready(()=>{


jQuery('#showProds').on('click',()=>{

    let fromPrice = jQuery('#fromPrice').val();
    let toPrice = jQuery('#toPrice').val();

    jQuery.ajax({
        url: 'http://wp-shop/ajaxfilter',
        type: 'POST',
        cache: false,
        data: {'fromPrice':fromPrice,
               'toPrice':toPrice
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