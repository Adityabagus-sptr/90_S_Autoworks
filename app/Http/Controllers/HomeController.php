<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Link;
use App\Models\HeroSlide;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Beranda';
        $serviceDatas = [
            [
                "brandImage" => "images/service_1.png",
                "buttonStatus" => "Booking"
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
                "buttonStatus" => "Booking"
            ],
            [
                "brandImage" => "images/service_6.png",
                "buttonStatus" => "Booking"
            ],
        ];
        
        // Mengambil 3 artikel terbaru yang dipublikasikan
        $articleDatas = Article::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
            
        // Ambil slide hero aktif dari database
        $heroSlides = HeroSlide::active()->ordered()->get();

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
        
        // Mengambil link WhatsApp dan Google Form
        $linkBookingLinks = Link::active()->byType('link_booking')->ordered()->get();
        $linkDaftarLinks = Link::active()->byType('link_daftar')->ordered()->get();
        
        return view('home.index', compact('title', 'serviceDatas', 'articleDatas', 'partnerDatas', 'linkBookingLinks', 'linkDaftarLinks', 'heroSlides'));
    }

    public function article()
    {
        $title = 'Artikel';
        
        // Mengambil semua artikel yang dipublikasikan
        $articleDatas = Article::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(6);
            
        // Mengambil link WhatsApp dan Google Form
        $linkBookingLinks = Link::active()->byType('link_booking')->ordered()->get();
        $linkDaftarLinks = Link::active()->byType('link_daftar')->ordered()->get();
            
        return view('article.index', compact('title', 'articleDatas', 'linkBookingLinks', 'linkDaftarLinks'));
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
            
        // Mengambil link WhatsApp dan Google Form
        $linkBookingLinks = Link::active()->byType('link_booking')->ordered()->get();
        $linkDaftarLinks = Link::active()->byType('link_daftar')->ordered()->get();

        return view('article.detail', compact('title', 'data', 'anotherArticles', 'linkBookingLinks', 'linkDaftarLinks'));
    }

    public function contact()
    {
        $title = 'Contact';
        
        // Mengambil link WhatsApp dan Google Form
        $linkBookingLinks = Link::active()->byType('link_booking')->ordered()->get();
        $linkDaftarLinks = Link::active()->byType('link_daftar')->ordered()->get();

        return view('contact.index', compact('title', 'linkBookingLinks', 'linkDaftarLinks'));
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
        
        // Mengambil link WhatsApp dan Google Form
        $linkBookingLinks = Link::active()->byType('link_booking')->ordered()->get();
        $linkDaftarLinks = Link::active()->byType('link_daftar')->ordered()->get();

        return view('about_us.index', compact('title', 'linkBookingLinks', 'linkDaftarLinks'));
    }

    public function service()
    {
        $title = 'Layanan';
        $currentIndex = 0;
        
        // Mengambil link WhatsApp dan Google Form
        $linkBookingLinks = Link::active()->byType('link_booking')->ordered()->get();
        $linkDaftarLinks = Link::active()->byType('link_daftar')->ordered()->get();
        
        $serviceDatas = [
            [
                "brandImage" => "images/img_service_1.svg",
                "html" => view('service.service_1', compact('linkBookingLinks', 'linkDaftarLinks'))->render()
            ],
            [
                "brandImage" => "images/img_service_2.svg",
                "html" => view('service.service_2', compact('linkBookingLinks', 'linkDaftarLinks'))->render()
            ],
            [
                "brandImage" => "images/img_service_3.svg",
                "html" => view('service.service_3', compact('linkBookingLinks', 'linkDaftarLinks'))->render()
            ],
            [
                "brandImage" => "images/img_service_4.svg",
                "html" => view('service.service_4', compact('linkBookingLinks', 'linkDaftarLinks'))->render()
            ],
            [
                "brandImage" => "images/img_service_5.svg",
                "html" => view('service.service_5', compact('linkBookingLinks', 'linkDaftarLinks'))->render()
            ],
            [
                "brandImage" => "images/img_service_6.svg",
                "html" => view('service.service_6', compact('linkBookingLinks', 'linkDaftarLinks'))->render()
            ],
        ];

        return view('service.index', compact('title', 'currentIndex', 'serviceDatas', 'linkBookingLinks', 'linkDaftarLinks'));
    }

    public function detailService($slug)
    {
        $title = 'Detail Layanan';
        
        // Mengambil link WhatsApp dan Google Form
        $linkBookingLinks = Link::active()->byType('link_booking')->ordered()->get();
        $linkDaftarLinks = Link::active()->byType('link_daftar')->ordered()->get();

        return view('service.detail', compact('title', 'slug', 'linkBookingLinks', 'linkDaftarLinks'));
    }

    public function notFound()
    {
        $title = 'Not Found';
        return view('home.not_found', compact('title'));
    }
}