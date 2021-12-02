  <?php include('insert_sql.php'); ?>
  <section class="items-grid section custom-padding">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">เพิ่มเอกสาร</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                        <div class="  tab-content font">
        <div id="home" class="container-fluid tab-pane active m-2">
        <form method="post">
            <table class="table table-responsive text-center pt-5"  id="myTable">
                <thead>
                    <tr>
                        <th>ลำดับที่</th>
                        <th>วาระจากในที่ประชุมสมอ.</th>
                        <th>เลขที่มอก.</th>
                        <th>ประเภทผลิตภัณฑ์</th>
                        <th>กลุ่มผลิตภัณฑ์</th>
                        <th>ชื่อมาตรฐาน</th>
                        <th>หน่วยงานที่ทดสอบได้</th>
                        <th>มาตรฐานบังคับ</th>
                        <th>หน่วยงานที่ขอ</th>
                        <th>หมายเลข tacking</th>
                        <th>หมายเหตุ</th>
                        <th>แนบไฟล์</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <tr class="text-center">
                        <td class="align-middle"><?= $i++; ?></td>
                        <td class="align-middle"><input type="text" class="form-control" name="standard_meet" required></td>
                        <td class="align-middle"><input type="text" class="form-control" name="standard_number" required></td>
                        <td class="align-middle">
                            <select class="form-control" autocomplete="off" name="type_id" style="height: unset !important;">
                                <option value="" selected disabled>ประเภทผลิตภัณฑ์</option>
                                <?php while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                                    $type_id = iconv("tis-620", "utf-8", $result["type_id"]);
                                    $type_name = iconv("tis-620", "utf-8", $result["type_name"]); ?>
                                    <option value="<?= $type_id ?>"><?= $type_name ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td class="align-middle"><select class="form-control" name="group_id" style="height: unset !important;">
                                <option value="" selected autocomplete="off" disabled>กลุ่มผลิตภัณฑ์</option>
                                <?php while ($result = sqlsrv_fetch_array($query1, SQLSRV_FETCH_ASSOC)) {
                                    $group_id = iconv("tis-620", "utf-8", $result["group_id"]);
                                    $group_name = iconv("tis-620", "utf-8", $result["group_name"]); ?>
                                    <option value="<?= $group_id ?>"><?= $group_name ?></option>
                                <?php } ?>
                            </select></td>
                        <td class="align-middle"><textarea type="text" class="form-control" name="standard_detail" required></textarea></td>
                        <td class="align-middle">
                            <select class="form-control" name="agency_id" autocomplete="off" style="height: unset !important;">
                                <option value="" selected disabled>หน่วยงานที่สามารถทดสอบได้</option>
                                <?php while ($result = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC)) {
                                    $agency_id = iconv("tis-620", "utf-8", $result["agency_id"]);
                                    $agency_name = iconv("tis-620", "utf-8", $result["agency_name"]); ?>
                                    <option value="<?= $agency_id ?>"><?= $agency_name ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td class="align-middle"><input type="text" class="form-control" name="standard_mandatory" required></td>
                        <td class="align-middle">
                            <select class="form-control" autocomplete="off" name="department_id" style="height: unset !important;">
                                <option value="" selected disabled>หน่วยงานที่ขอ</option>
                                <?php while ($result = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) {
                                    $department_id = iconv("tis-620", "utf-8", $result["department_id"]);
                                    $department_name = iconv("tis-620", "utf-8", $result["department_name"]); ?>
                                    <option value="<?= $department_id ?>"><?= $department_name ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td class="align-middle"><input type="text" class="form-control" name="standard_tacking" required></td>
                        <td class="align-middle"><input type="text" class="form-control" name="standard_note" required></td>
                        <td class="align-middle"><input type="file" class="form-control" name="standard_file"></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" onclick="add_row()" class="btn btn-danger bt mg-t-bt" >เพิ่มฟอร์ม</button>
            <button type="button" onclick="del_row()" class="btn btn-danger bt mg-t-bt">ลบฟอร์ม</button>
            <button type="submit" class="btn btn-primary bt mg-t-bt">เพิ่มข้อมูล</button>
        </form>
    </div>
</div>
<script>
function add_row() {
    var table = document.getElementById("myTable");
    count_rows = table.getElementsByTagName("tr").length;

    var row = table.insertRow(count_rows);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
    var cell11 = row.insertCell(10);
    var cell12 = row.insertCell(11);
<?php $i=1; ?>
    cell1.innerHTML = "<input type='text'   "+count_rows+" value='<?= $i++?>'>";
    cell2.innerHTML = "<input type='text' name='standard_meet'"+count_rows+" value>";
    cell3.innerHTML = "<input type='text' name='standard_number'"+count_rows+" value>";
    cell4.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
    cell5.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
    cell6.innerHTML = "<textarea type='text' name='standard_detail'"+count_rows+" value></textarea>";
    cell7.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
    cell8.innerHTML = "<input type='text' name='standard_mandatory'"+count_rows+" value>";
    cell9.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
    cell10.innerHTML = "<input type='text' name='standard_tracking'"+count_rows+" value>";
    cell11.innerHTML = "<input type='text' name='standard_note'"+count_rows+" value>";
    cell12.innerHTML = "<input type='file' name='txtB'"+count_rows+" value>";
}


function del_row(){
    var table = document.getElementById("myTable");
    count_rows = table.getElementsByTagName("tr").length;
    document.getElementById("myTable").deleteRow(count_rows-1);
}
</script>




            </div>
                </div>
            </div>
            
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
