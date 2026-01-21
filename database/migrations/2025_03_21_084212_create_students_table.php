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
        Schema::disableForeignKeyConstraints();

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('fullname', 150);
            $table->string('nickname', 50)->nullable();
            $table->string('gender', 20);
            $table->date('dob');
            $table->string('pob', 250);
            $table->text('address');
            $table->string('religion', 50);
            $table->string('citizen', 60);
            $table->string('child_order');
            $table->string('sibling_blood');
            $table->string('sibling_step');
            $table->string('sibling_adoption');
            $table->string('status_child', 50);
            $table->string('language', 70);
            $table->string('blood_type', 10);
            $table->string('height');
            $table->string('weight');
            $table->string('disease', 200)->nullable();
            $table->string('imunization', 200)->nullable();
            $table->string('ideal_job', 200)->nullable();
            $table->string('father_name', 150);
            $table->string('mother_name', 150);
            $table->string('father_religion', 50);
            $table->string('mother_religion', 50);
            $table->string('father_citizen', 60);
            $table->string('mother_citizen', 60);
            $table->string('father_last_education', 100);
            $table->string('mother_last_education', 100);
            $table->string('father_job', 100);
            $table->string('mother_job', 100);
            $table->string('father_phone', 20);
            $table->string('mother_phone', 20);
            $table->text('father_address');
            $table->text('mother_address');
            $table->text('father_job_address');
            $table->text('mother_job_address');
            $table->string('guardian_name', 150);
            $table->string('guardian_relation', 50);
            $table->string('guardian_last_education', 100);
            $table->string('guardian_phone', 20);
            $table->string('guardian_job', 100);
            $table->text('guardian_address');
            $table->string('status', 50);
            $table->timestamp('accepted_at')->nullable();
            $table->string('from_school', 150)->nullable();
            $table->string('left_school', 150)->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
