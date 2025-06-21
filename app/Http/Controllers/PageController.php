<?php

namespace App\Http\Controllers;

use App\Enums\TelegramChannel;
use App\Http\Requests\ContactFormRequest;
use App\Jobs\TelegramLog;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function index(?string $page = 'index')
    {
        $pages = [
            'index' => [
                'title' => 'Perçin Media',
                'description' => '',
            ],
            'hizmetler' => [
                'title' => 'Hizmetler - Perçin Media',
                'description' => '',
            ],
            'hakkimizda' => [
                'title' => 'Hakkımızda - Perçin Media',
                'description' => '',
            ],
            'iletisim' => [
                'title' => 'İletişim - Perçin Media',
                'description' => '',
            ],
            'hizmetler/dijital-pazarlama' => [
                'title' => 'Dijital Pazarlama - Perçin Media',
                'description' => '',
            ],
            'hizmetler/google-ads' => [
                'title' => 'Google Ads - Perçin Media',
                'description' => '',
            ],
            'hizmetler/meta-business' => [
                'title' => 'Meta Business - Perçin Media',
                'description' => '',
            ],
            'hizmetler/sosyal-medya' => [
                'title' => 'Sosyal Medya - Perçin Media',
                'description' => '',
            ],
            'hizmetler/website' => [
                'title' => 'Website - Perçin Media',
                'description' => '',
            ],
        ];

        if (!isset($pages[$page])) {
            abort(404);
        }

        View::share('meta', $pages[$page]);
        View::share('pages', $pages);
        View::share('page', $page);

        return view("pages.$page");
    }

    public function contact(ContactFormRequest $request)
    {
        $form = $request->validated();

        $message = [];
        $message[] = "*Yeni bir mesaj geldi*\n";
        $message[] = "*Gönderen:* " . $form['name'];
        $message[] = "*Telefon:* " . $form['phone'];
        $message[] = "*e-Posta:* " . $form['email'];
        $message[] = "*Mesaj İçeriği*";
        $message[] = "```\n" . $form['message'] . "```";

        $message = implode("\n\n", $message);

        dispatch(new TelegramLog($message, TelegramChannel::contact));

        return response('success');
    }
}
