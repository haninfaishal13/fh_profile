<div class="card-body">
    <div class="d-flex justify-content-between">
        <h4>Portofolio</h4>
        <button class="btn btn-primary btn-sm" id="btn-portofolio-add"><i class="fas fa-plus"></i></button>
    </div>
    <hr class="mb-3 d-lg">
    <form id="portofolio-form">
        <div class="card portofolio mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <div class="row mb-3">
                            <div class="col-4">Title:</div>
                            <div class="col-8">
                                <input type="text" name="portofolio_name[]" class="form-control portofolio-name" data-name="portofolio_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">Media</div>
                            <div class="col-8">
                                <input type="file" name="portoflio_media[]" class="form-control portofolio-media" data-name="portofolio_media_path" multiple>
                            </div>
                            <div id="preview-portofolio-media-name"></div>
                        </div>
                        <div class="row">
                            <div class="col-4">Description</div>
                            <div class="col-8">
                                <textarea name="portofolio_description[]" class="form-control portofolio-description" data-name="portofolio_description" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary btn-sm btn-portofolio-remove">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
