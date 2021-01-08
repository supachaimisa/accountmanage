<?php
require('./core/header.php');
?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <canvas id="chartjs-4" class="chartjs" width="962" height="481" style="display: block; height: 385px; width: 770px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <canvas id="chartjs-0" class="chartjs" width="962" height="481" style="display: block; height: 385px; width: 770px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <canvas id="chartjs-1" class="chartjs" width="962" height="481" style="display: block; height: 385px; width: 770px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <canvas id="chartjs-5" class="chartjs" width="962" height="481" style="display: block; height: 385px; width: 770px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/chart.js/dist/Chart.bundle.js"></script>
<script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/chart.js/dist/Chart.bundle.min.js"></script>
<script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/chart.js/dist/Chart.css"></script>
<script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/chart.js/dist/Chart.js"></script>
<script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/chart.js/dist/Chart.min.css"></script>
<script src="<?php echo $_SESSION["base_url"] ?>js/index.js"></script>
<!-- my modal -->
<div class="modal" tabindex="-1" id="myModal">
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
</div>
<!-- my modal -->
<?php
require('./core/footer.php');
?>