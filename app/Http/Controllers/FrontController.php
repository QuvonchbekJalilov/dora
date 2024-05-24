<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Team;
use App\Blog;
use App\Client;
use App\Contact;
use App\Portcate;
use App\SiteService;
use App\Rewiev;
use App\DesignService;
use App\SeoService;
use App\MarketingService;
use App\Models\User;
use App\Dictionary;



class FrontController extends Controller
{
    public function comming()
    {
           $data = Http::withBasicAuth(env('IPOLIS_USERNAME'), env('IPOLIS_PASSWORD'))
         ->get(env('IPOLIS_ENDPOINT') . '/eosgouz/provider/birthdate', [
            'birthdate' => "2002-04-14", // param1 ni qiymat bilan
            'passportSeries' => "AC", // param2 ni qiymat bilan
            'passportNumber' => "1110802", // param2 ni qiymat bilan
            // Boshqa parametrlarni ham shu usul bilan qo'shishingiz mumkin
        ]
        );
        return view('front.comming')->with("data", $data);
    }
    

    public function index()
    {
       $portfolio = Portfolio::take(3)->get();;
        $teams = Team::paginate(10);
        $clients = Client::paginate(100);
        $blogs = Blog::paginate(100);
        $portcates = Portcate::paginate(3);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $seoservices = SeoService::all();
        return view('front.index',  compact('portfolio', 'teams',  'clients', 'blogs','portcates','siteservices','designservices','seoservices'));
    }

    public function about()
    {
        $teams = Team::paginate(10);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $seoservices = SeoService::all();
        return view('front.about',compact('teams','siteservices','designservices','seoservices'));
    }
    
    public function smm()
    {
        return view('front.smm');
    }
    
     public function development()
    {
        return view('front.development');
    }
    
    //  public function marketing()
    // {
    //     return view('front.marketing');
    // }
    
     public function print()
    {
        return view('front.print');
    }
    
     public function tahlil()
    {
        return view('front.tahlil');
    }

   
    public function presentation()
    {
        $teams = Team::paginate(10);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $seoservices = SeoService::all();
        return view('front.presentation',compact('teams','siteservices','designservices','seoservices'));
    }
    
     public function dictionaries()
    {
        $dictionaries = Dictionary::take(10)->get();
         $teams = Team::paginate(10);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $seoservices = SeoService::all();
        return view('front.dictionaries',compact('teams','siteservices','designservices','seoservices', 'dictionaries'));
    }
    
