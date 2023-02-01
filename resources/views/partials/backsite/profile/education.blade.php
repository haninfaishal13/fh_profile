<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h5>Education:</h5>
        <button class="btn btn-primary btn-sm" id="btn-education-add">
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <hr class="mb-3">
    <form id="education-form">
        <div class="card education mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-11">
                        <div class="row mb-3">
                            <div class="col-4">
                                School:
                            </div>
                            <div class="col-8">
                                <input type="text" name="place[]" class="form-control education-place" placeholder="School/University Place">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">Major</div>
                            <div class="col-8">
                                <input type="text" name="major[]" class="form-control education-major" placeholder="Major" data-name="major">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="d-flex">
                                    Title:
                                    <input type="text" name="title[]" class="form-control ms-2 education-title" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex">
                                    Start Date:
                                    <input type="date" name="start_date[]" class="form-control education-start-date">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex">
                                    End Date:
                                    <input type="date" name="end_date[]" class="form-control education-finish-date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-primary btn-sm btn-education-remove">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
