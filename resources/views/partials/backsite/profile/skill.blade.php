<div class="card-body">
    <div class="d-flex">
        <ul class="nav nav-segment" id="expensesTab" role="tablist">
            <li class="nav-item skill-nav active" data-page="language">
                Language
            </li>
            <li class="nav-item skill-nav" data-page="hard-skill">
                Hard Skill
            </li>
            <li class="nav-item skill-nav" data-page="soft-skill">
                Soft Skill
            </li>
        </ul>
    </div>
    <hr class="mb-2">
    <div class="skill-page" id="language">
        <div class="d-flex justify-content-between">
            <h5>Language</h5>
            <button class="btn btn-primary btn-sm" id="btn-language-add">
                <i class="fas fa-plus"></i>
            </button>
        </div>
        <hr class="mb-3">
        <div id="language-card">
            <form id="language-form" class="form-data">
                <div class="card language mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <div class="row mb-3">
                                    <div class="col-4">Skill:</div>
                                    <div class="col-8">
                                        <input type="text" name="skill_name[]" class="form-control language-name" data-name="skill_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Proficiency: </div>
                                    <div class="col-8">
                                        <select name="skill_prof[]" class="form-control language-mastery" data-name="skill_mastery">
                                            <option value="0">Novice</option>
                                            <option value="1">Intermediate</option>
                                            <option value="2">Advance</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary btn-sm btn-language-remove">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="skill-page d-none" id="hard-skill">
        <div class="d-flex justify-content-between">
            <h5>Hard Skill</h5>
            <button class="btn btn-primary btn-sm" id="btn-hardskill-add">
                <i class="fas fa-plus"></i>
            </button>
        </div>
        <hr class="mb-3">
        <div id="hardskill-card">
            <form id="hardskill-form" class="form-data">
                <div class="card hardskill mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <div class="row mb-3">
                                    <div class="col-4">HardSkill:</div>
                                    <div class="col-8">
                                        <input type="text" name="skill_name[]" class="form-control hardskill-name" data-name="skill_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Proficiency</div>
                                    <div class="col-8">
                                        <select name="skill_prof[]" class="form-control hardskill-mastery" data-name="skill_mastery">
                                            <option value="0">Novice</option>
                                            <option value="1">Intermediate</option>
                                            <option value="2">Advance</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary btn-sm btn-hardskill-remove">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="skill-page d-none" id="soft-skill">
        <div class="d-flex justify-content-between">
            <h5>Soft Skill</h5>
            <button class="btn btn-primary btn-sm" id="btn-softskill-add">
                <i class="fas fa-plus"></i>
            </button>
        </div>
        <hr class="mb-3">
        <div id="softskill-card">
            <form id="formskill-form" class>
                <div class="card softskill mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <div class="row mb-3">
                                    <div class="col-4">Skill:</div>
                                    <div class="col-8">
                                        <input type="text" name="skill_name[]" class="form-control softskill-name" data-name="skill_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Proficiency</div>
                                    <div class="col-8">
                                        <select name="skill_prof[]" class="form-control softskill-mastery" data-name="skill_mastery">
                                            <option value="0">Novice</option>
                                            <option value="1">Intermediate</option>
                                            <option value="2">Advance</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary btn-sm btn-softskill-remove">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
