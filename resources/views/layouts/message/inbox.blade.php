<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <div class="card-body p-0 border">
                    <div class="list-group list-group-transparent mb-0 mail-inbox">
                        <div class="mt-4 mb-4 ml-4 mr-4 text-center">
                            <a href="email.html" class="btn btn-primary btn-lg btn-block">Compose</a>
                        </div>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active text-white">
                            <span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-success">14</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <span class="icon mr-3"><i class="fe fe-alert-circle"></i></span>Important <span class="ml-auto badge badge-danger">3</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <span class="icon mr-3"><i class="fe fe-star"></i></span>Starred
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <span class="icon mr-3"><i class="fe fe-file"></i></span>Drafts
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <span class="icon mr-3"><i class="fe fe-trash-2"></i></span>Trash
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="">
                    <div class="card-body p-6 border">
                        <div class="inbox-body">
                            <div class="table-responsive">
                                <table class="table table-inbox table-hover data-table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Attachment</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" checked class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message  dont-show">John Kribo</td>
                                        <td class="view-message "><strong>Commits pushed</strong> Consectetur adipisicing elit...</td>
                                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message  text-right">9:27 AM</td>
                                        <td class="view-message  text-right">
                                            <div class="btn-list">
                                                <a href="{{ url('admin/category/delete/') }}" class="btn btn-primary"><i class="fe fe-trash mr-2"></i>Delete</a>
                                                <a href="{{ url('admin/category/edit/') }}" class="btn btn-danger"><i class="fe fe-play mr-2"></i>Edit</a>
                                            </div>
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
    </div>
</div>
