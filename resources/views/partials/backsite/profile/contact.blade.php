<div class="card-body">
    <h4>Contact</h4>
    <hr class="mb-3">
    <div class="row mb-3">
        <div class="col-lg-4 col-md-4">
            Email:
        </div>
        <div class="col-lg-8 col-md-8">
            <input type="text" name="email" class="form-control" id="email" disabled>
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-between">
        <h5>Social Media</h5>
        <button class="btn btn-primary btn-sm" id="btn-socmed-add">
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <hr>
    <form id="contact-form">
        <div class="card socmed mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-4">
                        <select name="socmed_type" class="form-control socmed-type contact-profile-url-category-id" data-name="profile_url_category_id">
                            <option value="0">-- Select Socmed --</option>
                            <option value="1">Instagram</option>
                            <option value="2">Linkedin</option>
                        </select>
                    </div>
                    <div class="col-7">
                        <input type="text" name="sucmed_url" class="form-control socmed-url contact-url-path" data-name="url_path" placeholder="Input Url Here">
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-danger btn-sm btn-socmed-remove"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
