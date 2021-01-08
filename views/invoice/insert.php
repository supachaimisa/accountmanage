<?php
require('../core/header.php');
?>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $_SESSION["base_url"] ?>js/invoice-insert.js.js"></script>
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