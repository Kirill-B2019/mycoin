<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\ModalWindow;
use App\Models\Project;
use Illuminate\Http\Request;

class PublicModalController extends Controller
{
    public static function viewTextModal($slug)
    {
        $res = ModalWindow::where('slug',$slug)->first();
        $includeHTML = '
        <div class="modal fade" id="'.$slug.'" tabindex="-1" aria-labelledby="'.$slug.'">
          <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h5 class="modal-title" id="'.$res->name.'">'.$res->name.'</h5>
                </div>
                <div class="modal-body small" align="justify">
                    '.$res->content.'
                </div>
            </div>
          </div>
        </div>'
        ;
        return $includeHTML;
    }

    public static function subscribeModalProject($id)
    {
        $res = Project::where('id',$id)->first();
        $includeHTML = '
        <div class="modal fade" id="'.$id.'" tabindex="-1" aria-labelledby="subscribeModalProject">
          <form method="POST" action="'. route('subscribe-project').'"enctype="multipart/form-data">
                '.csrf_field().'
                 <input type="hidden" name="projectId" value="'.$id.'">
             <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                       <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">
                                  <span>&times;</span>
                                 </button>
                                 <h5 class="modal-title" id="subscribeModalProject">'.$res->name.'</h5>
                       </div>
                       <div class="modal-body small" align="justify">

                       <div class="form-group">
                                <label for="email" class="small">Ваше имя</label>
                                <input type="name" class="form-control" id="name" name="name">
                                 <label for="subscribe_mail" class="small">Ваш email<span style="color: #fb5e1c">*</span></label>
                                <input type="email" class="form-control" id="subscribe_mail" name="subscribe_mail" required>
                            </div>
                                 <button class="btn theme-btn">Получать новости и информацию по проекту</button>
                       </div>
                  </div>
             </div>
          </form>
        </div>'
        ;

        return $includeHTML;
    }
}
