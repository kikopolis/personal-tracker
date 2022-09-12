<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(
            'user_invites',
            static function (Blueprint $table) {
                $table->id();
                $table->string('email');
                $table->string('token')->unique();
                $table->timestamp('token_expires_at')->nullable();
                $table->timestamps();
            }
        );
    }
    
    public function down(): void {
        Schema::dropIfExists('user_invites');
    }
};
