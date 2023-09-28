<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scraping;


class HomeController extends Controller
{

    public function home() {
        return view("welcome",["title"=>"Coin Master - Tips", "description"=>"Tips for game coin Master"]);
    }

    public function villages() {
        return view("villages",["title"=>"Coin Master - Tips - Village cost", "description"=>"Tips for game coin Master. And village cost.", "villages" => Scraping::getVillagesList()]);
    }
    public function spins() {

        return view("spins",["title"=>"Coin Master - Tips - Free spins", "description"=>"Tips for game coin Master. Links with free spins", "spins" => Scraping::getSpins()]);
    }

    public function chests() {
        return view("chests",["title"=>"Coin Master - Tips - Chests", "description"=>"Tips for game coin Master. Informations about chests."]);
    }



public function home_pl() {
        return view("pl/welcome",["title"=>"Coin Master - Tips - PL", "description"=>"Wskazówki do gry coin Master"]);
    }

    public function villages_pl() {
        return view("pl/villages",["title"=>"Coin Master - Tips - Koszt budowy wiosek - PL", "description"=>"Wskazówki do gry coin Master. Lista i koszt budowy wiosek", "villages" => Scraping::getVillagesList()]);
    }
    public function spins_pl() {

        return view("pl/spins",["title"=>"Coin Master - Tips - Darmowe spiny - PL", "description"=>"Tips for game coin Master. Links with free spins", "spins" => Scraping::getSpins()]);
    }

    public function chests_pl() {
        return view("pl/chests",["title"=>"Coin Master - Tips - Skrzynie - PL", "description"=>"Tips for game coin Master. Informations about chests."]);
    }

    //
    public function home_rus() {
        return view("rus/welcome",["title"=>"Coin Master - Tips - rus", "description"=>"Tips for game coin Master"]);
    }

    public function villages_rus() {
        return view("rus/villages",["title"=>"Coin Master - Tips - Village cost", "description"=>"Tips for game coin Master. And village cost.", "villages" => Scraping::getVillagesList()]);
    }
    public function spins_rus() {

        return view("rus/spins",["title"=>"Coin Master - Tips - Darmowe spiny", "description"=>"Tips for game coin Master. Links with free spins", "spins" => Scraping::getSpins()]);
    }

    public function chests_rus() {
        return view("rus/chests",["title"=>"Coin Master - Tips - Chests", "description"=>"Tips for game coin Master. Informations about chests."]);
    }
        //
    public function home_de() {
        return view("de/welcome",["title"=>"Coin Master - Tips - de", "description"=>"Tips for game coin Master"]);
    }

    public function villages_de() {
        return view("de/villages",["title"=>"Coin Master - Tips - Village cost", "description"=>"Tips for game coin Master. And village cost.", "villages" => Scraping::getVillagesList()]);
    }
    public function spins_de() {

        return view("de/spins",["title"=>"Coin Master - Tips - Darmowe spiny", "description"=>"Tips for game coin Master. Links with free spins", "spins" => Scraping::getSpins()]);
    }

    public function chests_de() {
        return view("de/chests",["title"=>"Coin Master - Tips - Chests", "description"=>"Tips for game coin Master. Informations about chests."]);
    }

        //
    public function home_es() {
        return view("es/welcome",["title"=>"Coin Master - Tips - es", "description"=>"Tips for game coin Master"]);
    }

    public function villages_es() {
        return view("es/villages",["title"=>"Coin Master - Tips - Village cost", "description"=>"Tips for game coin Master. And village cost.", "villages" => Scraping::getVillagesList()]);
    }
    public function spins_es() {

        return view("es/spins",["title"=>"Coin Master - Tips - Darmowe spiny", "description"=>"Tips for game coin Master. Links with free spins", "spins" => Scraping::getSpins()]);
    }

    public function chests_es() {
        return view("es/chests",["title"=>"Coin Master - Tips - Chests", "description"=>"Tips for game coin Master. Informations about chests."]);
    }

        //
    public function home_fr() {
        return view("fr/welcome",["title"=>"Coin Master - Tips - fr", "description"=>"Tips for game coin Master"]);
    }

    public function villages_fr() {
        return view("fr/villages",["title"=>"Coin Master - Tips - Village cost", "description"=>"Tips for game coin Master. And village cost.", "villages" => Scraping::getVillagesList()]);
    }
    public function spins_fr() {

        return view("fr/spins",["title"=>"Coin Master - Tips - Darmowe spiny", "description"=>"Tips for game coin Master. Links with free spins", "spins" => Scraping::getSpins()]);
    }

    public function chests_fr() {
        return view("fr/chests",["title"=>"Coin Master - Tips - Chests", "description"=>"Tips for game coin Master. Informations about chests."]);
    }
}
