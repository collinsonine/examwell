<div class="mt-3 mb-4 col-6 mx-auto">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <fieldset>
        <legend>Upload Question</legend>
        <div class="form-group">
            <form wire:submit="saveCourse">
            <div class="input-group mb-3">
                <input type="file" class="form-control" aria-describedby="button-addon2" required>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Upload</button>
                </div>
            </div>
            </form>
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </fieldset>
</div>
