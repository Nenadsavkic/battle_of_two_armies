<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmy1SpecialEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('army1_special_events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('value');
            $table->timestamps();
        });

        DB::table('army1_special_events')->insert([
            [
                'id' => 1,
                'name' => 'death_of_general_army1',
                'description' => 'General of Army 1 died in battle',
                'value' => 0.5
            ],
            [
                'id' => 2,
                'name' => 'no_event',
                'description' => 'No special event for Army 1',
                'value' => 1.0
            ],
            [
                'id' => 3,
                'name' => 'general_motivation_army1',
                'description' => 'General of Army1: Heroes of Army 1 follow me into glory Hurraaaa!!!',
                'value' => 1.3
            ],
            [
                'id' => 4,
                'name' => 'no_event',
                'description' => 'No special event for Army 1',
                'value' => 1.0
            ],
            [
                'id' => 5,
                'name' => 'drop_of_motivation_army1',
                'description' => 'Soldiers of Army 1 lost their motivation',
                'value' => 0.8
            ]
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('army1_special_events');
    }
}
