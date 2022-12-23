<?php

namespace App\Http\Requests\Appeal;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//  dd('storerequest');
        
        return [
'number'                    => '',                      
'data_reg'                  => '',
'number_reg'                => '',
'surname_reg'               => '',
'name_reg'                  => '',             
'patronymic'                => '',              
'street_id'                 => '',
'street_txt'                => '',
'phone_reg'                 => '',
'type_docum_id'             => '',                 
'type_docum_txt'            => '',
'question_docum_id'         => '',             
'content_docum'             => '',
'income_number'             => '',           
'income_date'               => '', 
'destination_office_id'     => '',
'destination_office_txt'    => '',  
'destination_number'        => '',
'destination_date'          => '',            
'source1_office_id'         => '',          
'source1_office_txt'        => '',    
'source1_number'            => '',    
'source1_date'              => '',          
'source2_office_id'         => '',          
'source2_office_txt'        => '',    
'source2_number'            => '',    
'source2_date'              => '',          
'source3_office_id'         => '',          
'source3_office_txt'        => '',    
'source3_number'            => '',
'source3_date'              => '',    
'amount_docum_id'           => '',    
'amount_docum_txt'          => '',
'content_resolution_id'     => '',    
'content_resolution_txt'    => '',
'avtor_resolution'          => '',
'group_docum_id'            => '',    
'group_docum_txt'           => '',
'executor_ophone_id'        => '',    
'executor_ophone_txt'       => '',
'executor_branch_id'        => '',    
'executor_branch_txt'       => '',
'data_implementation'       => '',     
'namber_implementation'     => '',
'title_implementation_id'   => '',     
'title_implementation_txt'  => '',
'validity_id'               => '',     
'validity_txt'              => '',
'data_our_implementation'   => '',     
'namber_our'                => '',
'date_removal_control'      => '',     
'name_removal_control'      => '',
'notes'                     => '',
'user_id'                   => '',     
'user_id_txt'               => '',


           

        ];
        
    }
}
