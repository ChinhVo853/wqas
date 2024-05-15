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
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('types');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brand');
        });

        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });
        
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('color_id')->references('id')->on('colors');
        });
        
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('size_id')->references('id')->on('sizes');
        });

        Schema::table('import_invoice', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brand');
        });
        
        Schema::table('details_import_invoices', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('details_import_invoices', function (Blueprint $table) {
            $table->foreign('import_invoices_id')->references('id')->on('import_invoice');
        });

        Schema::table('invoice', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customer');
        });

        Schema::table('invoice_details', function (Blueprint $table) {
            $table->foreign('invoice_id')->references('id')->on('invoice');
        });

        Schema::table('invoice_details', function (Blueprint $table) {
            $table->foreign('product_details_id')->references('id')->on('product_details');
        });

        Schema::table('image', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('evaluate', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('evaluate', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign');
    }
};
