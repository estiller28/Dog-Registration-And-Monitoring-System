@extends('layouts.main')


@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Create New User</h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex">
                        <div>
                            <div class="card-title mb-0">
                                <h4>Add User
                                </h4>
                            </div>
                        </div>
                        <div class="d-flex ms-auto">
                            <a href="{{ route('users.store') }}" class="btn btn-primary" ><i class="align-middle me-1" data-feather="arrow-left"></i>Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-5 col-lg-3">
                        <form class="row needs-validation" novalidate action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Barangay Name</label>
                                <input type="text" name="barangay" value="{{old('barangay')}}" class="form-control  @error('barangay') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">

                                @if($errors->has('barangay'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('barangay') }}
                                    </div>
                                @else
                                    <div class="invalid-feedback">
                                        Barangay name is required
                                    </div>
                                @endif

                            </div>
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  required aria-describedby="validationServer03Feedback">
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @else
                                    <div class="invalid-feedback">
                                       Name is required
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control"  required aria-describedby="validationServer03Feedback">
                                <div class="invalid-feedback">
                                    Email is required
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"  required aria-describedby="validationServer03Feedback">
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control" required aria-describedby="validationServer03Feedback">
                                <div class="invalid-feedback">
                                    Password confirmation is required
                                </div>
                            </div>
                            <div class="mb-3 mt-2">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-outline-danger"><i class="align-middle me-1" data-feather="slash"></i>Cancel</a>
                                    <button type="submit" class="btn btn-success"><i class="align-middle me-1" data-feather="save"></i>Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('dist/js/validation.js') }}"></script>
    @endpush

@endsection
