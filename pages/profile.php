    <?php 
        include 'header.php';
    ?>
        <header class="border-top-red pt-4">
            <div class="container">
                <section class="header-top-section d-sm-flex justify-content-between align-items-center mb-4 mb-sm-2">
                    <div class="site-logo  font-weight-bold">
                        <a href="index.php">
                            <img class="d-block d-sm-inline" src="../assets/images/logo.png" alt="logo">
                            アドバンス株式会社
                        </a>
                    </div>
                    
                    <a class="contact-us-btn border" href="contact.php">
                        お問い合わせ 
                        <i class="fas fa-caret-right right-caret"></i>
                    </a>
                    
                </section>
                <a class="nav-toggler border" href="#">
                    <i class="fas fa-bars text-dark"></i> 
                </a>
                <section class="header-nav-section d-sm-flex justify-content-center">
                   <div class="site-navigation-bar">
                       <ul class="clearfix">
                           <li ><a href="../index.php">ホーム</a></li>
                           <li class="active"><a  href="company.php">会社案内</a></li>
                           <li><a  href="#">高性能防水ガラリ</a></li>
                           <li><a class="border-right-0 pr-0" href="#">資料ダウンロード</a></li>
                           <a class="btn btn-danger close-nav-btn mt-4" href="#">Close</a>
                       </ul>
                   </div>
                </section>
            </div>
            
        </header><!-- header Ends -->







<div class="profile-section">
    <div class="page-map">
        <div class="container">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">ホーム</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">会社案内</a></li>
                <li class="breadcrumb-item active" aria-current="page">会社情報</li>
            </ol>
        </div>
    </div><!-- page map ends -->

    <div class="container">
        <div class="page-title text-center my-5">
            <h2 class="pb-3">会社情報</h2>
        </div>
        <div class="profile-wrapper mb-5">
            <h2 class="title-with-red-line mb-4 mb-sm-5 pb-2 font-weight-bold">会社概要</h2>
            <div class="px-2 px-sm-5">
                <div class="row brdr-bottom ">
                    <div class="col-4 py-3 bg-light-clr">
                        お名前
                    </div>
                    <div class="col-6 py-3">
                        アドバンス株式会社
                    </div>
                </div>
                <div class="row brdr-bottom ">
                    <div class="col-4 py-3 bg-light-clr">
                        所在地
                    </div>
                    <div class="col-8 py-3">
                        沖縄県中城村字泊433番地
                        <a class="to-map border rounded text-dark py-1 px-3 mt-1 mt-sm-0 ml-sm-5" href="#">
                            地図はこちら
                            <i class="fas fa-caret-down text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="row brdr-bottom">
                    <div class="col-4 py-3 bg-light-clr">
                        創業
                    </div>
                    <div class="col-8 py-3">
                        2005年（平成17年）
                    </div>
                </div>
                <div class="row brdr-bottom">
                    <div class="col-4 py-3 bg-light-clr">
                        資本金
                    </div>
                    <div class="col-8 py-3">
                        900万円
                    </div>
                </div>
                <div class="row brdr-bottom">
                    <div class="col-4 py-3 bg-light-clr">
                        取引銀行
                    </div>
                    <div class="col-8 py-3">
                        沖縄海邦銀行（泡瀬支店）　西日本シティ銀行（六本松支店
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-wrapper mb-5">
            <h2 class="title-with-red-line mb-4 mb-sm-5 pb-2 font-weight-bold">沿革</h2>
            <div class="px-2 px-sm-5">
                <div class="row brdr-bottom">
                    <div class="col-4 py-3 bg-light-clr">
                        平成17年1月
                    </div>
                    <div class="col-8 py-3">
                        会社創業
                    </div>
                </div>
                <div class="row brdr-bottom">
                    <div class="col-4 py-3 bg-light-clr">
                        平成17年4月
                    </div>
                    <div class="col-8 py-3">
                        高性能防水ガラリ、モラネード販売開始
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <h2 class="title-with-red-line mb-5 pb-2 font-weight-bold">アクセス</h2>
            <div class="px-1 px-sm-5">
                <iframe class="border-0 i-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3999610173273!2d139.6039553151111!3d35.66715258019758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f186245664b3%3A0xf12311fb29127d72!2s2+Chome-14+Minamikarasuyama%2C+Setagaya-ku%2C+T%C5%8Dky%C5%8D-to+157-0062%2C+Japan!5e0!3m2!1sen!2snp!4v1551869689412"
                allowfullscreen=""></iframe>
            </div>
            <div class="text-center view-map-btn mt-5">
                  <a class="border" href="#">
                    Google Mapを開く
                  </a>  
            </div>
        </div>

        

    </div>
</div>

<?php 
    include 'footer.php';
?>


        