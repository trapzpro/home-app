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
        Schema::create('paper_orders', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name');
            $table->string('agent_id');
            $table->string('vendor_name');
            $table->string('vendor_name');
            
            
/*
Vendor Name:		Vendor ID/Number:	
Sales Agent ID number			
Selected Bundle:	Solo or BB/Phone Bundle?	Sale Type:	Consumer/SMB
Selected_HSI_Speed:		Current Windstream number: (for broadband adds and upgrades)	
Selected_bundle_adder: Secure/Security/Youtube		Expected Install Date:	
Customer Name:		Modem Rental:	
Customer Email:		Complete below if billing address differs from service address:	
Customer Contact Number:		Billing Address:	
Text Msg Opt in:		Billing City:	
Customer  Service Address:		Billing State:	
County:		Billing Zip Code:	
City:		Phone Book Name (If listing is requested):	
State:		Complete below if customer is porting a number:	
Zip Code:		Current Provider:	Port In Phone No 1:
Authorized Users:		Current Acct No:	Port In Phone No 2:
Additional Contact Number:		Current PIN:	
Referral ID:			
Lifeline QCODE:			
Applying for EBB:			
*/



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
        Schema::dropIfExists('paper_orders');
    }
}
