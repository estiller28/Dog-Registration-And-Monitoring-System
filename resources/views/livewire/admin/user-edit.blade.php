<div>
    <div class="card-body">
        <div class="col-md-6 col-lg-4">
            <form wire:submit.prevent="updateBarangay" class="row needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Barangay Name</label>
                    <div class="input-group">
                        <input type="text" wire:model="barangay_name" class="form-control  @error('barangay_name') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                        <button type="submit" class="btn btn-success" >Save</button>
                        @error('barangay_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>

            <form wire:submit.prevent="updateName" class="row needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Name</label>
                    <div class="input-group">
                        <input type="text" wire:model.debounce.500ms="name" class="form-control @error('name') is-invalid @enderror" required aria-describedby="validationServer03Feedback">
                        <button type="submit" class="btn btn-success" >Save</button>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>

            <form wire:submit.prevent="updateEmail" class="row needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" wire:model.debounce.500ms="email" class="form-control @error('email') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                        <button type="submit" class="btn btn-success" >Save</button>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>

            <form wire:submit.prevent="updatePassword" class="row needs-validation" novalidate>
                <label for="validationCustom02" class="form-label"> Password</label>
                <div class="input-group mb-3 d-flex">
                    <input type="password" wire:model.debounce.500ms="password" class="form-control @error('password') is-invalid @enderror" placeholder="Input new password"  required aria-describedby="validationServer03Feedback">
                    <input type="password" wire:model.debounce.500ms="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror" placeholder="Confirm password">
                    <button type="submit" class="btn btn-success" >Save</button>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </form>
            <div class="mb-3"></div>
        </div>
    </div>
</div>
