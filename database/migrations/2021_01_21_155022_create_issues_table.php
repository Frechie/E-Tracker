<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {

            $table->id();
            $table->text('issue_subject');
            $table->text('issue_description');
            $table->integer('issue_raised_by_uid');
            $table->string('issue_category');
            $table->string('issue_sub_category');
            $table->string('issue_status');
            $table->string('severity');
            $table->string('issue_uploads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  {
        Schema::dropIfExists('issues');
    }
}
