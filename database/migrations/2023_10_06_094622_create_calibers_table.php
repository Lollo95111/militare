<?php


use App\Models\caliber;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calibers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $calibers = [

         '7.62x39mm',
         '9mm',
         '5.56x45mm NATO',
         '.45 ACP',
         '.357 Magnum',
         '10mm Auto',
         '.380 ACP'

        ];




        foreach($calibers as $caliber){


            caliber::create([

             'name'=> $caliber

            ]);

      }





    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calibers');
    }
};
