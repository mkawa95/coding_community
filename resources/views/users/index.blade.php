<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/12/19
 * Time: 11:34 PM
 */
?>

@extends('layouts.app')

@section('content')
    <div class="col-md-11" style="margin: 0 auto">
        @if($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $message }}
            </div>
        @endif
        <div class="card mb-3" style="padding: 15px">


            <div class="card-header-tab card-header" style=" border-bottom: 1px solid cadetblue">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon fa fa-users mr-3 text-muted opacity-6" style="font-size: small"> </i>
                    Users
                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown"  style="margin-right: 10px">
                        <a href="#">
                            <button class="btn btn-dark">
                                <i class="fa fa-plus-circle"></i> Create New User
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" style="; border-top: 1px solid cadetblue; margin-top: 1px">
                <table style="width: 100%; font-size: small" id="example" class="table table-sm table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>gender</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->pgone_number }}</td>
                            <td>{{ $user->gender}}</td>
                            <td>
                                <a class="#" href="#" style="text-decoration: none">
                                    <button class="btn btn-info btn-sm" style="padding: 0 4px"
                                            title="CLick here to view more details">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>

                                <a class="#" href="#" style="text-decoration: none">
                                    <button class="btn btn-success btn-sm" style="padding: 0 4px"
                                            title="Click here to edit this category">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>

                                <a class="#" href="#" style="text-decoration: none">
                                    <button class="btn btn-danger btn-sm" style="padding: 0 4px"
                                            title="Click here to delete category">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

