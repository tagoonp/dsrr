<!-- modalUploadProductImage -->
<div class="modal fade" id="modalUpdateDp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white pb-3" id="modalCenterTitle">แก้ไขข้อมูลพิเศษ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="">ID : <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="txtUdbId" readonly disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="">ชื่อ - นามสกุล : <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="txtUFname">
                </div>
                <div class="form-group mb-3">
                    <label for="">อีเมลแอดเดรส : </label>
                    <input type="text" class="form-control" id="txtUEmail">
                </div>
                <div class="form-group mb-3">
                    <label for="">ตำแหน่ง : </label>
                    <input type="text" class="form-control" id="txtUPosition">
                </div>
                <div class="form-group mb-3">
                    <label for="">URL ของรูปภาพ : </label>
                    <input type="text" class="form-control" id="txtUFigure">
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary" type="button" onclick="updateExtra()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modalUploadProductImage -->
<div class="modal fade" id="modalNewDp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white pb-3" id="modalCenterTitle">เพิ่มข้อมูลพิเศษ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="">ชื่อ - นามสกุล : <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="txtFname">
                </div>
                <div class="form-group mb-3">
                    <label for="">อีเมลแอดเดรส : </label>
                    <input type="text" class="form-control" id="txtEmail">
                </div>
                <div class="form-group mb-3">
                    <label for="">ตำแหน่ง : </label>
                    <input type="text" class="form-control" id="txtPosition">
                </div>
                <div class="form-group mb-3">
                    <label for="">URL ของรูปภาพ : </label>
                    <input type="text" class="form-control" id="txtFigure">
                </div>
                <div class="form-group mb-3">
                    <label for="">กลุ่ม :  <span class="text-danger">*</span></label>
                    <select name="txtGroup" id="txtGroup" class="form-control">
                        <option value="">-- เลือก --</option>
                        <option value="1">ที่ปรึกษา</option>
                        <option value="2">กรรมการ</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary" type="button" onclick="saveExtra()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>
</div>