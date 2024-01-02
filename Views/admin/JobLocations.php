<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Name'])) {
AdminRequered('Admin_Link');
 ?>

          <!-- sidebar menu -->
          <?php AdminRequered('Admin_Sidebar') ?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <?php AdminRequered('Admin_Header') ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Job Location</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-plus-circle"></i></button>
                            <div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>PDF</span></a><a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Print</span></a></div>
                            <div class="d-flex">
                                <div class="dataTables_length" id="datatable-buttons_length"><label>Show <select name="datatable-buttons_length" aria-controls="datatable-buttons" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="datatable-buttons_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-buttons"></label></div>

                            </div>
                            <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 148px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Job Location Id</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 233px;" aria-label="JobCategoriesList: activate to sort column ascending">Job Location Titel</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 105px;" aria-label="Action: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conn = DbConfig();
                                    $Catsql = "SELECT * FROM locations";
                                    $Catresult = $conn->query($Catsql);

                                    if ($Catresult->num_rows > 0) {
                                        $count = 0;
                                        while ($row = $Catresult->fetch_assoc()) {

                                    ?>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1"><?php echo $row["Loc_Id"] ?></td>
                                                <td><?php echo $row["Location"] ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else
                                        echo "0 results";
                                    ?>
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="datatable-buttons_previous"><a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0">Previous</a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0">2</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0">3</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0">4</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0">5</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0">6</a></li>
                                    <li class="paginate_button next" id="datatable-buttons_next"><a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-sm" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2">Add Job Categories</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                </div>
                
                    <form action="../Controllers/Admin/Top_Header" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="modal-body">
                         <?php
                        $sql = "SELECT * FROM `locations` WHERE 1";
                        $result = $conn->query($sql);
                        if ($row = $result->fetch_assoc()) {

                        ?>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="TopHeader" id="TopHeader" class="form-control" rows="3" col="5"></textarea> 
                                </div>
                            </div>
                        <?php
                        } else echo "Record Zero or Error: " . $conn->error;
                        $result->free();
                        if (isset($_GET['success']))
                            echo '<script>$(document).ready(function() {$("#myModal").modal("show");});</script>';
                        ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- /page content -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>
<?php
    AdminRequered('Admin_Footer');
} else {
    header("Location: ../Login");
    exit();
}
?>