<div class="modal fade" id="em-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" id="form">
                <!-- action="<?php echo base_url('/employees/insert') ?>"  -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">รหัสประจำตัวประชาชน:</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ชื่อ:</label>
                        <input type="text" class="form-control" name="fn" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">นามสกุล:</label>
                        <input type="text" class="form-control" name="ln" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ชื่อเล่น:</label>
                        <input type="text" class="form-control" name="nn" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">อายุ:</label>
                        <input type="number" class="form-control" name="a" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร:</label>
                        <input type="number" class="form-control" name="t" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary">เพิ่มข้อมูล</button>
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>