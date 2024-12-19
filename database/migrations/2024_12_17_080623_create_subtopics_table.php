<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtopicsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('subtopics', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('topic_id'); // Foreign key for topics
            $table->string('name'); // Subtopic name
            $table->text('description')->nullable(); // Description of the subtopic
            $table->unsignedBigInteger('created_by'); // Foreign key for user who created the subtopic
            $table->unsignedBigInteger('updated_by')->nullable(); // Foreign key for user who last updated the subtopic
            $table->softDeletes(); // Soft delete column
            $table->timestamps(); // Created_at and updated_at
        });

        // Adding foreign key constraints
        Schema::table('subtopics', function (Blueprint $table) {
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('subtopics');
    }
}
