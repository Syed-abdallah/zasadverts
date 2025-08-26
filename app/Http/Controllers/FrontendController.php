<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use App\Models\FrontPortfolio;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\Spotlight;
use App\Models\SiteSetting;
use App\Models\Video;
use App\Models\TestinomialImage; // (or TestimonialImage if you fix spelling)


class FrontendController extends Controller
{
public function welcome()
    {
      $faqs = Faq::oldest()->get();
          $frontportfolios = FrontPortfolio::latest()->get(); // fetch all portfolio images
    $productimages = ProductImage::latest()->take(6)->get();
     $spotlights = Spotlight::latest()->get(); // spotlight logos
    $testimonials = TestinomialImage::latest()->get(); // testimonial images
    $settings = SiteSetting::first(); // get site settings (e.g. logo)
        $videos = Video::latest()->take(4)->get(); // ✅ Fetch 4 videos

        return view('welcome', compact('faqs', 'frontportfolios', 'productimages', 'spotlights', 'testimonials', 'settings', 'videos'));
    }
}
