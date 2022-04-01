<?php

namespace Database\Seeders;

use App\Models\Poi;
use Illuminate\Database\Seeder;


class PoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $londonId = \App\Models\Location::where(["name" => "London", "country" => "England"])->firstOrFail()->id;

        $londonEye = new Poi();
        $londonEye->name = "London Eye";
        $londonEye->location_id = $londonId;
        $londonEye->image = "img/poi/london-eye/london-eye.png";
        $londonEye->description = "A London Eye (magyarul kb. Londoni szem vagy London szeme) más néven Millenniumi Kerék egy óriáskerék Londonban, melynek építését az EDF Energy szponzorálta. 1999-ben készült el, a nagyközönség számára 2000 márciusában nyitották meg. Eleinte a British Airways, később a Merlin Entertainments mint főszponzor nevét viselte. 2006 májusáig ez volt a világ legmagasabb óriáskereke. Ekkor adták át Nancsangban a Nancsang csillaga nevű, 160 m magas óriáskereket. A London Eye 135 m magas, és a Jubilee Gardens nyugati, a Temze keleti partján, Lambethben fekszik, a Westminster és a Hungerford híd között.";
        $londonEye->save();


        $towerBridge = new Poi();
        $towerBridge->name = "Tower Bridge";
        $towerBridge->location_id = $londonId;
        $towerBridge->image = "img/poi/tower-bridge/tower-bridge.png";
        $towerBridge->description = "A Tower Bridge (vagy Tower híd) közúti híd a Temze fölött, London északi és déli felét köti össze. Neogótikus tornyai és a köztük található felnyitható hídszakasz tette különlegessé, napjainkra London szimbólumává vált.";
        $towerBridge->save();

        $theShard = new Poi();
        $theShard->name = "The Shard";
        $theShard->location_id = $londonId;
        $theShard->image = "img/poi/the-shard/the-shard.png";
        $theShard->description = "A The Shard (további nevek: Shard London Bridge, London Bridge Tower, the Shard of Glass, magyarul Üvegszilánk) egy felhőkarcoló az angliai Londonban, mely Renzo Piano tervei alapján épült. Magassága 309,7 méter, ezzel Európa negyedik legmagasabb épülete, valamint az Egyesült Királyság második legmagasabb szabadon álló építménye a 330 méteres Emley Moor átjátszó állomás után. Az épületet 2012 júliusában adták át.";
        $theShard->save();

        $bigBen = new Poi();
        $bigBen->name = "Big Ben";
        $bigBen->location_id = $londonId;
        $bigBen->image = "img/poi/big-ben/big-ben.png";
        $bigBen->description = "A Big Ben a londoni Westminster-palota toronyórájának harangja, illetve az óraszerkezet neve. Az angol parlament keleti szárnyának végén, egy óratoronyban található. Ismert az óra pontosságáról és a 13,5 tonnás harangról. Az óratorony világszerte London, sőt egész Anglia közismert, általános jelképe.";
        $bigBen->save();
    }
}
