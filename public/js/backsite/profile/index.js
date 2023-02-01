getData()

function getData() {
    const url = base_url + '/backsite/profile/data';
    fetch(url, {
        method: 'get'
    })
    .then((response) => response.json())
    .then((data) => {
        document.getElementById('full_name').value = data.data.name;
        document.getElementById('email').value = data.data.email;
    })
}

function getProfileData() {
    const url = base_url + '/backsite/profile/profileData';
    fetch(url, {
        method: 'get'
    })
    .then((response) => response.json())
    .then((data) => {
        if(data.data.length > 0) {
            document.getElementById('full_name').value = data.data.name;
            document.getElementById('email').value = data.data.email;
            document.getElementById('position').value = data.data.position;
            document.getElementById('description').value = data.data.description;
            document.getElementById('city').value = data.data.city;
            document.getElementById('nation').value = data.data.nation;
        }
    })
}

function getSoftskillData() {
    const url = base_url + '/backsite/profile/skillData?skill_type=softskill';
    fetch(url, {
        method: 'get'
    })
    .then((response) => response.json())
    .then((data) => {
        if(data.data.length > 0) {

        } else {
            const html = `
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
            `
            document.getElementById('softskill-card').innerHTML = html
        }
    })
}

function getHardskillData() {
    const url = base_url + '/backsite/profile/skillData?skill_type=hardskill';
    fetch(url, {
        method: 'get'
    })
    .then((response) => response.json())
    .then((data) => {
        if(data.data.length > 0) {

        } else {
            const html = `
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
            `
            document.getElementById('hardskill-card').innerHTML = html
        }
    })
}

function getLanguageskillData() {
    const url = base_url + '/backsite/profile/skillData?skill_type=language';
    fetch(url, {
        method: 'get'
    })
    .then((response) => response.json())
    .then((data) => {
        if(data.data.length > 0) {

        } else {
            const html = `
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
            `
            document.getElementById('language-card').innerHTML = html;
        }
    })
}

function getLinkData() {
    const url = base_url + '/backsite/profile/linkData?url_type=link'
}

function getContactData() {
    const url = base_url + '/backsite/profile/linkData?url_type=contact'
}

const btn_save = document.getElementById('btn-save');
btn_save.addEventListener('click', () => {
    const arr_profile = collectProfileData();
    const arr_education = collectEducationData();
    const arr_portofolio = collectPortofolioData();
    const arr_contact = collectContactData();
    const arr_link = collectLinkData();
    const arr_softskill = collectSoftskillData();
    const arr_hardskill = collectHardskillData();
    const arr_language = collectLanguageskillData();
    // const arr_data = {
    //     profile: arr_profile,
    //     education: arr_education,
    //     portofolio: arr_portofolio,
    //     contact: arr_contact,
    //     link: arr_link,
    //     softskill: arr_softskill,
    //     hardskill: arr_hardskill,
    //     language: arr_language,
    // }
    const arr_data = new FormData();
    arr_data.append('a', 'AA')
    arr_data.append('b', 'BB')
    const url = base_url + '/backsite/profile';
    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: arr_data
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {

    })
})

function storeProfileData() {
    const profileForm = document.getElementById('profile-form')
    let profileFormData = new FormData(profileForm)
    profileFormData.append('type', 'profile');
    storeData(profileFormData)
}

function storeEducationData() {
    const educationForm = document.getElementById('education-form')
    let educationFormData = new FormData(educationForm)
    educationFormData.append('type', 'education');
    storeData(educationFormData)
}

function store

function storeData(formData) {
    const url = base_url + '/backsite/profile';
    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {

    })
}

function collectProfileData() {
    // const full_name = document.getElementById('full_name').value;
    // const position = document.getElementById('position').value;
    // const description = document.getElementById('description').value;
    // const city = document.getElementById('city').value;
    // const nation = document.getElementById('nation').value;
    // let arr_data = [];
    // arr_data['full_name'] = full_name;
    // arr_data['position'] = position;
    // arr_data['description'] = description;
    // arr_data['city'] = city;
    // arr_data['nation'] = nation;
    // return arr_data
}

function collectPortofolioData() {
    const portofolio_name = document.getElementById('full_name').value;
    const photo_profile = document.getElementById('photo_profile').files[0];
    const portofolio_description = document.getElementById('description').value;
    const portofolio_position = document.getElementById('position').value;
    const portofolio_city = document.getElementById('city').value;
    const portofolio_nation = document.getElementById('nation').value;
    let arr_data = {};
    arr_data.full_name = portofolio_name
    arr_data.photo = photo_profile
    arr_data.description = portofolio_description
    arr_data.position = portofolio_position
    arr_data.city = portofolio_city
    arr_data.nation = portofolio_nation
    return arr_data;
}

function collectEducationData() {
    const place = document.getElementsByClassName('education-place');
    const major = document.getElementsByClassName('education-major');
    const title = document.getElementsByClassName('education-title');
    const start_date = document.getElementsByClassName('education-start-date');
    const finish_date = document.getElementsByClassName('education-finish-date');
    let arr_data = []
    for(let i=0; i<place.length; i++) {
        let tmp = {};
        tmp.place = place[i].value;
        tmp.major = major[i].value;
        tmp.title = title[i].value;
        tmp.start_date = start_date[i].value;
        tmp.finish_date = finish_date[i].value;
        arr_data.push(tmp);
    }
    return arr_data;
}

function collectContactData() {
    const contact_category = document.getElementsByClassName('contact-profile-url-category-id');
    const contact_url = document.getElementsByClassName('contact-url-path');
    let arr_data = [];
    for(let i=0; i<contact_category.length; i++) {
        let tmp = {};
        tmp.profile_url_category_id = contact_category[i].value;
        tmp.url_path = contact_url[i].value;
        arr_data.push(tmp);
    }
    return arr_data;
}

function collectLinkData() {
    const link_category = document.getElementsByClassName('link-profile-url-category-id');
    const link_url = document.getElementsByClassName('link-url-path');
    let arr_data = [];
    for(let i=0; i<link_category.length; i++) {
        let tmp = {};
        tmp.profile_url_category_id = link_category[i].value;
        tmp.url_path = link_url[i].value;
        arr_data.push(tmp);
    }
    return arr_data;
}

function collectSoftskillData() {
    const softskill_name = document.getElementsByClassName('softskill-name');
    const softskill_mastery = document.getElementsByClassName('softskill-mastery');
    let arr_data = [];
    for(let i=0; i<softskill_name.length; i++) {
        let tmp = {};
        tmp.skill_name = softskill_name[i].value;
        tmp.skill_mastery = softskill_mastery[i].value;
        arr_data.push(tmp);
    }
    return arr_data;
}

function collectHardskillData() {
    const hardskill_name = document.getElementsByClassName('hardskill-name');
    const hardskill_mastery = document.getElementsByClassName('hardskill-mastery');
    let arr_data = [];
    for(let i=0; i<hardskill_name.length; i++) {
        let tmp = {};
        tmp.skill_name = hardskill_name[i].value;
        tmp.skill_mastery = hardskill_mastery[i].value;
        arr_data.push(tmp);
    }
    return arr_data;
}

function collectLanguageskillData() {
    const language_name = document.getElementsByClassName('language-name');
    const language_mastery = document.getElementsByClassName('language-mastery');
    let arr_data = [];
    for(let i=0; i<language_name.length; i++) {
        let tmp = [];
        tmp.skill_name = language_name[i].value;
        tmp.skill_mastery = language_mastery[i].value;
        arr_data.push(tmp);
    }
    return arr_data;
}
