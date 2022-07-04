<div>
    <div class="col-md-12 mb-5">
        <form wire:submit.prevent="searchDogs">
            <div class="d-flex">
                <div class="input-group input-group-lg">
                    <input wire:model="idNumber" type="text" class="form-control"
                        aria-label="search dogs" placeholder="Enter Dog Trace Number"  required   >
                    <button type="submit" class="btn btn-lg btn-success">Search <span><i class='bx bx-search-alt-2'></i></span></button>
                </div>
            </div>
        </form>
    </div>

    <div wire:loading wire:target="searchDogs" class="mt-2 mb-3">
        <span class="badge bg-danger text-lg">Loading...</span>
    </div>

    <div class="row">
        @if($dogInfo)
            @forelse($dogInfo as $dog)
                <div class="col-md-5 px-4 py-4" style="box-shadow: 0px 0px 12px 0px rgb(34 34 34 / 7%);">
                    <h4 class="mb-4"><strong>Dog Profile</strong></h4>
                    <img class="img-fluid" src="{{ asset('/storage/'. $dog->dog_image)  }}" alt="No-Image">
                </div>

                <div class="col-md-7 px-4 py-4" style="box-shadow: 0px 0px 12px 0px rgb(34 34 34 / 7%);">
                    <h5 class="mb-4 mt-2"><strong>Dog Information</strong></h5>
                    <div class="col-md-9 d-flex justify-content-between ">
                        <div class="col-6">
                            <h6>ID Number:</h6>
                            <h6>Dog Name:</h6>
                            <h6>Fur Color:</h6>
                            <h6 class="mb-5">Sex:</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="text-green">{{ $dog->id_number }}</h6>
                            <h6 class="text-green">{{ $dog->dog_name }}</h6>
                            <h6 class="text-green">{{ $dog->color }}</h6>
                            <h6 class="text-green">{{ $dog->sex }}</h6>
                        </div>
                    </div>

                    <h5 class="mb-4 mt-2"><strong>Owners Information</strong></h5>
                    <div class="col-md-9 d-flex justify-content-between">
                        <div class="col-6">
                            <h6>Owner Name:</h6>
                            <h6>Contact Number:</h6>
                            <h6>Address:</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="text-green">{{ $dog->owner_name }}</h6>
                            <h6 class="text-green">{{ $dog->contact_number }}</h6>
                            <h6 class="text-green">{{ $dog->barangay->barangay_name }}</h6>
                        </div>
                    </div>
                </div>

            @empty
                <p>No Data</p>
            @endforelse
        @endif
    </div>
</div>
