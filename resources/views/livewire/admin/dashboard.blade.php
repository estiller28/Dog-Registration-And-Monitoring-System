<div>
    <div class="row">
        <div class="col-12 d-flex">
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
                                        <button class="btn btn-outline-dark"><i class="align-middle me-1" data-feather="eye"></i>View</button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-info"><i class="align-middle me-1" data-feather="download"></i>Export</button>
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
                                    <button class="btn btn-outline-dark"><i class="align-middle me-1" data-feather="eye"></i>View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
