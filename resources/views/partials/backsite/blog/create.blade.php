<div class="card-body">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Create</h3>
        <button class="btn btn-success"><i class="fas fa-save me-2"></i></i>Save</button>
    </div>

    <hr>
    <div class="row mb-2">
        <div class="col-lg-4 col-12">
            Title:
        </div>
        <div class="col-lg-8 col-12">
            <input type="text" name="post_title" class="form-control" id="post_title">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-4 col-12">
            Header:
        </div>
        <div class="col-lg-8 col-12">
            <input type="file" name="post_header" class="form-control" id="post_header">
            <div id="post-header-preview"></div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-4 col-12">
            Content:
        </div>
        <div class="col-lg-8 col-12">
            <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-4 col-12">
            Tags:
        </div>
        <div class="col-lg-8 col-12">
            <select name="post_tags" id="post_tags" class="form-control">
                <option value="1">A</option>
                <option value="2">B</option>
            </select>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-4 col-12">
            Media:
        </div>
        <div class="col-lg-8 col-12">
            <input type="file" name="post_media[]" id="post_media" multiple>
        </div>
    </div>
</div>
