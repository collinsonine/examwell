@extends('layouts.admin')

@section('title')
    View Course
@endsection

@section('content')
@extends('layouts.admin')
@section('title')
    Courses
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Courses</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="card">

            <div class="card-body">
                @livewire('update_question')
                @livewire('view-course')
            </div>
        </div>


    </div>
@endsection

@endsection
