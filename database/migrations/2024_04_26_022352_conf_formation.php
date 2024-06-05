<?php
use App\Models\Formation;
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
        Schema::create('conf_formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->string('numero');
            $table->string('sexe')->nullable();
            $table->string('ville')->nullable();
            $table->string('diplome')->nullable();
            $table->string('fichier')->nullable();
            $table->string('langue')->nullable();
            $table->string('situation')->nullable();
            $table->date('date_naiss')->nullable();
            $table->integer('condition')->nullable()->default(0);
            $table->foreignIdFor(Formation::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
