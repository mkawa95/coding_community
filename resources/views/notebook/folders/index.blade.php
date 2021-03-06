<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/21/19
 * Time: 7:20 PM
 */
?>
@extends('layouts.app')

@section('content')
    <style>
        .card{
            box-shadow: 1px 3px 3px 1px #c1c5cc;
        }
    </style>
    @include('notebook.folders.modal')
    <div class="col-md-10" style="margin: 0 auto">
        @if($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $message }}
            </div>
        @endif
        <div class="card mb-3" style="padding: 0; box-shadow: 0 1px 2px 0 #CCD1D1; border-top: 1px solid whitesmoke">
            <div class="card-header card_head" style="background-color: #FBFCFC; border: none; ">
                <div class="">
                    <i class="header-icon fa fa-book mr-3 text-muted opacity-6" style="font-size: small"> </i>
                    My Notebook
                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown"  style="margin-right: 10px">
                        <a  id="create_category">
                            <button class="btn add_folder">
                                <i class="fa fa-plus"></i> New Category
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" id="" style="margin-top: 1px">
                <div class="col-md-12">
                    <div class="row" style="padding: 0 auto" id="notebook_body">
                        @foreach($folders as $folder)
                            <div class="col-md-3" >
                                <a href="{{ url('folders', ['id' => $folder->id]) }}" class="category_link" data-id="{{ $folder->id }}">
                                    <div class="row" style="padding: 10px 15px 10px 0">
                                        <div class="col-md-12 category_box">
                                            <h4>
                                                <i class="fa fa-folder" style="color: {{ $folder->folder_color }}">
                                                </i>
                                                {{ $folder->folder_name }}
                                            </h4>
                                            <label>
                                                <i class="fa fa-pencil-square-o"></i> 201 Notes
                                            </label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

