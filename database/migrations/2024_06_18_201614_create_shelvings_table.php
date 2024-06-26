<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shelvings', function (Blueprint $table) {
            $table->id();
            $table->string('codshel');
            $table->foreignId('topic_id')->references('id')->on('topics');
            $table->timestamps();
        });
        DB::table('shelvings')->insert([
            ['codshel'=>'1', 'topic_id'=>1]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shelvings');
    }
};
