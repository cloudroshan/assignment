class siteJS{
    constructor(){
        this.scrollToTop();
        this.makeNavActive();
        this.toggleNav();
    }

    scrollToTop(){
        $(".move-to-top").click(function(e) {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
    }
    makeNavActive(){
        $('.site-navigation-bar li a').on('click', function(e){
            $(e.target).parent().addClass('active').siblings().removeClass('active');
        });
    }
    toggleNav(){
        // show nav
        $('.nav-toggler').on('click', function(e){
            e.preventDefault();
            $('.site-navigation-bar').css({
                "left": '0',
            });
        });

        // hide nav
        $('.close-nav-btn').on('click', function(e){
            e.preventDefault();
            $('.site-navigation-bar').css({
                "left": '-100%',

            });
        });
    }


}

$(document).ready(function(){
    new siteJS();
});