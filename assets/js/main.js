class siteJS{
    constructor(){
        this.scrollToTop();
        this.toggleNav();
        this.moveToMap();
    }

    scrollToTop(){
        $(".move-to-top").click(function(e) {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
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
    moveToMap(){
        $('.to-map').on('click', function(e){
            e.preventDefault();
            window.scrollBy(0,1000);
        });
    }
    


}

$(document).ready(function(){
    new siteJS();
});