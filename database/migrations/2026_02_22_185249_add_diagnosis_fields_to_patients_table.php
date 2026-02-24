<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends \Illuminate\Database\Migrations\Migration
{
    public function up(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            if (!Schema::hasColumn('patients', 'bp')) {
                $table->string('bp')->nullable();
            }
            if (!Schema::hasColumn('patients', 'temp')) {
                $table->string('temp')->nullable();
            }
            if (!Schema::hasColumn('patients', 'weight')) {
                $table->integer('weight')->nullable();
            }
            if (!Schema::hasColumn('patients', 'diagnosis')) {
                $table->text('diagnosis')->nullable();
            }
            if (!Schema::hasColumn('patients', 'medical_notes')) {
                $table->text('medical_notes')->nullable();
            }
            if (!Schema::hasColumn('patients', 'attachment')) {
                $table->string('attachment')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn(['bp', 'temp', 'weight', 'diagnosis', 'medical_notes', 'attachment']);
        });
    }
};
