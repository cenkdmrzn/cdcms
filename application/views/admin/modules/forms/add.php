<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="FormName">Form name:</label>
                            <input type="text" class="form-control" id="FormName" placeholder="Enter form name">
                        </div>
                        <div class="form-group">
                            <label for="Method">Method:</label>
                            <select id="Method" class="form-control">
                                <option>Get</option>
                                <option>Post</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Action">Send to Mail:</label>
                            <input type="text" class="form-control" id="Action" placeholder="Enter mail address">
                        </div>
                        <div class="form-group">
                            <label for="PageID">Page:</label>
                            <select id="PageID" class="form-control">
                                <option>Page</option>
                                <option></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="SortOrder">Sort order:</label>
                            <input type="text" class="form-control" style="width:auto;" id="SortOrder" placeholder="Enter sort order">
                        </div>
                        <div class="form-group">
                            <label for="Status">Status :</label>
                            <select id="Status" class="form-control">
                                <option>Online</option>
                                <option>Offline</option>
                            </select>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div><!-- /.box -->



        </div><!--/.col (left) -->
        <!-- right column -->

        <div class="col-md-4">

            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Last 5 changed form list</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->