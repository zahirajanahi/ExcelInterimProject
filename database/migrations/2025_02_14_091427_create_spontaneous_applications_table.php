<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('spontaneous_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->date('dob'); // Date of birth
            $table->string('education_level');
            $table->string('experience')->nullable();
            $table->string('cv_path'); // CV file storage path
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spontaneous_applications');
    }
};
