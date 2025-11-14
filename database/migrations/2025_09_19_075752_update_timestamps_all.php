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
        Schema::table('tags', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(false)->change();
            $table->timestampTz('updated_at')->nullable(true)->change();
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(false)->change();
            $table->timestampTz('updated_at')->nullable(true)->change();
        });
        Schema::table('post_tags', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(false)->change();
            $table->timestampTz('updated_at')->nullable(true)->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(false)->change();
            $table->timestampTz('updated_at')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(true)->change();
            $table->timestampTz('updated_at')->nullable(false)->change();
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(true)->change();
            $table->timestampTz('updated_at')->nullable(false)->change();
        });
        Schema::table('post_tags', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(true)->change();
            $table->timestampTz('updated_at')->nullable(false)->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->timestampTz('created_at')->nullable(true)->change();
            $table->timestampTz('updated_at')->nullable(false)->change();
        });
    }
};
