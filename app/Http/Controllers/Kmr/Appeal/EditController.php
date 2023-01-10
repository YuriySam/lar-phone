<?php

namespace App\Http\Controllers\Kmr\Appeal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Appeal;
use App\Models\Street;
use App\Models\Type_docum;
use App\Models\Question_docum;
use App\Models\Office;
use App\Models\Amount_docum;
use App\Models\Content_resolution;
use App\Models\Ophone;
use App\Models\Branch;
use App\Models\Title_implementation;
use App\Models\Validity;

class EditController extends BaseController
{
    public function __invoke(Appeal $appeal)
    {

        // $streets = Street::All();
        $streets = Street::orderBy('street')->orderBy('house', 'asc')->get();
        $type_docums = Type_docum::All();
        $question_docums = Question_docum::All();
        $destination_offices = Office::All();
        $source1_offices  = Office::All();
        $source2_offices  = Office::All();
        $amount_docums  = Amount_docum::All();
        $content_resolutions  = Content_resolution::All();
        $avtor_resolutions = Ophone::All();
        $executor_ophones = Ophone::All(); //Виконавець (executor_ophone_id)
        $executor_branches = Branch::All(); //Структурний підрозділ (executor_branch_id)
        $title_implementations = Title_implementation::All(); // Результат розгляду title_Implementation
        $validities = Validity::All(); // Обгрунтованість validity
        //    dd('appeal.EditController' );
        $appeals = Appeal::All();
        return view('kmr.appeal.edit',  compact('appeal', 'appeals', 'streets', 'type_docums', 'question_docums', 'destination_offices', 'source1_offices', 'source2_offices', 'amount_docums', 'content_resolutions', 'avtor_resolutions', 'executor_ophones', 'executor_branches', 'title_implementations', 'validities'));
    }
}
