<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\ProfilePortofolio;
use App\Models\ProfileSkill;
use App\Models\ProfileSkillCategory;
use App\Models\ProfileUrl;
use App\Models\ProfileUrlCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backsite.profile.index');
    }

    public function getData() {
        $user = User::select('email', 'name')->find(Auth::id());

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }

    public static function getProfileData()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        return response()->json([
            'success' => true,
            'message' => 'Success get profile data',
            'data' => $profile
        ]);
    }

    public static function getSkillData(Request $request)
    {
        $skill = ProfileSkill::whereHas('category', function($q) use ($request) {
            $q->where('skill_type', $request->skill_type);
        })->where('profile_id', $request->profile_id)->get();
        $skill_category = ProfileSkillCategory::where('skill_type', $request->skill_type)->get();
        return response()->json([
            'success' => true,
            'message' => 'Success get skill data',
            'data' => [
                'skill' => $skill,
                'category' => $skill_category
            ],
        ]);
    }

    public static function getLinkData(Request $request)
    {
        $link = ProfileUrl::whereHas('category', function($q) use ($request) {
            $q->where('url_category_type', $request->url_type);
        })->where('profile_id', $request->profile_id)->get();
        $link_category = ProfileUrlCategory::where('url_category_type', $request->url_type);
        return response()->json([
            'success' => true,
            'message' => 'Success get Link data',
            'data' => [
                'link' => $link,
                'category' => $link_category
            ]
        ]);
    }

    public static function getPortofolioData(Request $request)
    {
        $portofolio = ProfilePortofolio::where('profile_id', $request->profile_id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Success get portofolio data',
            'data' => $portofolio
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'request' => $request->all()
        ]);
    }
}
