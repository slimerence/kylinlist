@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Edit Profile</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>

            </div>
            <div class="row ">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contact Person</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('supplier/profile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        @if($user->supplier->avatar_path !==null)
                                        <img class="avatar brround avatar-xl" src="{{ asset($user->supplier->avatar_path) }}" alt="Avatar-img">
                                        @endif
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-1 ">{{ $user->supplier->name }}</h3>
                                        <p class="mb-4 ">{{ $user->name }}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="supplier[avatar_path]">
                                        <label class="custom-file-label">Upload New Avatar</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Name</label>
                                    <input class="form-control" type="text" name="supplier[contact_person]" value="{{ $user->supplier->contact_person }}" required placeholder="your name"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Email</label>
                                    <input class="form-control" type="email" name="supplier[contact_email]" value="{{ $user->supplier->contact_email }}" required placeholder="your-email@domain.com"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input class="form-control" type="number" name="supplier[contact_number]" value="{{ $user->supplier->contact_number }}" required placeholder="01 2456 0512"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Info</label>
                                    <textarea class="form-control" rows="5" name="supplier[contact_info]">{!!$user->supplier->contact_info!!}</textarea>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Company</label>
                                        <input type="text" name="supplier[name]" class="form-control"  placeholder="Company" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Website(Optional)</label>
                                        <input type="text" name="supplier[link]" class="form-control" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address Line 1</label>
                                        <input type="text" name="supplier[street]" class="form-control" placeholder="Home Address" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address Line 2</label>
                                        <input type="text" name="supplier[street2]" class="form-control" placeholder="Home Address" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" name="supplier[city]" class="form-control" placeholder="City" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <input type="text" name="supplier[state]" class="form-control" placeholder="City" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="number" name="supplier[post]" class="form-control" placeholder="Post">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select class="form-control custom-select" name="supplier[country]">
                                            <option value="Australia" selected>Australia</option>
                                            <option value="China">China</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label class="form-label" name="supplier[description]">About Me</label>
                                        <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add  projects And Upload</h3>

                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td><a href="store.html" class="text-inherit">Untrammelled prevents </a></td>
                                    <td>28 May 2019</td>
                                    <td><span class="status-icon bg-success"></span> Completed</td>
                                    <td>$56,908</td>
                                    <td class="text-right">
                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                                    <td>12 June 2019</td>
                                    <td><span class="status-icon bg-danger"></span> On going</td>
                                    <td>$45,087</td>
                                    <td class="text-right">
                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                                    <td>12 July 2019</td>
                                    <td><span class="status-icon bg-warning"></span> Pending</td>
                                    <td>$60,123</td>
                                    <td class="text-right">
                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                                    <td>14 June 2019</td>
                                    <td><span class="status-icon bg-warning"></span> Pending</td>
                                    <td>$70,435</td>
                                    <td class="text-right">
                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                                    <td>25 June 2019</td>
                                    <td><span class="status-icon bg-success"></span> Completed</td>
                                    <td>$15,987</td>
                                    <td class="text-right">
                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                                        <a class="icon" href="javascript:void(0)"></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
