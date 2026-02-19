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
        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn('posts', 'video_URL')) {
                $table->renameColumn('video_URL', 'video_url');
            } else if (!Schema::hasColumn('posts', 'video_url')) {
                $table->string('video_url')->nullable();
            }
            
            if (!Schema::hasColumn('posts', 'thumbnail')) {
                $table->string('thumbnail')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn('posts', 'video_url')) {
                $table->renameColumn('video_url', 'video_URL');
            }
            $table->dropColumn('thumbnail');
        });
    }
};
