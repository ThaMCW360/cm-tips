<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scraping;
use App\Models\Spins;


class ScrapingController extends Controller
{

    public function test() {
        return Scraping::getSite2("https://levvvel.com/coin-master-free-spins-coins/");
         //Scraping::getSite("https://freegametips.com/coin-master-free-spins-new-links-daily/");
        return true;
        // return Scraping::getSpins();
    }

    public function test3() {
        Spins::where('url', 'LIKE', '%freegametips.com%')->delete();
        return Scraping::getSite("https://freegametips.com/coin-master-free-spins-new-links-daily/");
        // return Scraping::getSite_sub("https://freegametips.com/06-01-2023-6-link-25-free-spins-for-the-coin-master/");
        // return true;
        // return Scraping::getSpins();
    }

    public function test2() {
        return Scraping::getVillages("https://gamescoinpro.com/coin-master-village-list/");
        // return Scraping::getSpins();
    }

        public function test4() {
        Scraping::getSite2("https://levvvel.com/coin-master-free-spins-coins/");
        Scraping::getSite("https://freegametips.com/coin-master-free-spins-new-links-daily/");
        return redirect("/spins");
        // return Scraping::getSpins();
    }


}
