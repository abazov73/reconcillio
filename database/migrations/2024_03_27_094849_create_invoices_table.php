<?php

use App\Models\Reconcillio\Invoice;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName;

    public function __construct()
    {
        $this->tableName = (new Invoice())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasTable($this->tableName)) {
            Schema::create($this->tableName, function (Blueprint $table) {
                $table->id();
                $table->string('number')->min(1)->max(100);
                $table->date('due_date')->nullable();
                $table->date('send_date')->nullable();
                $table->boolean('is_sent')->default(false);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->tableName);
    }
};
