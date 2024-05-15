<?php

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
        Schema::create('details_import_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('import_invoices_id');
            $table->foreignId('product_id');
            $table->double('import_price');
            $table->double('sale_price');
            $table->integer('quantity');    
            $table->double('money');
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
        Schema::dropIfExists('details_import_invoices');
    }
};
