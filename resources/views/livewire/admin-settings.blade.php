<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="card">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
      <div class="card-body">
        <form wire:submit="save({{$settings->id}})">
            <!-- Content Row -->
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="app_name">Application Name</label>
                        <input type="text" class="form-control" wire:model="appname" required>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="app_name">Student ID Prefix</label>
                        <input type="text" class="form-control" wire:model="student_id_prefix" required>
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" accept="image/jpg, image/png" id="logo" wire:model="logo" class="form-control">
                    </div>
                    @error('logo')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="favicon">favicon</label>
                        <input type="file" accept="image/jpg, image/png" id="favicon" wire:model="favicon" class="form-control">
                    </div>
                    @error('favicon')
                        <small class="text-center">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="metaimage">Meta Image</label>
                        <input type="file" wire:model="meta_image" id="metaimage" class="form-control">
                    </div>
                    @error('meta_image')
                        <small class="text-center">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-4 mb-3">
                    <div class="form-group text-center">
                        <img src="@if ($logo) {{$logo->temporaryUrl()}} @else {{asset('storage/'.$settings->logo)}} @endif" alt="" height="200px" width="200px" class="border border-primary border-1">
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group text-center">
                        <img src="@if ($favicon) {{$favicon->temporaryUrl()}} @else {{asset('storage/'.$settings->favicon)}} @endif" alt="" height="200px" width="200px" class="border border-primary border-1">
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group text-center">
                        <img src="@if ($meta_image) {{$meta_image->temporaryUrl()}} @else {{asset('storage/'.$settings->meta_image)}} @endif" alt="" height="200px" width="200px" class="border border-primary border-1">
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="app_name">Copyright Text</label>
                        <input type="text" class="form-control" wire:model="copyright_text" required>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="app_name">Meta Description</label>
                        <input type="text" class="form-control" wire:model="meta_description" required>
                    </div>
                </div>

                <div class="d-grid w-100">
                    <button class="btn btn-primary w-100" type="submit"> Save</button>
                </div>
            </div>
        </form>

      </div>
    </div>


</div>

