<div wire:init="userProfile">
    <div class="card-body">
        <div class="col-md-6 col-lg-3">
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
                        <input type="text" wire:model.debounce.500ms="email" class="form-control @error('email') is-invalid @enderror" required aria-describedby="validationServer03Feedback">
                        <button type="submit" class="btn btn-success" >Save</button>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>

            <div class="mb-5">
                <label for="validationCustom02" class="form-label">New Password</label>
                <div class="input-group">
                    <input type="password" wire:model.debounce.500ms="password" class="form-control @error('password') is-invalid @enderror" placeholder="Input new password"  required aria-describedby="validationServer03Feedback">
                    <button wire:click="confirmUpdatePassword" class="btn btn-success" >Save</button>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
