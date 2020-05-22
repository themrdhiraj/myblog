<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('profile_image');
           $table->string('profile_designation');
           $table->string('profile_facebook');
           $table->string('profile_twitter');
           $table->string('profile_linkedin');
           $table->string('profile_github');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('profile_image');
           $table->dropColumn('profile_designation');
           $table->dropColumn('profile_facebook');
           $table->dropColumn('profile_twitter');
           $table->dropColumn('profile_linkedin');
           $table->dropColumn('profile_github');
        });
    }
}
