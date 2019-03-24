    <?php 
        include 'header.php';
    ?>
    <header class="border-top-red pt-4">
        <div class="container">
            <section class="header-top-section d-sm-flex justify-content-between align-items-center mb-4 mb-sm-2">
                <div class="site-logo  font-weight-bold">
                    <a href="../index.php">
                        <img class="d-block d-sm-inline" src="../assets/images/logo.png" alt="logo">
                        アドバンス株式会社
                    </a>
                </div>
                
                <a class="contact-us-btn border" href="#">
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
                        <li><a  href="company.php">会社案内</a></li>
                        <li><a  href="#">高性能防水ガラリ</a></li>
                        <li><a class="border-right-0 pr-0" href="#">資料ダウンロード</a></li>
                        <a class="btn btn-danger close-nav-btn mt-4" href="#">Close</a>
                    </ul>
                </div>
            </section>
        </div>
        
    </header><!-- header Ends -->

    <div class="contact-section">
        <div class="page-map">
            <div class="container">
            <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">お問い合わせ</li>
                </ol>
            </div>
        </div><!-- page map ends -->

        <div class="container">
            <div class="page-title text-center my-4 my-sm-5">
                <h2 class="pb-3">お問い合わせ</h2>
            </div>
            <p class="text-center mb-5">
                下記フォームに必要事項を入力し、お問い合わせください。<br>
                なお、当社における個人情報保護に関する基本的な考え方は、プライバシーポリシーに定めるとおりとなります。<br>
                内容をご確認いただき、個人情報の取扱いに同意いただいた上で、お問い合わせください。
            </p>

            <div class="contact-form mb-1 mb-sm-0">
                <form action="../controller/handle-form.php" method="POST">
                    <div class="container">
                        <div class="row brdr-bottom mb-2 mb-sm-0">
                            <div class="col-sm-4 bg-light-clr py-3">
                                <div class="d-flex justify-content-between align-items-center mt-1 mt-sm-3">
                                    お名前
                                    <span class="feild-required bg-red text-white">必須</span>
                                </div>
                            </div>
                            <div class="col-sm-6 py-3">
                                <div class="form-group mb-0">
                                    <input type="text" name="name" class="form-control p-3" placeholder="例）大和　太郎" required>
                                </div>
                            </div>
                        </div>
                        <div class="row brdr-bottom mb-2 mb-sm-0">
                            <div class="col-sm-4 bg-light-clr py-3">
                                <div class="d-flex justify-content-between align-items-center mt-1 mt-sm-3">
                                    御社名
                                    <span class="feild-required bg-red text-white">必須</span>
                                </div>
                            </div>
                            <div class="col-sm-6 py-3">
                                <div class="form-group mb-0">
                                    <input type="text" name="company-name" class="form-control p-3" placeholder="例）株式会社大和工業" required>
                                </div>
                            </div>
                        </div>
                        <div class="row brdr-bottom mb-2 mb-sm-0">
                            <div class="col-sm-4 bg-light-clr py-3">
                                <div class="d-flex justify-content-between align-items-center mt-1 mt-sm-3">
                                    メールアドレス
                                    <span class="feild-required bg-red text-white">必須</span>
                                </div>
                            </div>
                            <div class="col-sm-6 py-3">
                                <div class="form-group mb-0">
                                    <input type="email" name="email" class="form-control p-3" placeholder="例）daiwataro@daiwa-okinawa.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="row brdr-bottom mb-2 mb-sm-0">
                            <div class="col-sm-4 bg-light-clr py-3">
                                <div class="d-flex justify-content-between align-items-center mt-1 mt-sm-3">
                                    電話番号
                                    <span class="feild-required bg-red text-white">必須</span>
                                </div>
                            </div>
                            <div class="col-sm-6 py-3">
                                <div class="form-group mb-0">
                                    <input type="number" name="number" class="form-control p-3" placeholder="例）098-123-4567">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 bg-light-clr py-3">
                                <div class="d-flex justify-content-between align-items-center mt-1 mt-sm-3">
                                    お問い合わせ内容
                                    <span class="feild-required bg-red text-white">必須</span>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="form-group mb-0">
                                    <textarea type="text" name="message" rows="5" class="form-control p-3" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="site-btn text-center">
                            <button type="submit" name="submit" class="d-inline-block font-weight-bold">
                                確認画面へ
                                <i class="fas fa-angle-right right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
        include 'footer.php';
    ?>



        