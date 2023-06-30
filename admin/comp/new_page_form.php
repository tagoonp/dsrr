<form id="contentForm" onsubmit="content.save_page(); return false;" autocomplete="off">
    <div class="form-group mb-3">
        <label for="">ชื่อ/หัวข้อ : <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="txtTitle" name="txtTitle" autofocus>
    </div>

    <div class="form-group mb-3">
        <label for="">เนื้อหา : </label>
        <textarea name="txtContent" id="txtContent" cols="30" rows="30" class="form-control"></textarea>
    </div>

    <div class="row">
        <div class="form-group mb-3 col-12 col-sm-6">
            <label for="">แนบกับเมนู : </label>
            <select name="txtMenu" id="txtMenu" class="form-control">
                <option value="">ระบุภายหลัง</option>
                <?php 
                $strSQL = "SELECT menu_id, menu_title FROM dsx3_menu WHERE menu_level = '1' ";
                $res = $db->fetch($strSQL, true, true);
                if(($res) && ($res['status'])){
                    foreach ($res['data'] as $row) {
                        $menu_id = $row['menu_id'];
                        $strSQL = "SELECT menu_id, menu_title FROM dsx3_menu WHERE menu_parent_id = '$menu_id'";
                        $res2 = $db->fetch($strSQL, true, true);
                        if(($res2) && ($res2['status'])){
                            ?>
                            <optgroup label="<?php echo $row['menu_title']; ?>"><?php echo $row['menu_title']; ?></optgroup>
                            <?php
                            foreach ($res2['data'] as $row2) {
                                ?>
                                <option value="<?php echo $row2['menu_id']; ?>">- <?php echo $row2['menu_title']; ?></option>
                                <?php
                            }
                        }else{
                            ?>
                            <option value="<?php echo $row['menu_id']; ?>"><?php echo $row['menu_title'] ; ?></option>
                            <?php
                        }
                        
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group mb-3 col-12 col-sm-6">
            <label for="">Tags : </label>
            <input type="text" class="form-control" id="txtTag">
        </div>


    </div>

    <div class="form-group" style="text-align: right;">
        <button class="btn btn-primary-" type="reset">รีเซ็ต</button>
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </div>

</form>