<?php

use App\Models\Attribution;
use App\Models\Materiel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribution_materiel', function (Blueprint $table) {
            $table->foreignIdFor(Attribution::class)->constrained();
            $table->foreignIdFor(Materiel::class)->constrained();
            $table->text('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribution_materiel');
    }
};
