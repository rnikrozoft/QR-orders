<div class="modal fade" id="fd-a" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">เพิ่มข้อมูล</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo base_url('/foods/insert') ?>" enctype="multipart/form-data" method="post" id="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ชื่อเมนู:</label>
                        <input type="text" class="form-control" name="n" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">รายละเอียด:</label>
                        <textarea class="form-control" rows="6" name="d"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">จำนวน:</label>
                                <input type="number" class="form-control" name="q" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">ราคา:</label>
                                <input type="number" class="form-control" name="p" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="i" required>
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

<div class="modal fade" id="fd-e" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">แก้ไขเมนูอาหาร</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo base_url('/foods/edit') ?>" enctype="multipart/form-data" method="post" id="form-edit">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">ชื่อเมนู:</label>
                                <input type="text" class="form-control" name="n" id="n" required> 
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">รายละเอียด:</label>
                                <textarea class="form-control" rows="6" name="d" id="d"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="img-thumbnail" width="370" height="295" style="height: 295px;object-fit: cover;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">จำนวน:</label>
                                <input type="number" class="form-control" name="q" id="q" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">ราคา:</label>
                                <input type="number" class="form-control" name="p" id="p" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="iup">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary" id="i" name="img">แก้ไขข้อมูล</button>
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>