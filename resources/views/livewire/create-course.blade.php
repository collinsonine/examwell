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
        <legend>Create Course</legend>
        <div class="form-group">
            <form wire:submit="saveCourse">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="button-addon2" wire:model="name">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Create</button>
                </div>
            </div>
            </form>
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </fieldset>
</div>
