<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use App\models\website\Video;
use App\models\website\Founder;
use App\models\website\Prize;
use App\models\website\AlbumAffter;
use App\models\ReviewCus;
use App\models\PageContent;
use App\models\Project;

class HomeController extends Controller
{
    public function home()
    {
        $data['hotnews'] = Blog::where(['status'=>1,'home_status'=>1])->orderBy('id','DESC')->limit(5)->get(['id','title','slug','created_at','image','description']);
        $data['reviewcus'] = ReviewCus::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->get();
        $data['partner'] = Partner::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->get();
        $data['gioithieu'] = PageContent::where(['status'=>1,'language'=>'vi','type'=>'ve-chung-toi'])->first(['id','title','content','image','description']);
        $data['picturehome'] = Prize::where(['status'=>1])->get();
        $data['catehome'] = array_chunk( Category::where(['status'=>1])->get()->toArray(), 3, false);
        // dd($data['catahome']);
        $data['homePro'] = Product::where(['status'=>1,'discountStatus'=>1])
            ->orderBy('id','DESC')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description')
            ->limit(6)->get();
        $data['project'] = Project::where('status', 1)->get();
        return view('home',$data);
    }
}
