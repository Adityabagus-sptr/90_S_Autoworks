<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact; // Tambahkan import ini

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Beranda';
        $serviceDatas = [
            [
                "brandImage" => "images/service_1.png",
                "buttonStatus" => "Order"
            ],
            [
                "brandImage" => "images/service_2.png",
                "buttonStatus" => "Booking"
            ],
            [
                "brandImage" => "images/service_3.png",
                "buttonStatus" => "Booking"
            ],
            [
                "brandImage" => "images/service_4.png",
                "buttonStatus" => "Booking"
            ],
            [
                "brandImage" => "images/service_5.png",
                "buttonStatus" => "Visit"
            ],
            [
                "brandImage" => "images/service_6.png",
                "buttonStatus" => "Other"
            ],
        ];
        
        // Mengambil 3 artikel terbaru yang dipublikasikan
        $articleDatas = Article::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
            
        $partnerDatas = [
            [
                'image' => 'images/partner_1.png'
            ],
            [
                'image' => 'images/partner_2.png'
            ],
            [
                'image' => 'images/partner_3.png'
            ],
            [
                'image' => 'images/partner_4.png'
            ],
            [
                'image' => 'images/partner_5.png'
            ],
            [
                'image' => 'images/partner_6.png'
            ],
            [
                'image' => 'images/partner_7.png'
            ],
            [
                'image' => 'images/partner_8.png'
            ],
            [
                'image' => 'images/partner_9.png'
            ],
        ];
        return view('home.index', compact('title', 'serviceDatas', 'articleDatas', 'partnerDatas'));
    }

    public function article()
    {
        $title = 'Artikel';
        
        // Mengambil semua artikel yang dipublikasikan
        $articleDatas = Article::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(6);
            
        return view('article.index', compact('title', 'articleDatas'));
    }

    public function detailArticle($slug)
    {
        $title = 'Detail Artikel';
        
        // Mencari artikel berdasarkan slug
        $data = Article::where('slug', $slug)->firstOrFail();
        
        // Mengambil artikel lain yang dipublikasikan
        $anotherArticles = Article::where('is_published', true)
            ->where('id', '!=', $data->id)
            ->orderBy('published_at', 'desc')
            ->take(6)
            ->get();
            
        return view('article.detail', compact('title', 'data', 'anotherArticles'));
    }

    public function contact()
    {
        $title = 'Contact';
        return view('contact.index', compact('title'));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        
        Contact::create($validated);
        
        if ($request->ajax()) {
            return response()->json(['success' => 'Pesan Anda telah berhasil dikirim!']);
        }
        
        return redirect()->route('contact')->with('success', 'Pesan Anda telah berhasil dikirim!');
    }

    public function  aboutUs()
    {
        $title = 'Tentang Kami';
        return view('about_us.index', compact('title'));
    }

    public function service()
    {
        $title = 'Layanan';
        $currentIndex = 0;
        $serviceDatas = [
            [
                "brandImage" => "images/img_service_1.svg",
                "html" => view('service.service_1')->render()
            ],
            [
                "brandImage" => "images/img_service_2.svg",
                "html" => view('service.service_2')->render()
            ],
            [
                "brandImage" => "images/img_service_3.svg",
                "html" => view('service.service_3')->render()
            ],
            [
                "brandImage" => "images/img_service_4.svg",
                "html" => view('service.service_4')->render()
            ],
            [
                "brandImage" => "images/img_service_5.svg",
                "html" => view('service.service_5')->render()
            ],
            [
                "brandImage" => "images/img_service_6.svg",
                "html" => view('service.service_6')->render()
            ],
        ];
        return view('service.index', compact('title', 'currentIndex', 'serviceDatas'));
    }

    public function notFound()
    {
        $title = 'Not Found';
        return view('home.not_found', compact('title'));
    }
}