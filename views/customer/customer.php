<style>
    .dataTable-search{
        margin: 8px;
    }
</style>
<?php 
    require('../core/header.php');
?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h3>จัดการลูกค้า</h3>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="Session-tab" data-bs-toggle="tab" href="#Session" role="tab" aria-controls="Session" aria-selected="false">Session</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                   
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <button type="button" class="btn btn-success mt-3 mb-3" onclick="addCustomer()" style="float: right;">เพิ่มลูกค้า</button>
                    <!-- <button type="button" class="btn btn-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#myModal" style="float: right;">เพิ่มเอกสาร</button> -->
                        <table class="table table-bordered" id="customerTable">
                            <thead style="background-color: rgb(139, 139, 139);">
                                <tr>
                                    <th align="center" width="6%">ลำดับ</th>
                                    <th align="center">รายชื่อลูกค้า</th>
                                    <th align="center">Email</th>
                                    <th align="center">ประเภท</th>
                                    <th align="center" width="20%">#</th>
                                </tr>
                            </thead>
                            <tbody id="customerTableTbody">
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p>
                            this is Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem alias hic dolorum impedit sequi nam? Rerum, animi eos cumque pariatur qui accusamus iure, beatae vero perferendis deleniti possimus nam in!
                            ...
                            
                        </p>
                    </div>
                    <div class="tab-pane fade" id="Session" role="tabpanel" aria-labelledby="Session-tab">
                        <p>
                        <samp>
                            <?php
                            echo "<pre>";
                            var_dump($_SESSION)
                            ?>
                        </samp>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $_SESSION["base_url"]?>js/customer/customer.js"></script>
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