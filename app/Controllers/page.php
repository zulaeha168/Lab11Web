<?php
namespace App\Controllers;
class Page extends BaseController
{
public function about()
{
    return view('about', [
        'title' => 'Halaman Abot',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
        halaman ini.'
        ]);
    echo "Ini halaman About";
    }
    public function contact()
    {
    echo "Ini halaman Contact";
    }
    public function faqs()
    {
    echo "Ini halaman FAQ";
    }public function tos()
    {
    echo "ini halaman Term of Services";
    }
    }