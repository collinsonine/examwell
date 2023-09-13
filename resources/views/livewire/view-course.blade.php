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
                        @forelse ($questions as $question)

                        @empty
                            <tr>
                                <th class="text-center" colspan="4">Sorry, No Questions for this course</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>



            </div>
            <div class="d-flex justify-content-center">
                {{$questions->links()}}
            </div>
        </div>
    </div>
    </div>
