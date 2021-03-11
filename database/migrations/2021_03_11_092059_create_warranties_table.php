<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('installer_company');
            $table->string('installer_phone')->nullable();
            $table->string('contact_person');
            $table->string('installer_email');
            $table->string('installer_city');
            $table->string('installer_state');
            $table->string('installer_country');
            $table->string('product');
            $table->string('lot_number');
            $table->string('production_date');
            $table->string('vehicle_year');
            $table->string('vehicle_model');
            $table->string('vehicle_make');
            $table->string('vehicle_vin');
            $table->string('installation_date');
            $table->text('protection_area');
            $table->string('purchaser_name');
            $table->string('purchaser_company')->nullable();
            $table->string('purchaser_email');
            $table->string('purchaser_phone')->nullable();
            $table->string('purchaser_city');
            $table->string('purchaser_state');
            $table->string('purchaser_country');
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
        Schema::dropIfExists('warranties');
    }
}
