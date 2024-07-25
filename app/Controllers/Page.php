<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about'); // Pastikan file 'about.php' ada di folder 'Views'
    }
    
    public function contact()
    {
        return view('contact'); // Pastikan file 'contact.php' ada di folder 'Views'
    }
    
    public function faqs()
    {
        return view('faqs'); // Pastikan file 'faqs.php' ada di folder 'Views'
    }
}
