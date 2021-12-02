<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php include('./include/head.php');?>
<?php include('./css/css.php');?>

<body class="font">
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

<?php include('./include/menu.php');?>

    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp " data-wow-delay=".3s">ค้นหาเอกสารที่นี่</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s"></p>
                        </div>
                        <!-- End Search Form -->
                        <!-- Start Search Form -->
                        <div class="search-form wow fadeInUp " data-wow-delay=".3s">
                            <div class="row s-ct">
                                <div class="col-lg-4 col-md-4 col-12 p-0">
                                    <div class="search-input">
                                        <label for="keyword"><i class="lni lni-search-alt theme-color "></i></label>
                                        <input type="text" name="keyword" id="keyword" placeholder="Product keyword">
                                    </div>
                                </div>
                                
                               
                                <div class="col-lg-2 col-md-2 col-12 p-0">
                                    <div class="search-btn button">
                                        <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Categories Area -->
    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="row mg-l-menu2">
                    <div class="col-12 p-0">
                        <div class="category-slider">
                            <!-- Start Single Category -->
                            <a href="add.php" class="single-cat">
                                <div class="icon">
                                    <img src="https://th.seaicons.com/wp-content/uploads/2015/11/document-add-icon.png" alt="#">
                                </div>
                                <h3>เพิ่มเอกสาร</h3>
                                
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="status.php" class="single-cat">
                                <div class="icon">
                                    <img src="https://cdn.icon-icons.com/icons2/2011/PNG/512/edit_document_file_icon_123491.png" alt="#">
                                </div>
                                <h3>แก้ไขสถานะ</h3>
                                
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="report.php" class="single-cat">
                                <div class="icon">
                                    <img src="https://cdn.iconscout.com/icon/free/png-256/report-file-2014973-1700581.png" alt="#">
                                </div>
                                <h3>รายงานเอกสาร</h3>
                                
                            </a>
                            <!-- End Single Category -->
                            
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    <!-- Start Items Grid Area -->
    <section class="items-grid section custom-padding">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">เอกสารทั้งหมด</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                        <div class="  tab-content font">
        <div id="home" class="container-fluid tab-pane active m-2">
            <!-- <div class="border rounded-2 border-2 bg-info text-white ">
                <h1 class="mg-t ">เอกสารที่ยื่นขอ มอก. ทั้งหมด</h1>
            </div> -->
            <table class="table table-striped ">
    <thead>
      <tr>
        <th>ลำดับที่</th>
        <th>วาระจากในที่ประชุมสมอ.</th>
        <th>เลขที่มอก.</th>
        <th>ชื่อมาตรฐาน</th>
        <th>หน่วยงานที่สามารถทดสอบได้</th>
        <th>มาตรฐานบังคับ</th>
        <th>หน่วยงานที่ขอ</th>
        <th>วันที่แต่งตั้ง</th>
        <th>สถานะ</th>
        <th>เลขเอกสารที่เกี่ยวข้อง</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>2</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      
     
    </tbody>
  </table>
                    </div>
                </div>
            </div>
            
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Items Grid Area -->

   
    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row grid-2">
                   
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>ติดต่อเรา</h3>
                            <div class="row">
                                <div class="">
                                   <h3>สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย 35 เทคโนธานี ถนนเลียบคลองห้า ตำบลคลองห้า อำเภอคลองหลวง จังหวัดปทุมธานี 12120 <br>ข้อมูลการติดต่อ : โทรศัพท์ 0-2577-9000 โทรสาร 0-2577-9009<br>ลิงค์หน่วยงาน : http://www.tistr.or.th/<br>อีเมลติดต่อ : tistr@tistr.or.th</h3>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    
                    
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>สนับสนุนโดย</h3>
                           <img src="https://www2.tistr.or.th/tistrservices/training/images/logo2.png" class="logo"><h3>สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย</h3>
                        </div>
                        <!-- End Single Widget -->
                    
                    
                      
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

   <?php include('./include/script.php');?>
</body>

</html>