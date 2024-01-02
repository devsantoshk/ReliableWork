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
          <h3>Jobs</h3>
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
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Button Example <small>Users</small></h2>
              <div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>PDF</span></a><a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#"><span>Print</span></a></div>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus-circle"></i></button>
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
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 148px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Job Categories Id</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 233px;" aria-label="JobCategoriesList: activate to sort column ascending">Job Categories List</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 105px;" aria-label="Action: activate to sort column ascending">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $conn = DbConfig();
                          $Catsql = "SELECT * FROM jobpostings";
                          $Catresult = $conn->query($Catsql);

                          if ($Catresult->num_rows > 0) {
                            $count = 0;
                            while ($row = $Catresult->fetch_assoc()) {

                          ?>
                              <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1"><?php echo $row["JobId"] ?></td>
                                <td><?php echo $row["JobTitle"] ?></td>
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
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="x_panel">
            <form class="form-label-left input_mask">

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone">
                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Default Input</label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" class="form-control" placeholder="Default Input">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Disabled Input </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Read-Only Input</label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="date" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                  <script>
                    function timeFunctionLong(input) {
                      setTimeout(function() {
                        input.type = 'text';
                      }, 60000);
                    }
                  </script>
                </div>
              </div>
              <div class="x_panel">
                <div class="x_content">
                  <div id="alerts"></div>
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                      <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink">
                        <button class="btn" type="button">Add</button>
                      </div>
                      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                      <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                  <div id="editor-one" class="editor-wrapper placeholderText" contenteditable="true"></div>
                  <textarea name="descr" id="descr" style="display:none;"></textarea>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group row">
                <div class="col-md-9 col-sm-9  offset-md-3">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  AdminRequered('Admin_Footer');
} else {
  header("Location: ../Login");
  exit();
}
?>