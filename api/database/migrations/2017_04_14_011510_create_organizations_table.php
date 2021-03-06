<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('mission_statement', 2000)->nullable();
            $table->json('last_response')->nullable()->default(null);
            $table->timestamp('last_response_at')->nullable()->default(null);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE organizations ADD geometry GEOMETRY NOT NULL');
        DB::statement('ALTER TABLE organizations ADD SPATIAL INDEX(geometry)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