   public function siteservicesID($id)
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $site_services = SiteService::all()->find($id);
        return view('front.services-id', compact('site_services','siteservices','designservices','seoservices'));
    }
    
    public function marketing_single($id)
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        
        $product = MarketingService::all()->find($id);
        
        return view('front.service-id', compact('product','siteservices','designservices','seoservices'));
    }
    

    public function designservicesID($id)
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $design_services = DesignService::all()->find($id);
        return view('front.design-id', compact('siteservices','designservices','design_services','seoservices'));
    }

    public function seoservicesID($id)
    {
        $seoservices = SeoService::all();
        $seo_services = SeoService::all()->find($id);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        return view('front.seo-id', compact('siteservices','seo_services','designservices','seoservices'));
    }




    public function portfolio()
    {
        $seoservices = SeoService::all();
        $portfolio = Portfolio::paginate(100);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        return view('front.portfolio',compact('portfolio','siteservices','designservices','seoservices'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $blogs = Blog::where(function($query) use ($keyword) {
            $query->where('title_uz', 'like', "%$keyword%")
                  ->orWhere('title_en', 'like', "%$keyword%")
                  ->orWhere('title_ru', 'like', "%$keyword%")
                  ->orWhere('text_uz', 'like', "%$keyword%")
                  ->orWhere('text_en', 'like', "%$keyword%")
                  ->orWhere('text_ru', 'like', "%$keyword%")
                  ->orWhere('smit', 'like', "%$keyword%")
                  ->orWhere('date', 'like', "%$keyword%")
                  ->orWhere('image', 'like', "%$keyword%");
        })->get();
        return view('front.blog', compact('blogs'));
    }

    public function blog()
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $blogs = Blog::paginate(100);
        $designservices = DesignService::all();
        return view('front.blog',compact('blogs','siteservices','designservices','seoservices'));
    }
    
     public function service()
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $blogs = Blog::paginate(100);
        $designservices = DesignService::all();
        $marketing = MarketingService::all();
        return view('front.ServiceList',compact('blogs','siteservices','designservices','seoservices', 'marketing'));
    }

    // marketing

    public function tools()
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $blogs = Blog::paginate(100);
        $designservices = DesignService::all();
         $marketing = MarketingService::all();
         
        return view('front.tools',compact('blogs','siteservices','designservices','seoservices', 'marketing'));
    }

    public function ads()
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $blogs = Blog::paginate(100);
        $designservices = DesignService::all();
        $marketing = MarketingService::all();
        return view('front.ads',compact('blogs','siteservices','designservices','seoservices', 'marketing', ));
    }
    
     public function marketing()
    {
        $marketing = MarketingService::all();
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $blogs = Blog::paginate(100);
        $designservices = DesignService::all();
        return view('front.marketing',compact('blogs','siteservices','designservices','seoservices', 'marketing',));
    }

    public function site()
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $blogs = Blog::paginate(100);
        $designservices = DesignService::all();
         $marketing = MarketingService::all();
        return view('front.site',compact('blogs','siteservices','designservices','seoservices', 'marketing',));
    }


    public function brif()
    {
        $teams = Team::paginate(10);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $seoservices = SeoService::all();
        return view('front.brif',compact('teams','siteservices','designservices','seoservices'));
    }
    
    public function testimonial()
    {
         $teams = Team::paginate(10);
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        $seoservices = SeoService::all();
        $rewievs = Rewiev::all();
        return view('front.testimonial',compact('teams','siteservices','designservices','seoservices' , 'rewievs'));
    }

    public function contact()
    {
        $seoservices = SeoService::all();
        $siteservices = SiteService::all();
        $designservices = DesignService::all();
        return view('front.contact', compact('siteservices','designservices','seoservices'));
    }
    
   
    public function showportfolio($id)
    {
        $seoservices = SeoService::all();
        $designservices = DesignService::all();
       $siteservices = SiteService::all();
        $portfolio = Portfolio::find($id);
        if (!$portfolio) {
            abort(404, 'Portf繹y bulunamad覺');
        }
        $images = json_decode($portfolio->images);
        return view('front.portfolio-id', compact('images','portfolio','siteservices','designservices','seoservices'));
    }


    public function blogid($id)
    {
       $seoservices = SeoService::all();
       $designservices = DesignService::all();
       $siteservices = SiteService::all();
       $blog = Blog::find($id);
       if (!isset($blog)) {
        return abort(404);
       } else {
        return view('front.blog-list', compact('blog','siteservices','designservices','seoservices'));
       }
    }




    public function price()
    {
        $seoservices = SeoService::all();
        $designservices = DesignService::all();
        $siteservices = SiteService::all();
        $portfolio = Portfolio::paginate(4);
        $teams = Team::paginate(10);
        $clients = Client::paginate(100);
        $blogs = Blog::paginate(100);
        // return view('front.prices',  compact('portfolio', 'teams', 'clients', 'blogs','designservices','seoservices'));
        return view('front.prices',  compact('seoservices', 'designservices', 'siteservices'))->with(request()->input('page'));
    }

    public function bot(Request $request)
    {
        $name = $request->input('name');
        $number = $request->input('number');

        $contact = new Contact();
        $contact->name = $name;
        $contact->number = $number;
        $contact->save();



    $token = env('TELEGRAM_TOKEN');
    $chat_id = env('TELEGRAM_GROUP_ID');
    $text = "Sayt orali murojaat qoldirildi. Ism: $_POST[name]; Telefon raqam: $_POST[number];;";

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");
    return redirect()->back()->with('success', 'your message,here');
 }

 public function papop(Request $request)
 {
     $name = $request->input('name');
     $number = $request->input('number');


     $contact = new Contact();
     $contact->name = $name;
     $contact->number = $number;
     $contact->save();


    $token = env('TELEGRAM_TOKEN');
    $chat_id = env('TELEGRAM_GROUP_ID');
    $text = "Sayt orali murojaat qoldirildi. Ism: $_POST[name]; Telefon raqam: $_POST[number];";
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");
    return redirect()->back()->with('success', 'your message,here');
    
}
}
