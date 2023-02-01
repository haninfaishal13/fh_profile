<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h5>Link:</h5>
        <button class="btn btn-primary btn-sm" id="btn-repo-add">
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <hr class="mb-3">
    <form id="link-form">
        <div class="card repo mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <div class="row mb-3">
                            <div class="col-4">
                                Type:
                            </div>
                            <div class="col-8">
                                <select name="repo_type_url[]" id="type_url" class="form-control link-profile-url-category-id" data-name="profile_url_category_id">
                                    <option value="0">Github</option>
                                    <option value="1">Linkedin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">Url</div>
                            <div class="col-8">
                                <input type="text" name="repo_url[]" class="form-control link-url-path" data-name="url_path">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary btn-sm btn-repo-remove">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
