<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            // 1. ข้อมูลส่วนตัว
            $table->string('employee_code')->unique();
            $table->string('title_th');
            $table->string('gender');
            $table->string('first_name_th');
            $table->string('last_name_th');
            $table->string('first_name_en');
            $table->string('last_name_en');
            $table->string('national_id', 13)->unique();
            $table->date('birth_date');
            $table->string('blood_group')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();

            // 2. ข้อมูลการติดต่อ
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('line_id')->nullable();
            $table->text('address')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_code', 5)->nullable();

            // 3. ผู้ติดต่อกรณีฉุกเฉิน
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_relation')->nullable();

            // 4. ข้อมูลการทำงาน
            $table->string('department');
            $table->string('job_title');
            $table->string('employment_type')->nullable();
            $table->date('start_date');
            $table->decimal('salary', 12, 2)->nullable();

            // 5. ข้อมูลการเงิน
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('tax_id')->nullable();

            // 6. การศึกษาและหมายเหตุ
            $table->string('education_level')->nullable();
            $table->string('institution')->nullable();
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};