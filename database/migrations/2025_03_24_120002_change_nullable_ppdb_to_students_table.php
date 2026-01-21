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
        Schema::table('students', function (Blueprint $table) {
            $table->string('guardian_name', 150)->nullable()->change();
            $table->string('guardian_relation', 50)->nullable()->change();
            $table->string('guardian_last_education', 100)->nullable()->change();
            $table->string('guardian_phone', 20)->nullable()->change();
            $table->string('guardian_job', 100)->nullable()->change();
            $table->text('guardian_address')->nullable()->change();
            $table->string('status', 50)->nullable()->change();
            $table->string('sibling_blood')->nullable()->change();
            $table->string('sibling_step')->nullable()->change();
            $table->string('sibling_adoption')->nullable()->change();
            $table->string('status_child', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('guardian_name', 150)->nullable(false)->change();
            $table->string('guardian_relation', 50)->nullable(false)->change();
            $table->string('guardian_last_education', 100)->nullable(false)->change();
            $table->string('guardian_phone', 20)->nullable(false)->change();
            $table->text('guardian_address')->nullable(false)->change();
            $table->string('status', 50)->nullable(false)->change();
        });
    }
};
