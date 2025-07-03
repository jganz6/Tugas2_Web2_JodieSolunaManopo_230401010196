<?php $this->load->view('partials/head'); ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
         <?php $this->load->view('partials/side_nav') ?>

        <!-- Main content -->
        <div class="col-md-10 p-4">
            <?php $this->load->view($main_view); ?>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>
