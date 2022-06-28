<div>
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="d-flex">
                    <div>
                        <div class="card-title mb-0">
                            <h4> Registered Dogs
                            </h4>
                        </div>
                    </div>
                    <div class="d-flex ms-auto">
                        <input id="customSearch" type="search" class="form-control mr-2" placeholder="Enter Dog ID number">
                        <button class="btn btn-primary" href=""><i class="align-middle me-1" data-feather="search"></i></button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form>
                    <div class="row d-flex mb-3">
                        <div class="col-md-3 col-xs-3">
                            <select class="form-control select2" name="barangay" id="" style="width: 100%;" required>
                                <option selected="selected" value="">Select Barangay</option>
                                <option value="1">Aquino</option>
                            </select>
                        </div>
                        <div class="col-md-9">

                            <button type="submit"  class="btn btn-primary btn-sm-block"><i class="align-middle me-1" data-feather="filter"></i>Apply Filter</button>

                            <a href="{{ route('dogs.create') }}" class="btn btn-success btn-sm-block"><i class="align-middle me-2" data-feather="folder-plus"></i>Register Dogs</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
