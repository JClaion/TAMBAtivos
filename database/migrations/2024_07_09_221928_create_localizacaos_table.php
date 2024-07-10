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
            Schema::create('localizacaos', function (Blueprint $table) {
                $table->id();

                $table->string('floor')->default('Piso qualquer');
                $table->string('room')->default('Sala qualquer');
                $table->unsignedBigInteger('tb_blocksector_idtb_blocksector')->default(0);
                
                $table->timestamps();
            });
        }

        /*

            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('cargo');
                $table->rememberToken();
                $table->timestamps();
            });

        */

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('localizacaos');
        }
    };