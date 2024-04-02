<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('discord_id')->after('id')->nullable()->change();
            $table->string('discord_token', 100)->nullable()->change();
            $table->string('discord_refresh_token', 100)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('discord_id')->after('id')->nullable()->change();
            $table->string('discord_token', 100)->change();
            $table->string('discord_refresh_token', 100)->change();
        });
    }
};
