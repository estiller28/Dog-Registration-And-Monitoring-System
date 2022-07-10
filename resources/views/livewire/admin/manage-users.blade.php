
<div>
    <div class="row d-flex mb-3">
        <div class="d-flex">
            <div wire:ignore>
                <a href="{{ route('user.create') }}" type="" class="btn btn-success btn-sm-block"><i class="align-middle me-2" data-feather="folder-plus"></i>Create New User</a>
            </div>
            <div class="d-flex ms-auto">
                <input id="customSearch" type="search" class="form-control mr-2" placeholder="Search">
            </div>
        </div>
    </div>
    <div wire:init="loadUsers">
        <table id="myTable" class="table table-responsive table-striped" style="width:100%">
            <thead style="background: #CFCFCF; ">
            <tr>
                <th>User ID</th>
                <th>Barangay</th>
                <th>User Name</th>
                <th>Email</th>
                <th width="10%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->barangay->barangay_name }}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                        <a href="{{ url('admin/user/edit/' . $user->id)}}" class="btn btn-sm btn-info">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

