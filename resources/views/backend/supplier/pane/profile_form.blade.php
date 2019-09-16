<form method="post" action="{{ url('admin/suppliers/profile') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="supplier_id" value="{{ $supplier->id }}">
    <div class="row mb-2">
        <div class="col-auto">
            @if($supplier->avatar_path !==null)
                <img class="avatar brround avatar-xl" src="{{ asset($supplier->avatar_path) }}" alt="Avatar-img">
            @endif
        </div>

        <div class="col">
            <h3 class="mb-1 ">{{ $supplier->name }}</h3>
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
        <input class="form-control" type="text" name="supplier[contact_person]" value="{{ $supplier->contact_person }}" required placeholder="your name"/>
    </div>
    <div class="form-group">
        <label class="form-label">Contact Email</label>
        <input class="form-control" type="email" name="supplier[contact_email]" value="{{ $supplier->contact_email }}" required placeholder="your-email@domain.com"/>
    </div>
    <div class="form-group">
        <label class="form-label">Contact Number</label>
        <input class="form-control" type="number" name="supplier[contact_number]" value="{{ $supplier->contact_number }}" required placeholder="01 2456 0512"/>
    </div>
    <div class="form-group">
        <label class="form-label">Contact Info</label>
        <textarea class="form-control" rows="5" name="supplier[contact_info]">{!!$supplier->contact_info!!}</textarea>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary btn-block">Save</button>
    </div>
</form>
