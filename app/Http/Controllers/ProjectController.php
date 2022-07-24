<?php

namespace App\Http\Controllers;

use App\Models\Army1;
use App\Models\Army1SpecialEvent;
use App\Models\Army2;
use App\Models\Army2SpecialEvent;
use App\Models\Soldier;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function createArmy1(Request $request)
    {
       $request->validate([
          'army1' => 'required'
       ]);

       $number_of_soldiers = (int)$request->army1;



       for ($i=0; $i < $number_of_soldiers; $i++) {
        $soldier = new Army1();
        $soldier->power = rand(50, 200);
        $soldier->health = rand(50, 150);
        $soldier->morality = rand(50, 100);
        $soldier->save();
       }


        return redirect()->back()
        ->with('message', 'You just created a '.$number_of_soldiers.' strong soldiers of Army 1');

     }

    public function createArmy2(Request $request)
    {
        $request->validate([
            'army2'=> 'required'
         ]);

         $number_of_soldiers = (int)$request->army2;



         for ($i=0; $i < $number_of_soldiers; $i++) {
          $soldier = new Army2();
          $soldier->power = rand(50, 200);
          $soldier->health = rand(50, 150);
          $soldier->morality = rand(50, 100);
          $soldier->save();
         }


         return redirect()->back()
        ->with('message', 'You just created a '.$number_of_soldiers.' strong soldiers of Army 2');

    }

    public function startBattle()
    {

          $army1 = Army1::all();
          $army2 = Army2::all();

         // Random specijalni dogadjaj za obe armije

         $event_army_1 = Army1SpecialEvent::all()->random();
         $event_army_2 = Army2SpecialEvent::all()->random();



         // Specifikacije Armije 1

          $power_army1 = (int)$army1->sum('power');
          $health_army1 = (int)$army1->sum('health');
          $motivation_army1 = (int)$army1->sum('morality');

          // Ukupna snaga armiije ce biti power + health uvecani za 30% na motivaciju + specijalni dogadjaj
          $total_strength_army1 = ($power_army1 +  $health_army1 + $motivation_army1 * 0.3) * ($event_army_1->value);


          // Specifikacije Armije 2



          $power_army2 = (int)$army2->sum('power');
          $health_army2 = (int)$army2->sum('health');
          $motivation_army2 = (int)$army2->sum('morality');

          $total_strength_army2 = ($power_army2 + $health_army2 + $motivation_army2 * 0.3) * ($event_army_2->value);




          // Napad --- Armija koja ima vise vojnika krece u napad, ako je broj vojnika isti
          // Armija 1 krece prva u napad

         $attack = ($army1->count() < $army2->count())? 'Army 2 attack Huuurraaa!!!': 'Army 1 attack Huuurrraaa!!!';

         // Special event



         // Pobednik bitke je onaj koji ima veci 'totalStrenght ili ukupnu snagu'
         // ako im je snaga ista, onda nece biti pobednika

         if($total_strength_army1 < $total_strength_army2){
            $winner = "Army 2 is the winner of this battle!";
         }elseIf($total_strength_army1 > $total_strength_army2){
            $winner = "Army 1 is the winner of this battle!";
         }else{
            $winner = "There is no winner in this battle";
         }



        return view('battleResult', compact('army1','army2', 'event_army_1', 'event_army_2', 'total_strength_army1',
        'total_strength_army2', 'attack', 'winner'));

    }

    public function resetBattle()
    {
        Army1::truncate();
        Army2::truncate();

        return redirect('/');
    }

}
