<?php
namespace App\Controllers;

class PageController
{
    public function detail()
    {
        echo "This is detail page";
    }

    public function aboutPage()
    {
        $title = 'About Title';
        $description = 'Lorem Ipsum';

        view('about.view.php', compact('title', 'description'));
    }
}
