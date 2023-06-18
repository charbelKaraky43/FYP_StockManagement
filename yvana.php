<!-- Supplier -->

<!-- Single select boxes -->
<div class="m-b-15">
    <select class="select2" name="state">
        <option value="AP">Apples</option>
        <option value="NL">Nails</option>
        <option value="BN">Bananas</option>
        <option value="HL">Helicopters</option>
    </select>
</div>

<!-- Multiple select boxes -->
<div>
    <select class="select2" name="states[]" multiple="multiple">
        <option value="AP">Apples</option>
        <option value="NL">Nails</option>
        <option value="BN">Bananas</option>
        <option value="HL">Helicopters</option>
    </select>
</div>
<script>
    $('.select2').select2();
</script>


<!-- TITLE -->
<form>
    <div class="form-group">
        <label for="formGroupExampleInput">Example label</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
</form>

<!-- Table -->
<h2 class="header-title">Orders List</h2>
<div class="header-sub-title">
    <nav class="breadcrumb breadcrumb-dash">
        <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
        <a class="breadcrumb-item" href="#">Apps</a>
        <a class="breadcrumb-item" href="#">E-commerce</a>
        <span class="breadcrumb-item active">Orders List</span>
    </nav>
</div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row m-b-30">
            <div class="col-lg-8">
                <div class="d-md-flex">
                    <div class="m-b-10">
                        <select class="custom-select" style="min-width: 180px;">
                            <option selected>Status</option>
                            <option value="all">All</option>
                            <option value="approved">Approved</option>
                            <option value="pending">Pending</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-right">
                <button class="btn btn-primary">
                    <i class="anticon anticon-file-excel m-r-5"></i>
                    <span>Export</span>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover e-commerce-table">
                <thead>
                    <tr>
                        <th>
                            <div class="checkbox">
                                <input id="checkAll" type="checkbox">
                                <label for="checkAll" class="m-b-0"></label>
                            </div>
                        </th>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-1" type="checkbox">
                                <label for="check-item-1" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5331
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Erin Gonzales</h6>
                            </div>
                        </td>
                        <td>8 May 2019</td>
                        <td>$137.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>Approved</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-2" type="checkbox">
                                <label for="check-item-2" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5375
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Darryl Day</h6>
                            </div>
                        </td>
                        <td>6 May 2019</td>
                        <td>$322.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>Approved</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-3" type="checkbox">
                                <label for="check-item-3" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5362
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Marshall Nichols</h6>
                            </div>
                        </td>
                        <td>1 May 2019</td>
                        <td>$543.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>Approved</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-4" type="checkbox">
                                <label for="check-item-4" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5365
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Virgil Gonzales</h6>
                            </div>
                        </td>
                        <td>28 April 2019</td>
                        <td>$876.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-primary badge-dot m-r-10"></div>
                                <div>Pending</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-5" type="checkbox">
                                <label for="check-item-5" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5213
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Nicole Wyne</h6>
                            </div>
                        </td>
                        <td>28 April 2019</td>
                        <td>$241.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>Approved</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-6" type="checkbox">
                                <label for="check-item-6" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5311
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Riley Newman</h6>
                            </div>
                        </td>
                        <td>19 April 2019</td>
                        <td>$872.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-danger badge-dot m-r-10"></div>
                                <div>Rejected</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-7" type="checkbox">
                                <label for="check-item-7" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5387
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Pamela Wanda</h6>
                            </div>
                        </td>
                        <td>18 April 2019</td>
                        <td>$728.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>Approved</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-8" type="checkbox">
                                <label for="check-item-8" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5390
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Emily Shaw</h6>
                            </div>
                        </td>
                        <td>16 April 2019</td>
                        <td>$802.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-primary badge-dot m-r-10"></div>
                                <div>Pending</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-9" type="checkbox">
                                <label for="check-item-9" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5317
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Victor Terry</h6>
                            </div>
                        </td>
                        <td>12 April 2019</td>
                        <td>$569.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>Approved</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-10" type="checkbox">
                                <label for="check-item-10" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #5291
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-image avatar-sm m-r-10">
                                    <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                </div>
                                <h6 class="m-b-0">Wyatt Wallace</h6>
                            </div>
                        </td>
                        <td>10 April 2019</td>
                        <td>$132.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>Approved</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Basic Table -->
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Validation -->
<form id="form-validation">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label control-label">Required *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="inputRequired" placeholder="Required *">
        </div>
    </div>
</form>
<script>
    $("#form-validation").validate({
        ignore: ':hidden:not(:checkbox)',
        errorElement: 'label',
        errorClass: 'is-invalid',
        validClass: 'is-valid',
        rules: {
            inputRequired: {
                required: true
            },
            inputMinLength: {
                required: true,
                minlength: 6
            },
            inputMaxLength: {
                required: true,
                minlength: 8
            },
            inputUrl: {
                required: true,
                url: true
            },
            inputRangeLength: {
                required: true,
                rangelength: [2, 6]
            },
            inputMinValue: {
                required: true,
                min: 8
            },
            inputMaxValue: {
                required: true,
                max: 6
            },
            inputRangeValue: {
                required: true,
                max: 6,
                range: [6, 12]
            },
            inputEmail: {
                required: true,
                email: true
            },
            inputPassword: {
                required: true
            },
            inputPasswordConfirm: {
                required: true,
                equalTo: '#password'
            },
            inputDigit: {
                required: true,
                digits: true
            },
            inputValidCheckbox: {
                required: true
            }
        }
    });
</script>
<!-- Button -->
<button class="btn btn-primary btn-tone m-r-5">Primary</button>
<button class="btn btn-success m-r-5">Success</button>