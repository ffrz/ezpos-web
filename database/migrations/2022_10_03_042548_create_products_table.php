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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->enum('type', ['nonstocked', 'stocked', 'service', 'composite'])
                ->default('nonstocked');
            $table->string('barcode', 100)->default('');
            $table->string('uom', 20)->default('');
            $table->boolean('active')->default(false);
            $table->string('description', 100)->default('');
            $table->integer('stock')->default(0);
            $table->decimal('cost', 12, 2)->default(0.);
            $table->decimal('price', 12, 2)->default(0.);
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
        Schema::dropIfExists('products');
    }
};
