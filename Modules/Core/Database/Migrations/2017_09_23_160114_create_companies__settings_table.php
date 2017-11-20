<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesSettingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies__settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->index('company_id');
            $table->integer('timezone_id')->unsigned()->nullable()->index('timezone_id');
            $table->integer('date_format_id')->unsigned()->nullable()->index('date_format_id');
            $table->integer('datetime_format_id')->unsigned()->nullable()->index('datetime_format_id');
            $table->integer('currency_id')->unsigned()->nullable()->index('currency_id');
            $table->string('ip');
            $table->dateTime('last_login')->nullable();
            $table->text('invoice_terms', 65535)->nullable();
            $table->text('email_footer', 65535)->nullable();
            $table->integer('industry_id')->unsigned()->nullable()->index('industry_id');
            $table->integer('size_id')->unsigned()->nullable()->index('size_id');
            $table->boolean('invoice_taxes')->default(1);
            $table->boolean('invoice_item_taxes')->default(0);
            $table->integer('invoice_design_id')->unsigned()->default(1);
            $table->string('work_phone')->nullable();
            $table->string('work_email')->nullable();
            $table->integer('language_id')->unsigned()->default(1)->index('language_id');
            $table->date('pro_plan_paid')->nullable();
            $table->string('custom_label1')->nullable();
            $table->string('custom_value1')->nullable();
            $table->string('custom_label2')->nullable();
            $table->string('custom_value2')->nullable();
            $table->string('custom_client_label1')->nullable();
            $table->string('custom_client_label2')->nullable();
            $table->boolean('fill_products')->default(1);
            $table->boolean('update_products')->default(1);
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->boolean('hide_quantity')->default(0);
            $table->boolean('hide_paid_to_date')->default(0);
            $table->string('custom_invoice_label1')->nullable();
            $table->string('custom_invoice_label2')->nullable();
            $table->boolean('custom_invoice_taxes1')->nullable();
            $table->boolean('custom_invoice_taxes2')->nullable();
            $table->text('invoice_design', 65535)->nullable();
            $table->string('invoice_number_prefix')->nullable();
            $table->integer('invoice_number_counter')->unsigned()->nullable()->default(1);
            $table->string('quote_number_prefix')->nullable();
            $table->integer('quote_number_counter')->nullable()->default(1);
            $table->boolean('share_counter')->default(1);
            $table->text('email_template_invoice', 65535)->nullable();
            $table->text('email_template_quote', 65535)->nullable();
            $table->text('email_template_payment', 65535)->nullable();
            $table->smallInteger('token_billing_type_id')->default(4);
            $table->text('invoice_footer', 65535)->nullable();
            $table->smallInteger('pdf_email_attachment')->default(0);
            $table->boolean('utf8_invoices')->default(1);
            $table->boolean('auto_wrap')->default(0);
            $table->string('subdomain')->nullable();
            $table->smallInteger('font_size')->default(9);
            $table->text('invoice_labels', 65535)->nullable();
            $table->text('custom_design1', 16777215)->nullable();
            $table->boolean('show_item_taxes')->default(0);
            $table->string('iframe_url')->nullable();
            $table->boolean('military_time')->default(0);
            $table->integer('referral_user_id')->unsigned()->nullable();
            $table->string('email_subject_invoice')->nullable();
            $table->string('email_subject_quote')->nullable();
            $table->string('email_subject_payment')->nullable();
            $table->string('email_subject_reminder1')->nullable();
            $table->string('email_subject_reminder2')->nullable();
            $table->string('email_subject_reminder3')->nullable();
            $table->text('email_template_reminder1', 65535)->nullable();
            $table->text('email_template_reminder2', 65535)->nullable();
            $table->text('email_template_reminder3', 65535)->nullable();
            $table->boolean('enable_reminder1')->default(0);
            $table->boolean('enable_reminder2')->default(0);
            $table->boolean('enable_reminder3')->default(0);
            $table->smallInteger('num_days_reminder1')->default(7);
            $table->smallInteger('num_days_reminder2')->default(14);
            $table->smallInteger('num_days_reminder3')->default(30);
            $table->string('custom_invoice_text_label1')->nullable();
            $table->string('custom_invoice_text_label2')->nullable();
            $table->smallInteger('recurring_hour')->default(8);
            $table->string('invoice_number_pattern')->nullable();
            $table->string('quote_number_pattern')->nullable();
            $table->text('quote_terms', 65535)->nullable();
            $table->smallInteger('email_design_id')->default(1);
            $table->boolean('enable_email_markup')->default(0);
            $table->smallInteger('direction_reminder1')->default(1);
            $table->smallInteger('direction_reminder2')->default(1);
            $table->smallInteger('direction_reminder3')->default(1);
            $table->smallInteger('field_reminder1')->default(1);
            $table->smallInteger('field_reminder2')->default(1);
            $table->smallInteger('field_reminder3')->default(1);
            $table->text('client_view_css', 65535)->nullable();
            $table->date('financial_year_start')->nullable();
            $table->smallInteger('enabled_modules')->default(63);
            $table->smallInteger('enabled_dashboard_sections')->default(7);
            $table->boolean('show_accept_invoice_terms')->default(0);
            $table->boolean('show_accept_quote_terms')->default(0);
            $table->boolean('require_invoice_signature')->default(0);
            $table->boolean('require_quote_signature')->default(0);
            $table->string('tax_name1')->nullable();
            $table->decimal('tax_rate1', 13, 3);
            $table->string('tax_name2')->nullable();
            $table->decimal('tax_rate2', 13, 3);
            $table->integer('quote_design_id')->unsigned()->default(1);
            $table->text('custom_design2', 16777215)->nullable();
            $table->text('custom_design3', 16777215)->nullable();
            $table->string('analytics_key')->nullable();
            $table->string('logo')->nullable();
            $table->integer('logo_width')->unsigned();
            $table->integer('logo_height')->unsigned();
            $table->integer('logo_size')->unsigned();
            $table->boolean('invoice_embed_documents')->default(0);
            $table->boolean('document_email_attachment')->default(0);
            $table->timestamps();
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
        Schema::drop('companies__settings');
    }

}
