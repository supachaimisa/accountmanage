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
                <h3>จัดการใบกำกับภาษี</h3>
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
                    <button type="button" class="btn btn-success mt-3 mb-3" onclick="addInvoice()" style="float: right;">เพิ่มเอกสาร</button>
                    <!-- <button type="button" class="btn btn-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#myModal" style="float: right;">เพิ่มเอกสาร</button> -->
                        <table class="table table-bordered" id="invoiceTable">
                            <thead style="background-color: rgb(139, 139, 139);">
                                <tr>
                                    <th>#</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Handle</th>
                                    <th width="20%">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td width="20%" align="center">
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-file-alt" style="font-size: 22px;"></i></button>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit" style="font-size: 22px;"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt" style="font-size: 22px;"></i></button>
                                    </td>
                                </tr>
                                
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
    <script src="<?php echo $_SESSION["base_url"]?>js/invoice.js"></script>
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