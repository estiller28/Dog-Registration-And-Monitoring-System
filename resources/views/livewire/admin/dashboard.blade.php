<div>
    <div class="row">
        <div wire:ignore class="col-12 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Dog Registered</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="grid"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $dogRegistered }}</h1>
                                <div class="row">
                                    <div class="col mb-0">
                                        <a href="{{ route('dogs.index') }}" class="btn btn-light"><i class="align-middle me-1" data-feather="eye"></i>View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Number of Users</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $allUsers }}</h1>
                                <div class="mb-0">
                                    <a href="{{ route('users.index') }}" class="btn btn-light"><i class="align-middle me-1" data-feather="eye"></i>View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex">
                        <div wire:init="loadDogs" class="card flex-fill ">
                            <div class="card-header my-0">
                                <div class="card-actions float-end">
                                    <div class="dropdown position-relative">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="align-middle" data-feather="more-horizontal"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('dogs.index') }}" class="dropdown-item" href="#">View all dogs</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">Recently Added Dogs</h5>
                            </div>
                            <div class="card-body p-2">
                                <table class="table table-borderless my-0">
                                    <thead>
                                    <tr>
                                        <th>Dog Name</th>
                                        <th class="d-none d-xxl-table-cell">Date Registered</th>
                                        <th class="d-none d-xxl-table-cell">Owner Name</th>
                                        <th>Address</th>
                                        <th class="d-none d-xl-table-cell">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($recentlyAdded as $dog)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="bg-light rounded-2">
                                                            @if($dog->dog_image === null)
                                                                <img class="img-fluid" src="{{ asset('./storage/logo/dog-placeholder.jpg') }}" style="width: 45px; border-radius: 10px; height: 45px;">
                                                            @else
                                                                <img src="{{ asset('/storage/'. $dog->dog_image)  }}"  style="width: 50px; border-radius: 10px; height: 50px;">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <strong>{{ $dog->dog_name }}</strong>
                                                        <div class="text-success">
                                                            {{$dog->sex}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="d-none d-xxl-table-cell">
                                                <strong>{{ Carbon\Carbon::parse($dog->created_at)->toFormattedDateString() }}</strong>
                                            </td>
                                            <td class="d-none d-xl-table-cell">
                                                <strong>{{ $dog->owner_name }}</strong>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100">
                                                    <span class="me-2 mb-1 text-muted">{{ $dog->barangay->barangay_name }}</span>
                                                    <div class="progress progress-sm bg-primary-light w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="d-none d-xl-table-cell">
                                                <a href="{{ url('admin/dog/edit/'. $dog->id) }}" class="btn btn-light">View</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-danger" colspan="10"> No data available</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
