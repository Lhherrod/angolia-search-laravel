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
        Schema::create('project_creators', function (Blueprint $table) {
            $table->id();
            $table->string('project_creator_name');
            $table->integer('number_of_projects');
            $table->integer('number_of_completed_projects');
            $table->integer('number_of_non_completed_projects');
            $table->integer('number_of_deployed_projects');
            $table->integer('number_of_current_projects_in_production');
            $table->integer('number_of_current_projects_in_development');
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
        Schema::dropIfExists('project_creators');
    }
};
