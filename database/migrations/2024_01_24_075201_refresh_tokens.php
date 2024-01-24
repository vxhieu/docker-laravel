<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasTable('refresh_tokens')) {
            Schema::create('refresh_tokens', function (Blueprint $table) {
                $table->id();
                $table->foreignId("token_id")->constrained('personal_access_tokens');
                $table->string('token', 255);
                $table->timestamp('expires_at')->nullable();
                $table->timestamps();
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('refresh_tokens');
    }
};
