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
                            <label for="ImageName">Image name:</label>
                            <input type="text" class="form-control" id="ImageName" placeholder="Enter image name">
                        </div>
                        <div class="form-group">
                            <label for="ImageFile">Image:</label>
                            <input id="ImageFile" type="file">
                            <p class="help-block">image types</p>
                        </div>
                        <div class="form-group">
                            <label for="ImageSortOrder">Image Sort order:</label>
                            <input type="text" class="form-control" style="width:auto;" id="ImageSortOrder" placeholder="Enter news sort order">
                        </div>
                        <div class="form-group">
                            <label for="ImageStatus">Status :</label>
                            <select id="ImageStatus" class="form-control">
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
                    <h3 class="box-title">Last 5 changed image list</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->