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
                    <label for="PageName">Page name:</label>
                    <input type="text" class="form-control" id="PageName" placeholder="Enter page name">
                </div>
                <div class="form-group">
                    <label for="PageContent">Content:</label>
                    <textarea placeholder="Enter page content" rows="3" class="form-control" id="PageContent"></textarea>
                </div>
                <div class="form-group">
                    <label for="PageTitle">Page title:</label>
                    <input type="text" class="form-control" id="PageTitle" placeholder="Enter page title">
                </div>
                <div class="form-group">
                    <label for="PageDesc">Page description:</label>
                    <textarea placeholder="Enter page description" rows="3" class="form-control" id="PageDesc"></textarea>
                </div>
                <div class="form-group">
                    <label for="PageSortOrder">Sort order:</label>
                    <input type="text" class="form-control" style="width:auto;" id="PageSortOrder" placeholder="Enter page sort order">
                </div>
                <div class="form-group">
                    <label for="PageStatus">Status :</label>
                    <select id="PageStatus" class="form-control">
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
            <h3 class="box-title">Last 5 changed page list</h3>
        </div><!-- /.box-header -->
        <div class="box-body">

        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->