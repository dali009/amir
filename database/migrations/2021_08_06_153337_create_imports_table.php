<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('uuid');
            $table->string('post');
            $table->string('material');
            $table->string('production_store');
            $table->string('order');
            $table->string('nomenclature');
            $table->string('designation');
            $table->decimal('quantity_required',8,3);
            $table->decimal('quantity_confirmed',8,3);
            $table->decimal('quantity_withdraw',8,3);
            $table->decimal('quantity_missing',8,3);
            $table->string('unit');
            $table->date('requirement_date');
            $table->string('post_type');
            $table->string('division');
            $table->string('store');
            $table->string('purchase_document');
            $table->string('deleted_post');
            $table->integer('record');
            $table->integer('printed')->default(0);
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
        Schema::dropIfExists('imports');
    }
}
