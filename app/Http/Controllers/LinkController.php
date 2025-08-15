<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Mendapatkan link berdasarkan tipe
     */
    public function getLinksByType($type)
    {
        return Link::active()->byType($type)->ordered()->get();
    }

    /**
     * Mendapatkan semua link yang aktif
     */
    public function getActiveLinks()
    {
        return Link::active()->ordered()->get();
    }

    /**
     * Mendapatkan link pertama berdasarkan tipe
     */
    public function getFirstLinkByType($type)
    {
        return Link::active()->byType($type)->ordered()->first();
    }

    /**
     * Mendapatkan link WhatsApp
     */
    public function getWhatsAppLinks()
    {
        return Link::active()->byType('whatsapp')->ordered()->get();
    }

    /**
     * Mendapatkan link Google Form
     */
    public function getGoogleFormLinks()
    {
        return Link::active()->byType('google_form')->ordered()->get();
    }

    /**
     * Mendapatkan link WhatsApp pertama
     */
    public function getFirstWhatsAppLink()
    {
        return Link::active()->byType('whatsapp')->ordered()->first();
    }

    /**
     * Mendapatkan link Google Form pertama
     */
    public function getFirstGoogleFormLink()
    {
        return Link::active()->byType('google_form')->ordered()->first();
    }
}