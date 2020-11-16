<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nov16AddsFieldsToNexoposOrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nexopos_orders_products', function (Blueprint $table) {
            if ( ! Schema::hasColumn( 'nexopos_orders_products', 'return_condition' ) ) {
                $table->string( 'return_condition' )->nullable();
            }

            if ( ! Schema::hasColumn( 'nexopos_orders_products', 'return_observations' ) ) {
                $table->text( 'return_observations' )->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nexopos_orders_products', function (Blueprint $table) {
            if ( Schema::hasColumn( 'nexopos_orders_products', 'return_condition' ) ) {
                $table->dropColumn( 'return_condition' );
            }

            if ( Schema::hasColumn( 'nexopos_orders_products', 'return_observations' ) ) {
                $table->dropColumn( 'return_observations' );
            }
        });
    }
}
