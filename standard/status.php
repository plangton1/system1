<?php include('status_sql.php'); ?>
<?php include('insert_status.php'); ?>
<section class="items-grid section custom-padding">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">แก้ไขเอกสาร</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                        <div class="  tab-content font">
        <div id="home" class="container-fluid tab-pane active m-2">
        <form method="post">
            <table class="table table-bordered table-responsive-xl  text-center pt-5" style="width: 100%;" id="tableall">
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
                    <?php $i = 1; ?>
                    <?php while ($data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                         $standard_meet = iconv("tis-620" , "utf-8" , $data["standard_meet"]);
                         $standard_number = iconv("tis-620" , "utf-8" , $data["standard_number"]);
                         $standard_detail = iconv("tis-620" , "utf-8" , $data["standard_detail"]);
                         $name_agency = iconv("tis-620" , "utf-8" , $data["name_agency"]);
                         $standard_mandatory = iconv("tis-620" , "utf-8" , $data["standard_mandatory"]);
                         $department_name = iconv("tis-620" , "utf-8" , $data["department_name"]);
                         $standard_meet = iconv("tis-620" , "utf-8" , $data["standard_meet"]);
                        ?>
                        <tr class="text-center">
                            <td class="align-middle"><?= $i++; ?></td>
                            <td class="align-middle"><?=$standard_meet?></td>
                            <td class="align-middle"><?=$standard_number?></td>
                            <td class="align-middle"><?=$standard_detail?></td>
                            <td class="align-middle"><?=$name_agency?></td>
                            <td class="align-middle"><?=$standard_mandatory ?></td>
                            <td class="align-middle"><?=$department_name?></td>
                            <td class="align-middle">
                                <input type="date" class="form-control" name="progess_date"  required>
                            </td>
                            <td class="align-middle">
                                <div class="mb-4">
                                    <a href="?page=<?= $_GET['page'] ?>&function=update&standard_id=<?=$standard_id?>" class="btn btn-sm btn-warning">แก้ไขสถานะ</a>
                            </td>
                            <td class="align-middle"> 
                                <input type="text" class="form-control" name="name_real"  required>
                            </td>
    </tr>
<?php } ?>
</tbody>
</table>
</form>

        </div>
                </div>
            </div>
            
                   
                    </div>
                </div>
            </div>
        </div>
    </section>

