@extends('layouts.main')


@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><b>Register Dogs</b></h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex">
                        <div>
                            <div class="card-title mb-0">
                                <h4>Add Dog Record
                                </h4>
                            </div>
                        </div>
                        <div class="d-flex ms-auto">
                            <a href="{{ route('dogs.index') }}" class="btn btn-primary" ><i class="align-middle me-1" data-feather="arrow-left"></i>Back</a>
                        </div>
                    </div>
                </div>
                {{--                <div class="card-body">--}}
                {{--                    <div class="row g-5 justify-content-between px-lg-2">--}}
                {{--                        <div class="col-md-4 mb-4">--}}
                {{--                            <div id="placeholder" class="col-md-12 mb-3">--}}
                {{--                                <img class="img-fluid" src="{{ asset('./storage/logo/dog-placeholder.jpg') }}">--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-12">--}}
                {{--                                <div id="img-preview"></div>--}}
                {{--                            </div>--}}
                {{--                            <label for="validationCustom01" class="form-label">Select image</label>--}}
                {{--                            <input class="form-control" type="file"  accept="image/jpeg" id="image" name="dog_img">--}}
                {{--                        </div>--}}
                {{--                        <div class="col-md-8">--}}
                {{--                            <div class="row justify-content-center">--}}
                {{--                                <div class="col-md-6 mb-4 border-">--}}
                {{--                                    <h4 class="mb-4"><strong>1. Dog Information</strong></h4>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Dog Name</label>--}}
                {{--                                        <input type="text" name="name" class="form-control"  required aria-describedby="validationServer03Feedback">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Origin</label>--}}
                {{--                                        <select class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" required>--}}
                {{--                                            <option selected>-select origin-</option>--}}
                {{--                                            <option value="">Local</option>--}}
                {{--                                            <option value="">Other Place</option>--}}
                {{--                                        </select>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Breed</label>--}}
                {{--                                        <select class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" required>--}}
                {{--                                            <option selected>-select breed-</option>--}}
                {{--                                            <option value="">Pure</option>--}}
                {{--                                            <option value="">Mongreal/Mixed Native</option>--}}
                {{--                                        </select>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Fur Color</label>--}}
                {{--                                        <input type="text" name="name" class="form-control"  required aria-describedby="validationServer03Feedback">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Age</label>--}}
                {{--                                        <input type="text" name="name" class="form-control"  required aria-describedby="validationServer03Feedback">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Sex</label>--}}
                {{--                                        <select class="form-select" id="selectSex" aria-describedby="validationServer04Feedback" required>--}}
                {{--                                            <option selected>-select sex-</option>--}}
                {{--                                            <option value="1">Male</option>--}}
                {{--                                            <option value="2">Female</option>--}}
                {{--                                        </select>--}}
                {{--                                    </div>--}}
                {{--                                    <div id="female" class="mb-3">--}}
                {{--                                        <div class="form-check">--}}
                {{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
                {{--                                            <label class="form-check-label" for="flexCheckDefault">--}}
                {{--                                                Spayed (Ligate)--}}
                {{--                                            </label>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="form-check">--}}
                {{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">--}}
                {{--                                            <label class="form-check-label" for="flexCheckChecked">--}}
                {{--                                                Infact--}}
                {{--                                            </label>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}

                {{--                                    <div id="male" class="mb-3">--}}
                {{--                                        <div class="form-check">--}}
                {{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
                {{--                                            <label class="form-check-label" for="flexCheckDefault">--}}
                {{--                                                Castracted (Capon)--}}
                {{--                                            </label>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="form-check">--}}
                {{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">--}}
                {{--                                            <label class="form-check-label" for="flexCheckChecked">--}}
                {{--                                                Infact--}}
                {{--                                            </label>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}

                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Vaccines Taken</label>--}}
                {{--                                        <input type="text" name="name" class="form-control"  required aria-describedby="validationServer03Feedback">--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-md-6">--}}
                {{--                                    <h4 class="mb-4"><strong>2. Owner Information</strong></h4>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Owner Name</label>--}}
                {{--                                        <input type="text" name="name" class="form-control"  required aria-describedby="validationServer03Feedback">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Contact Number</label>--}}
                {{--                                        <input type="number" name="name" class="form-control" placeholder="099*****" required aria-describedby="validationServer03Feedback">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-3">--}}
                {{--                                        <label for="validationCustom02" class="form-label">Barangay</label>--}}
                {{--                                        <select class="form-select" id="selectSex" aria-describedby="validationServer04Feedback" required>--}}
                {{--                                            <option selected>-select barangay-</option>--}}
                {{--                                            <option></option>--}}
                {{--                                        </select>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="d-flex justify-content-between px-lg-2">--}}
                {{--                        <div class="mr-2"></div>--}}
                {{--                        <div class="d-flex gap-2">--}}
                {{--                            <button type="submit"  class="btn btn-outline-secondary btn-sm-block"><i class="align-middle me-1" data-feather="x"></i>Cancel</button>--}}
                {{--                            <button type="submit"  class="btn btn-success btn-sm-block"><i class="align-middle me-1" data-feather="folder-plus"></i>Register</button>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                @livewire('create-dogs-form')
            </div>
        </div>
    </div>


    @push('js')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function (){
                $('#male').hide();
                $('#female').hide();

                $('#selectSex').on('change', function (){
                    if(this.value == 'Male'){
                        $('#male').show();
                        $('#female').hide();
                    }else if(this.value == 'Female'){
                        $('#male').hide();
                        $('#female').show();
                    }else{
                        $('#male').hide();
                        $('#female').hide();
                    }
                })
            })
        </script>

        <script>

            const chooseFile = document.getElementById("image");
            const imgPreview = document.getElementById("img-preview");
            const placeHolder = document.getElementById("placeholder");

            chooseFile.addEventListener("change", function () {
                getImgData();
            });

            function getImgData() {
                const files = chooseFile.files[0];
                if (files) {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(files);
                    fileReader.addEventListener("load", function () {
                        imgPreview.style.maxWidth = "100%";
                        imgPreview.style.height = "auto";
                        imgPreview.style.display = "block";
                        placeHolder.style.display = "none";
                        imgPreview.innerHTML = '<img src="' + this.result + '" />';
                    });
                }
            }
        </script>


    @endpush

    <style>
        .preview{
            display: block;
        }
        #img-preview {
            display: none;
            width: 500px;
            border: 4px dashed #3B7DDD;
            margin-bottom: 20px;
        }
        #img-preview img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>


@endsection
