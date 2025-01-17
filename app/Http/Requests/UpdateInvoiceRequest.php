<?php

namespace App\Http\Requests;

use App\Models\Invoice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInvoiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('invoice_edit');
    }

    public function rules()
    {
        return [
            'payment_type' => [
                'required',
            ],
            'paid_ammount' => [
                'required',
            ],
            'id_central_invoice' => [
                'string',
                'required',
            ],
        ];
    }
}
