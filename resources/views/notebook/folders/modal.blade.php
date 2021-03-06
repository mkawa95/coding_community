<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/21/19
 * Time: 8:54 PM
 */
?>
<style>
    .team-column h1{
        font-size: medium;
        font-weight: bold;
    }
    .event-schedule h4{
        text-align: left;
        font-size: medium;
        padding: 0;
        color: #D61069;
        font-weight: bold;
    }
    .modal-header{
        padding: 5px;
    }
    .modal-header h4.modal-title{
        text-align: center;
        font-size: 14px;
        margin: 0 auto;
        font-weight: bold;
        color: #646464;
    }
    .modal-title{
        text-align: center;
        padding: 15px;
    }
    .modal-footer{
        background-color: whitesmoke;
        border-top: 1px solid #D1D1D1;
        text-align: center;
    }
    .modal-body{
        font-size: small;
        padding: 10px 40px;
    }
    .modal-body label{
        font-size: small;
        font-weight: bold;
    }
    .form-group{
        margin-top: 5px;
    }
    .form-group input.form-control{
        font-size: small;
    }
    .form-group input.form-control::placeholder{
        font-size: small;
        color: #ABB2B9;
        font-style: italic;
    }
    .form-group textarea.form-control::placeholder{
        font-size: small;
        color: #ABB2B9;
        font-style: italic;
    }
</style>
<div class="modal fade" id="ajax-crud-modal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: whitesmoke; box-shadow: 0 2px 2px 0 #D5D8DC">
                    <div class="col-md-11">
                        <h4 class="modal-title" id="userCrudModal" style="text-align: center"></h4>
                    </div>
                    <div class="col-md-1">
                        <button type="button" style="font-size: small" class="close text-danger" data-dismiss="modal">&times;</button>
                    </div>

            </div>
            <div class="modal-body">
                <form id="categoryForm" name="categoryForm" class="form-horizontal">
                    <input type="hidden" name="id" id="merchant_id">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo auth()->user()->id ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="col-sm-12">Folder Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="folder_name" name="folder_name" placeholder="Folder name e.g programming" value="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-12" for="description">Descriptions</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" required placeholder="Write something about this folder ..." name="description" rows="4" id="description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-12" for="folder_color">Choose file color</label>
                                <div class="col-sm-12">
                                    <input class="color_box" type="color" name="folder_color" value="" id="folder_color">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 15px">
                        <div class="col-sm-12">
                            <button type="submit" style="float: right; margin-left: 10px" class="btn btn-primary" id="btn-save" value="create">
                                Save Folder
                            </button>
                            <button type="button" data-dismiss="modal" style="float: right; border: 1px solid #AEB6BF" class="btn btn-white">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <small style="text-align: center; font-size: small; color: #B5B5B6; margin: 0 auto">@CodingCommunity create new folder</small>
            </div>
        </div>
    </div>
</div>

