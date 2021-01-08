<?php
require('../core/header.php');
?>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3" style="border-bottom:1px solid rgb(192,192,192) ;">
                <div class="col-md-12">
                    <h3>เพิ่มลูกค้า</h3>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="customer_id" class="form-label">รหัสลูกค้า</label>
                    <input class="form-control" id="customer_id" type="text" placeholder="" disabled />
                </div>
                <div class="col-md-5">
                    <label for="customer_name" class="form-label">ชื่อลูกค้า</label>
                    <input class="form-control" id="customer_name" type="text" placeholder="ชื่อลูกค้า" />
                </div>
                <div class="col-md-4">
                    <label for="customer_type" class="form-label">ประเภทลูกค้า</label>
                    <select id="customer_type" class="form-select">
                        <option>กรุณาเลือกประเภทลูกค้า...</option>

                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="customer_address" class="form-label">ที่อยู่</label>
                    <textarea class="form-control" placeholder="ที่อยู่..." id="customer_address" style="height: 100px"></textarea>
                </div>
                <div class="col-md-3">
                    <label for="customer_tax_number" class="form-label">เลขประจำตัวผู้เสียภาษี</label>
                    <input class="form-control" id="customer_tax_number" type="text" placeholder="เลขประจำตัวผู้เสียภาษี" />
                </div>
                <div class="col-md-3">
                    <label for="customer_email" class="form-label">อีเมลล์</label>
                    <input class="form-control" id="customer_email" type="text" placeholder="อีเมลล์" />
                </div>
                <div class="col-md-3">
                    <label for="customer_tel" class="form-label">โทรศัพท์</label>
                    <input class="form-control" id="customer_tel" type="text" placeholder="โทรศัพท์" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-secondary">ยกเลิก</button>
                    <button type="button" class="btn btn-success" onclick="btnInsert()">เพิ่มลูกค้า</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $_SESSION["base_url"] ?>js/customer/customer-insert.js"></script>
<!-- my modal -->
<!-- <div class="modal" tabindex="-1" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<!-- my modal -->
<?php
require('../core/footer.php');
?>