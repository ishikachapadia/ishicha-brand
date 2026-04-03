// * For hamburger menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.editorial-nav');

    if (menuToggle && nav) {
        menuToggle.addEventListener('click', function() {
            nav.classList.toggle('is-open');
            menuToggle.classList.toggle('active');

            if (nav.classList.contains('is-open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        });

        const navLinks = document.querySelectorAll('.nav-item');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('is-open');
                menuToggle.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });
    }
});

// * For WooCommerce cart count updates
jQuery(function($) {
    const cartParams = window.arcline_cart_params || window.wc_add_to_cart_params;

    function refreshCart() {
        if (!cartParams) {
            return;
        }

        const fragmentsUrl = cartParams.wc_ajax_url
            ? cartParams.wc_ajax_url.toString().replace('%%endpoint%%', 'get_refreshed_fragments')
            : cartParams.ajax_url;

        $.ajax({
            url: fragmentsUrl,
            type: 'POST',
            data: fragmentsUrl === cartParams.ajax_url ? { action: 'woocommerce_get_refreshed_fragments' } : {},
            success: function(data) {
                if (data && data.fragments) {
                    $.each(data.fragments, function(key, value) {
                        $(key).replaceWith(value);
                    });
                }
            }
        });
    }

    refreshCart();

    $(document.body).on('added_to_cart removed_from_cart updated_cart_totals wc_fragments_refreshed', refreshCart);

    document.body.addEventListener('wc-blocks_added_to_cart', refreshCart);
    document.body.addEventListener('wc-blocks_removed_from_cart', refreshCart);

    $(document).ajaxComplete(function(event, xhr, settings) {
        if (settings.url && settings.url.indexOf('add_to_cart') > -1) {
            refreshCart();
        }
    });
});