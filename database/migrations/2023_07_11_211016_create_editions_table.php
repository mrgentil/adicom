<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->string('place');
            $table->string('subject');
            $table->integer('visitor');
            $table->integer('speakers_experts');
            $table->integer('panels_keynotes');
            $table->integer('influencers');
            $table->integer('masterclass')->nullable();
            $table->integer('side_event')->nullable();
            $table->integer('exclusive_study')->nullable();
            $table->integer('nationalities_represented')->nullable();
            $table->string('day_of_meetings')->nullable();
            $table->float('connections')->nullable();
            $table->integer('formations')->nullable();
            $table->integer('gust_vip')->nullable();
            $table->integer('person_connected')->nullable();
            $table->integer('interaction_live')->nullable();
            $table->integer('create_content')->nullable();
            $table->integer('anniv_ceremonie')->nullable();
            $table->string('image1');
            $table->string('image2');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editions');
    }
};
