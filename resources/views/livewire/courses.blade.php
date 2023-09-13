<div class="col-10 mx-auto">
<div class="card border border-5 border-primary rounded-top border-right-0 border-left-0 border-bottom-0">
    <div class="card-body">
        <div class="card-header bg-transparent">
            <div class="col-4 mx-auto">
                <div class="input-group rounded mt-2 mb-2">
                    <input class="form-control border-right-0" wire:model.live.debounce.500ms="search">
                    <span class="input-group-append bg-white">
                        <button class="btn border border-left-0" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Number of Questions</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr wire:key="{{ $course->id }}">
                            <td>{{ $course->name }}</td>
                            <td>0</td>
                            <td>{{ \Carbon\Carbon::parse($course->created_at)->diffForHumans() }}</td>
                            <td class="text-center"><button wire:click="viewCourse({{$course->id}})" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th class="text-center" colspan="4">Sorry, No Courses in your DB</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>



        </div>
        <div class="d-flex justify-content-center">
            {{$courses->links()}}
        </div>
    </div>
</div>
</div>
