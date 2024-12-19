<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Topic name
            $table->text('description')->nullable(); // Description of the topic
            $table->unsignedBigInteger('created_by'); // Foreign key for user who created the topic
            $table->unsignedBigInteger('updated_by')->nullable(); // Foreign key for user who last updated the topic
            $table->softDeletes(); // Soft delete column
            $table->timestamps(); // Created_at and updated_at
        });

        // Adding foreign keys
        Schema::table('topics', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade'); // Foreign key constraint for created_by
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null'); // Foreign key constraint for updated_by
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
