<?php include "header.php"?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page location -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-location-box">
                                    <h4 class="page-location">Investers</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page location -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-5">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Add Invester</button>
                                            </div>
                                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-location" id="standard-modalLabel">New Invester</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                           <form method="POST" action="">

                                                           <!-- `inves_id`, `inves_name`, `plot_no`, `location`, `inventment_type`, `id` -->
                                                           <div class="mb-3">
                                                                        <label for="inves_name" class="form-label">Username</label>
                                                                        <input type="text" id="inves_name" class="form-control" name="inves_name">
                                                                    </div>

                                                                     <div class="mb-3">
                                                                         <label for="image" class="form-label">Image</label>
                                                                         <input class="form-control" type="file" name="image">
                                                                     </div>

                                                                    <div class="mb-3">
                                                                        <label for="plot_no" class="form-label">Plot Number</label>
                                                                        <input type="text" id="plot_no" name="plot_no" class="form-control">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="location" class="form-label">Nationality</label>
                                                                        <input type="text" id="location" class="form-control" name="location" placeholder="Kampala/Uganda">
                                                                    </div>                                                

                                                                    <div class="mb-3">
                                                                        <label for="inventment_type" class="form-label">Investment Type</label>
                                                                        <input type="text" class="form-control" name="inventment_type">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="id" class="form-label">Identification</label>
                                                                        <input type="text" class="form-control" placeholder="Nin_No/Passport" name="id">
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" name="invester_btn" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                           </form>
                                                        </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="basic-datatable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th>Plot Number</th>
                                                        <th>Nationality</th>
                                                        <th>Investment Type</th>
                                                        <th>Identification</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

              <?php include "footer.php"?>