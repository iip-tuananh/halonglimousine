<?php

namespace App\Providers;

use App\models\blog\Blog;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session,View;
use App\models\website\Setting;
use App\models\website\Banner;
use Cart,Auth;
use App\models\PageContent;
use Laravel\Dusk\DuskServiceProvider;
use App\models\product\Category;
use App\models\language\Language;
use App\models\Province;
use App\models\Services;
use App\models\Solution;
use App\models\ServiceCate;
use App\models\Promotion;
use App\models\blog\BlogCategory;
use App\models\Project;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) 
        {
            if(Auth::guard('customer')->user() != null){
                $profile = Auth::guard('customer')->user();
            }else{
                $profile = "";
            }
            $language_current = Session::get('locale');
            $promotio = Promotion::where('status',1)->orderBy('id','DESC')->get();
            $servicehome = Services::where('status',1)->orderBy('id','DESC')->get();
            $giaiphap = Solution::where('status',1)->orderBy('id','DESC')->get();
            $serviceCate = ServiceCate::where('status',1)->orderBy('id','DESC')->get();
            $setting = Setting::first();
            $lang = Language::get();
            $pageContent = PageContent::where(['type'=>'ve-chung-toi','language'=>'vi','status'=> 1])->first();
            $categoryhome = Category::with([
                'typeCate' => function ($query) {
                    $query->with(['typetwo'])->where('status',1)->orderBy('id','DESC')->select('cate_id','id', 'name','avatar','slug','cate_slug'); 
                }
            ])->where('status',1)->orderBy('id','ASC')->get(['id','name','imagehome','avatar','slug','content'])->map(function ($query) {
                $query->setRelation('product', $query->product->where('status', 1)->where('discountStatus', 1)->take(20));
                return $query;
            });

            $projectmenu = Project::orderBy('id','DESC')->where('status',1)->get(['id','name','slug']);
            $banner = Banner::where(['status'=>1])->get(['id','image','link','title','description']);
            $cartcontent = session()->get('cart', []);
            $viewold = session()->get('viewoldpro', []);
            $compare = session()->get('compareProduct', []);
            $blogCate = BlogCategory::with([
                'typeCate' => function ($query){
                    $query->select('id','slug','name','avatar','category_slug','created_at');
                },
                'listBlog' => function ($query){
                    $query->where(['status'=>1, 'home_status'=>1])->get();
                }
            ])
            ->where('status',1)
            ->orderBy('id','desc')
            ->get(['id','name','slug','avatar','created_at']);
            $listblognew = Blog::where('status',1)->orderBy('id','DESC')->limit(5)->get();
            $helpCustomer = PageContent::where(['status'=>1,'language'=>'vi', 'type'=>'ho-tro-khanh-hang'])->get();
            $view->with([
                'promotio' => $promotio,
                'setting' => $setting,
                'pageContent' => $pageContent,
                'lang' => $lang,
                'banner'=>$banner,
                'profile' =>$profile,
                'categoryhome'=> $categoryhome,
                'cartcontent'=>$cartcontent,
                'viewold'=>$viewold,
                'compare'=>$compare,
                'blogCate'=>$blogCate,
                'servicehome'=>$servicehome,
                'serviceCate'=>$serviceCate,
                'giaiphap'=>$giaiphap,
                'helpCustomer'=>$helpCustomer,
                'projectmenu'=>$projectmenu,
                'listblognew'=>$listblognew,
      
                ]);    
        });  
    }
}
