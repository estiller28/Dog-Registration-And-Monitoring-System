<div>
    <div class="card-body">
        <form wire:submit.prevent="create" class=" needs-validation" novalidate>
            <div class="row g-5 justify-content-between px-lg-2">
                <div class="col-md-4 mb-4">
                    <div wire:ignore id="placeholder" class="col-md-12 mb-3">
                        <img class="img-fluid" src="{{ asset('./storage/logo/dog-placeholder.jpg') }}">
                    </div>
                    <div wire:ignore class="col-md-12">
                        <div id="img-preview"></div>
                    </div>
                    <label for="dog_image" class="form-label">Select image</label>
                    <input wire:model="dog_image" class="form-control @error('dog_image') is-invalid @enderror" type="file"  accept="image/jpeg" id="image" name="dog_img">
                    @error('dog_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4 border-">
                            <h4 class="mb-4"><strong>1. Dog Information</strong></h4>
                            <div class="mb-3">
                                <label for="dog_image" class="form-label">Dog Name</label>
                                <input type="text" wire:model="dog_name" class="form-control  @error('dog_name') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                                @error('dog_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="origin" class="form-label">Origin</label>
                                <select wire:model="origin" class="form-select @error('origin') is-invalid @enderror" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                    <option selected="selected" value="">-select origin-</option>
                                    <option value="Local">Local</option>
                                    <option value="Other Place">Other Place</option>
                                </select>
                                @error('origin')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="breed" class="form-label">Breed</label>
                                <select wire:model="breed" class="form-select @error('breed') is-invalid @enderror" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                    <option selected value="">-select breed-</option>
                                    <option value="Pure">Pure</option>
                                    <option value="Mongreal/Mixed Native">Mongreal/Mixed Native</option>
                                </select>
                                @error('breed')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="color" class="form-label">Fur Color</label>
                                <input wire:model="color" type="text" class="form-control @error('color') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                                @error('color')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Age</label>
                                <input wire:model="age" type="text" class="form-control @error('age') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                                @error('age')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sex" class="form-label">Sex</label>
                                <select wire:model="sex" class="form-select @error('sex') is-invalid @enderror" id="selectSex" aria-describedby="validationServer04Feedback" required>
                                    <option selected="selected" value="">-select sex-</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('sex')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div wire:ignore id="female" class="mb-3">
                                <label for="sex_description" class="form-label">Sex Description</label>
                                <select wire:model="sex_description" class="form-select @error('sex_description') is-invalid @enderror" id="selectSex" aria-describedby="validationServer04Feedback" required>
                                    <option value="Spayed (Ligate)">Spayed (Ligate)</option>
                                    <option value="Infact">Infact</option>
                                </select>
                                @error('sex_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div wire:ignore id="male" class="mb-3">

                                <label for="sex_description" class="form-label">Sex Description</label>
                                <select wire:model="sex_description" class="form-select @error('sex_description') is-invalid @enderror" id="selectSex" aria-describedby="validationServer04Feedback" required>
                                    <option value=" Castracted (Capon)"> Castracted (Capon)</option>
                                    <option value="Infact">Infact</option>
                                </select>
                                @error('sex_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="vaccines_taken" class="form-label">Vaccines Taken</label>
                                <input wire:model="vaccines_taken" type="text"  class="form-control @error('vaccines_taken') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                                @error('vaccines_taken')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4"><strong>2. Owner Information</strong></h4>
                            <div class="mb-3">
                                <label for="owner_name" class="form-label">Owner Name</label>
                                <input wire:model="owner_name"  type="text" name="name" class="form-control @error('owner_name') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                                @error('owner_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <input wire:model="contact_number"  type="number" name="name" class="form-control  @error('contact_number') is-invalid @enderror" placeholder="+63" required aria-describedby="validationServer03Feedback">
                                @error('contact_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="barangay" class="form-label">Barangay</label>
                                <select wire:model="barangay" class="form-select @error('barangay') is-invalid @enderror"  aria-describedby="validationServer04Feedback" required>
                                    <option selected="selected" value="">-select barangay-</option>
                                    @foreach($barangays as $barangay)
                                        <option value="{{ $barangay->id }}">{{ $barangay->barangay_name }}</option>
                                    @endforeach
                                </select>

                                @error('barangay')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="currentPurok" class="form-label">Purok</label>
                                <input wire:model="purok" type="text" class="form-control @error('purok') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                                @error('purok')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between px-lg-2">
                <div class="mr-2"></div>
                <div class="d-flex gap-2">
                    <a href="{{ route('dogs.index') }}" type="submit"  class="btn btn-light btn-sm-block">Cancel</a>
                    <button type="submit"  class="btn btn-primary btn-sm-block">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
