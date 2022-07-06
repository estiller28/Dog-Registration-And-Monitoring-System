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
                            <select wire:model.defer="barangay" class="form-select">
                                <option selected="selected" value="">-Select barangay- </option>
                                @foreach($dogs as $dog)
                                    <option value="{{ $dog->id }}">{{ $dog->barangay_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-9 d-flex gap-2 flex-wrap">
                            <div><button wire:ignore type="submit"  class="btn btn-md btn-primary"><i class="align-middle me-1" data-feather="filter"></i>Apply Filter</button></div>
                            <div><a wire:ignore  href="{{ route('dogs.create') }}" class="btn btn-md btn-success btn-sm-block"><i class="align-middle me-2" data-feather="folder-plus"></i>Register Dogs</a></div>

                            @if($allDogs != null)
                                @if(!$allDogs->isEmpty())
                                <div>
                                    <button wire:click="export" wire:loading.attr="disabled" type="button" class="btn btn-md btn-info"><i class="align-middle me-1 fa-solid fa-circle-down"></i>Export</button></div>
                                <div class="d-flex ms-auto">
                                    <input id="customSearch" type="search" class="form-control mr-2" placeholder="Search">
                                </div>
                                    @endif
                            @endif
                        </div>
                    </div>
                </form>

                <div wire:loading wire:target="getDogs" class="mt-2 mb-3">
                    <span class="badge bg-danger text-lg">Loading...</span>
                </div>

                <div>
                    @if($allDogs != null)
                        <table id="dogsTable" class="table table-responsive table-striped" style="width:100%">
                            <thead style="background: #D0C9C0; ">
                            <tr>
                                <th>ID Number</th>
                                <th>Dog Image</th>
                                <th>Dog Name</th>
                                <th>Owner's Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allDogs as $dog)
                                <tr>
                                    <td>{{ $dog->id_number }}</td>
                                    @if($dog->dog_image)
                                        <td><img src="{{ asset('/storage/'. $dog->dog_image)  }}"  style="width: 50px; border-radius: 10px; height: 50px;"></td>
                                    @else
                                        <td><img class="img-fluid" src="{{ asset('./storage/logo/dog-placeholder.jpg') }}" style="width: 50px; border-radius: 10px; height: 50px;"></td>
                                    @endif

                                    <td>{{ $dog->dog_name}}</td>
                                    <td>{{ $dog->owner_name }}</td>
                                    <td>{{ $dog->contact_number }}</td>
                                    <td>{{ $dog->barangay->barangay_name }}</td>
                                    <td>
                                        <button wire:click="edit({{ $dog->id }})" class="btn btn-sm btn-info">View</button>
                                        <button wire:ignore wire:click="confirmDelete({{ $dog->id }})"  class="btn btn-sm btn-danger">Delete</button>
                                    </td>
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


