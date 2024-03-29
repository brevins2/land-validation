<?php include "header.php"?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page location -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-location-box">
                                    <h4 class="page-location">Land Issues</h4>
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
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Add Land Issues</button>
                                            </div>
                                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-location" id="standard-modalLabel">New Land Issue</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                           <form >
                                                           <div class="mb-3">
                                                                        <label for="pnumber" class="form-label">Plot Number</label>
                                                                        <input type="text" id="pnumber" class="form-control" name="pnumber">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="reason" class="form-label">Reason</label>
                                                                        <textarea class="form-control" name="reason" id="example-textarea" rows="5"></textarea>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="example-textarea" class="form-label">Responsibles</label>
                                                                        <textarea class="form-control" name="respons" id="example-textarea" rows="2"></textarea>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                           </form>
                                                        </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table dt-responsive nowrap w-100" id="basic-datatable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Plot No</th>
                                                        <th>Reason</th>
                                                        <th>Responsibles</th>
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