<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("join_id");
            $table->unsignedBigInteger("material_id");
            $table->unsignedBigInteger("range_id");
            $table->unsignedBigInteger("opening_id");
            $table->unsignedBigInteger("leave_id");
            $table->unsignedBigInteger("installation_id");
            $table->unsignedBigInteger("totalheight_id");
            $table->unsignedBigInteger("totalwidth_id");
            $table->unsignedBigInteger("insulation_id");
            $table->unsignedBigInteger("aeration_id");
            $table->unsignedBigInteger("glazing_id");
            $table->unsignedBigInteger("color_id");
            $table->string("price");
            $table->string("state_order")->default("0");
            $table->string("state_deliver")->default("0");
            $table->string("mode");
            $table->unsignedBigInteger("project_id")->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('join_id')->references('id')->on('joins')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
            $table->foreign('range_id')->references('id')->on('ranges')->onDelete('cascade');
            $table->foreign('opening_id')->references('id')->on('openings')->onDelete('cascade');
            $table->foreign('leave_id')->references('id')->on('leaves')->onDelete('cascade');
            $table->foreign('installation_id')->references('id')->on('installations')->onDelete('cascade');
            $table->foreign('totalheight_id')->references('id')->on('totalheights')->onDelete('cascade');
            $table->foreign('totalwidth_id')->references('id')->on('totalwidths')->onDelete('cascade');
            $table->foreign('insulation_id')->references('id')->on('insulations')->onDelete('cascade');
            $table->foreign('aeration_id')->references('id')->on('aerations')->onDelete('cascade');
            $table->foreign('glazing_id')->references('id')->on('glazings')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
