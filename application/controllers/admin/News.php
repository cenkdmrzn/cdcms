<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->subLayoutFolder = "admin";
        $this->moduleFolder = 'news';

    }

    public function index()
    {
        $this->tmpFile = "list";
        $param['page_title'] = 'News List';

        $param['metaData']['jsFiles'] = array(
            'plugins/datatables/jquery.dataTables.min.js',
            'plugins/datatables/dataTables.bootstrap.min.js'
        );

        $param['metaData']['InlineScripts'] = array(
            '$(function () {
                $("#example1").DataTable();
                $("#example2").DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });'
        );


        $this->render($param);
    }

    public  function add()
    {
        $this->tmpFile = "add";
        $param['page_title'] = 'Add News';
        $this->render($param);
    }

    public function edit($id)
    {
        $this->tmpFile = "edit";
        $param['page_title'] = 'Edit News';
        $this->render($param);
    }

    public  function delete($id)
    {
        $param['page_title'] = 'Delete Form';
        $this->render($param);
    }

}
