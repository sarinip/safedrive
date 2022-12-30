@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Theory Class Management</h4>
                    <form class="form-sample" method="POST" action="{{ url('/exam/store') }}">
                        @csrf
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        @if (session()->has('error_message'))
                            <div class="alert alert-danger">
                                {{ session()->get('error_message') }}
                            </div>
                        @endif


                        <!-- <div class="row"> -->
                        <div class=" col-lg-12 grid-margin stretch-card card">
                            <div class="card-body">
                                <div class="col-md-12 text-right">
                                    <div class="form-group">
                                        <a href="{{ url('/theory-class/create') }}" class="btn btn-warning mr-2">Add Class</a>
                                    </div>
                                </div>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Instructor Name</th>
                                            <th>Class Name</th>
                                            <th>Date</th>
                                            <th>From Time</th>
                                            <th>To Time</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($classes as $class)
                                            <tr>
                                                <td>{{ $class->instructor->fname }} {{ $class->instructor->lname }}</td>
                                                <td>{{ $class->class_name }}</td>
                                                <td>{{ $class->class_date }}</td>
                                                <td>{{ $class->class_from_time }}</td>
                                                <td>{{ $class->class_to_time }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-icon-text"
                                                       href="{{ url('/theory-class/edit/'.$class->id) }}"><i
                                                            class="ti-pencil-alt"></i>
                                                        <a type="button" class="btn btn-danger btn-icon-text"
                                                           href="{{ url('/theory-class/remove/'.$class->id) }}">
                                                            <i class="ti-trash"></i>
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
