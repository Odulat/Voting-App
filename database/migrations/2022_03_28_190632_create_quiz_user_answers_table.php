<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateQuizUserAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_user_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('quiz_user_id');
            $table->unsignedInteger('user_variant');
            $table->boolean('is_correct')->default(0);
            $table->timestamp('created_at)')
                ->useCurrent();
            $table->timestamp('updated_at')
                ->default(
                    DB::raw(
                        'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
                    )
                )
            ;
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_user_answers');
    }
}
