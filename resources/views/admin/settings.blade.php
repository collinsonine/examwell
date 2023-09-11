@extends('layouts.admin')
@section('title')
 Settings
@endsection

@section('content')
    @livewire('admin-settings', ['lazy' => true])
@endsection
