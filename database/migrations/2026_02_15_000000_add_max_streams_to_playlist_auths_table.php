<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('playlist_auths', function (Blueprint $table) {
            $table->unsignedInteger('max_streams')->nullable()->default(null)->after('password');
            $table->boolean('stop_oldest_on_limit')->nullable()->default(false)->after('max_streams');
        });
    }

    public function down(): void
    {
        Schema::table('playlist_auths', function (Blueprint $table) {
            $table->dropColumn(['max_streams', 'stop_oldest_on_limit']);
        });
    }
};
