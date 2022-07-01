<div>
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="d-flex">
                    <div>
                        <div class="card-title mb-0">
                            <h4> <span class="badge bg-success text-lg">{{ $count }}</span> Registered Dogs</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="getDogs">
                    <div class="row d-flex mb-3">
                        <div wire:ignore class="col-md-3 col-xs-3" >
                            <select wire:model.defer="users" class="form-select">
                                <option selected="selected" value="">-Select barangay- </option>
                                @foreach($dogs as $dog)
                                    <option value="{{ $dog->id }}">{{ $dog->barangay_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-9 d-flex gap-2 flex-wrap">
                            <div><button wire:ignore type="submit"  class="btn btn-md btn-primary"><i class="align-middle me-1" data-feather="filter"></i>Apply Filter</button></div>
                            <div><a wire:ignore  href="{{ route('dogs.create') }}" class="btn btn-md btn-success btn-sm-block"><i class="align-middle me-2" data-feather="folder-plus"></i>Register Dogs</a></div>

                            @if($allUsers != null)
                            <div wire:ignore><a  class="btn btn-md btn-info"><i class="align-middle me-1" data-feather="filter"></i>Export</a></div>
                                <div class="d-flex ms-auto">
                                    <input id="customSearch" type="search" class="form-control mr-2" placeholder="Search">
                                </div>
                            @endif
                        </div>
                    </div>
                </form>

                <div>
                    @if($allUsers != null)
                        <table id="dogsTable" class="table table-responsive table-striped" style="width:100%">
                            <thead style="background: #D0C9C0; ">
                            <tr>
                                <th>User ID</th>
                                <th>Barangay</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allUsers as $i)
                                <tr>
                                    <td>{{ $i->id }}</td>
                                    <td>{{ $i->barangay->barangay_name }}</td>
                                    <td>{{ $i->name }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


