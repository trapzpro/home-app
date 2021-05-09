<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wnsls_paper_orders', function (Blueprint $table) {
            $table->id();
            $table->string('created_by');
            
            $table->string('vendor_name');
            $table->string('vendor_ex_id');
            $table->string('agent_empid');
            $table->string('sale_type');
            $table->string('bundle_type');
            $table->string('speed')->nullable();
            $table->json('bundle_adders')->nullable();
            $table->string('cust_name');
            $table->string('cust_email');
            $table->string('cust_cbr');
            $table->string('cust_opt_in');
            $table->string('service_address_line_1');
            $table->string('service_address_line_2')->nullable();
            $table->string('service_address_county')->nullable();
            $table->string('service_address_city');
            $table->string('service_address_state');
            $table->string('service_address_zip');
            $table->string('service_address_uqual_id')->nullable();
            $table->string('install_date')->nullable();
            $table->string('cust_existing_tn')->nullable();
            $table->string('billing_same_as_service');
            $table->string('billing_address_line_1')->nullable();
            $table->string('billing_address_line_2')->nullable();
            $table->string('billing_address_city')->nullable();
            $table->string('billing_address_state')->nullable();
            $table->string('billing_address_zip')->nullable();
            $table->string('phonebook_name')->nullable();
            $table->string('port_provider')->nullable();
            $table->string('port_account_number')->nullable();
            $table->string('port_in_tn1')->nullable();
            $table->string('port_in_tn2')->nullable();
            $table->string('port_pin')->nullable();
            $table->json('auth_users')->nullable();
            $table->string('additional_cbr')->nullable();
            $table->string('referral_id')->nullable();
            $table->string('lifeline_qcode')->nullable();
            $table->string('apply_for_ebb')->nullable();
            $table->string('worked_status')->default('New');
            $table->boolean('worked');
            $table->string('so_nmbr')->nullable();
            $table->string('worked_notes')->nullable();
            $table->string('worked_by')->nullable();
            $table->datetime('worked_at')->nullable();
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
        Schema::dropIfExists('wnsls_paper_orders');
    }
}
