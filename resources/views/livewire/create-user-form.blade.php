<div>
    <div class="card-body">
        <div class="col-md-5 col-lg-3">
            <form wire:submit.prevent="CreateUser" class="row needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Barangay Name</label>
                    <input type="text" wire:model="barangay" class="form-control  @error('barangay') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                    @error('barangay')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Name</label>
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" required aria-describedby="validationServer03Feedback">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Email</label>
                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Password</label>
                    <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Confirm password</label>
                    <input type="password" wire:model="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror" required aria-describedby="validationServer03Feedback">
                    @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 mt-2">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-dark"><i class="align-middle me-1" data-feather="slash"></i>Cancel</a>
                        <button type="submit" class="btn btn-success"><i class="align-middle me-1" data-feather="save"></i>Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
