<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue__diaries', function (Blueprint $table) {
            $table->id();
            $table->string('issue_id');
            $table->string('client_id');
            $table->string('issue_commenter_id')->nullable();
            $table->mediumText('issue_commenter_comment')->nullable();
            $table->string('issue_status');
            $table->string('issue_uploads')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue__diaries');
    }
}
