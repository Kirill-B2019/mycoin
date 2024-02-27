<div class="col-md-12">
    <div class="card shadow">
        <div class="card-body">
            <form method="POST" action="{{ route('adp.createProject')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-10">
                   <h4 class="text-primary">Основная информация</h4>
                    <!-- Название проекта / Родитель-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                              <label for="name">Название проекта<span style="color: #fb5e1c">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="nameHelp" required>
                                <small id="nameHelp" class="form-text text-muted">Обязательное поле до 250 символов</small>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col">

                            <div class="form-group">
                                <label for="name">Относиться к проекту</label>
                                <select class="custom-select" id="custom-select" name="parentID">
                                    <option value="0">...</option>
                                @foreach(\App\Models\Project::all() as $project)
                                        <option value="{{$project->id}}">{{$project->name}}</option>

                                @endforeach
                                </select>
                                <small id="inProject" class="form-text text-muted">Входит в состав проекта (необязательно)</small>
                            </div>


                        </div>
                    </div>
                    <!-- Слоган -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="slogan">Слоган<span style="color: #fb5e1c">*</span></label>
                                <input type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan" name="slogan" aria-describedby="sloganHelp">
                                <small id="sloganHelp" class="form-text text-muted">до 255 символов</small>
                                @error('slogan')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Картинки -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="imageHelp">Изображение анонса<span style="color: #fb5e1c">*</span></label>
                                <input type="file" class="form-control customfile"  id="imageHelp" name="preview_image" aria-describedby="imageHelp" required>
                                <small id="imageHelp" class="form-text text-muted">Обязательное размер 535*300</small>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="imageInSingleHelp">Изображения для страницы проекта<span style="color: #fb5e1c">*</span></label>
                                <input type="file" class="form-control customfile"  id="imageInSingle" name="image[]" multiple required>
                                <small id="imageInSingleHelp" class="form-text text-muted">Обязательное размер 870*354 множественный выбор</small>
                            </div>
                        </div>
                    </div>
                   <!-- Описание анонс-->
                   <div class="row">
                       <div class="col">
                           <div class="form-group">
                               <label for="desc">Краткое описание проекта</label>
                               <div class="form-group">
                                   <textarea class="form-control" name="preview_desc" rows="4"></textarea>
                               </div>
                           </div>
                       </div>
                   </div>
                    <!-- Описание -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="desc">Описание проекта</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="coinIn-editor"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!-- Команда проекта и дополнительно -->
                   <div class="row">
                       <div class="col-10">

                           <div class="row">
                               <!-- Команда проекта -->
                               <div class="col-md-6">
                                   <h3>Команда проекта</h3>
                                   <div class="form-group">
                                       <div class="row">
                                           <div class="col">
                                               <div class="form-group">
                                                   <label for="imageHelp">Аватар<span style="color: #fb5e1c">*</span></label>
                                                   <input type="file" class="form-control customfile"  id="imageHelp" name="item_Avatar" required>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col">
                                               <div class="form-group">
                                                   <label for="item_Name">Имя<span style="color: #fb5e1c">*</span></label>
                                                   <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="item_Name" aria-describedby="nameHelp" required>
                                                   @error('item_Name')
                                                   <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                   @enderror
                                               </div>
                                           </div>
                                           <div class="col">
                                               <div class="form-group">
                                                   <label for="name">Фамилия</label>
                                                   <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="item_LastName" aria-describedby="nameHelp" >
                                                   @error('item_LastName')
                                                   <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                   @enderror
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col">
                                               <div class="form-group">
                                                   <label for="item_Role">Должность<span style="color: #fb5e1c">*</span></label>
                                                   <input type="text" class="form-control "  id="imageHelp" name="item_Role" required>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col">
                                               <div class="form-group">
                                                   <label for="item_Desc">Описание</label>
                                                   <textarea  rows="4" class="form-control @error('name') is-invalid @enderror" id="name" name="item_Desc"  ></textarea>
                                                   @error('item_Role')
                                                   <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                   @enderror
                                               </div>
                                           </div>
                                       </div>


                                   </div>
                               </div>
                               <!-- Дополнительно -->
                               <div class="col">
                                   <h3>Дополнительно</h3>
                                   <div class="form-group">
                                       <label for="site">Сайт</label>
                                       <input type="text" class="form-control "  id="imageHelp" name="site">
                                   </div>
                                   <div class="form-group">
                                       <label for="region">Страна</label>
                                       <input type="text" class="form-control "  id="imageHelp" name="region" >
                                   </div>
                                   <div class="form-group">
                                       <label for="vk">ВК</label>
                                       <input type="text" class="form-control customfile"  id="imageHelp" name="vk" aria-describedby="imageHelp" >
                                   </div>
                                   <div class="form-group">
                                       <label for="instagram">Instagram</label>
                                       <input type="text" class="form-control "  id="instagram" name="instagram" >
                                   </div>
                                   <div class="form-group">
                                       <label for="youtube">YOUTUBE</label>
                                       <input type="text" class="form-control "  id="imageHelp" name="youtube" >
                                   </div>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
                    <!-- Срок, финансы, ктегории и выды дохода -->
                    <div class="col">
                    <h4 class="text-primary">Видимость:</h4>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck_pub" name="published" value="1" checked>
                        <label class="custom-control-label" for="customCheck_pub">Опубликован</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck_main_page" name="onMainPage" value="1">
                        <label class="custom-control-label" for="customCheck_main_page">Срочный на главную</label>
                    </div>
                    <h4 class="text-primary">Тип:</h4>
                    <div class="form-group">
                        @foreach(\App\Models\Sector::all() as $data)
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio{{$data->id}}" name="global_type" class="custom-control-input" value="{{$data->id}}">
                                <label class="custom-control-label" for="customRadio{{$data->id}}">{{$data->name}}</label>
                            </div>
                        @endforeach

                    </div>


                    <h4 class="text-primary">Срок:</h4>
                        <div class="form-group">
                            <label for="start">Начало<span style="color: #fb5e1c">*</span></label>
                            <input type="date" class="form-control customfile"  id="start" name="start" aria-describedby="start" required>
                            <small id="imageHelp" class="form-text text-muted">В формате д.м.г.</small>
                            <label for="stop">Конец</label>
                            <input type="date" class="form-control customfile"  id="stop" name="stop" aria-describedby="stop">
                            <small id="stop" class="form-text text-muted">Оставить пустым - "ДО ЦЕЛИ"</small>
                        </div>
                        <h4 class="text-primary">Финансы</h4>
                        <div class="form-group">
                            <label for="target">Целевой сбор<span style="color: #fb5e1c">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">USDT</span>
                                </div>
                                <input type="text" class="form-control" aria-label="target" name="target" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                                @error('target')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="owner_wallet">Кошелек проекта<span style="color: #fb5e1c">*</span></label>
                            <input type="text" class="form-control @error('owner_wallet') is-invalid @enderror" id="owner_wallet" name="owner_wallet" aria-describedby="nameHelp" required>
                            <small id="nameHelp" class="form-text text-muted">USDT</small>
                            @error('owner_wallet')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="minimum_payment">Минимальный платеж</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">USDT</span>
                                </div>
                                <input type="text" class="form-control" aria-label="minimum_payment" name="minimum_payment">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="collected">Собрано</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">USDT</span>
                                </div>
                                <input type="text" class="form-control" aria-label="collected" name="collected">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="commission">Комиссия площадки</label>
                            <div class="input-group mb-3">

                                <input type="text" class="form-control" aria-label="commission" name="commission">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="info_mail">Email проекта<span style="color: #fb5e1c">*</span></label>
                        <input type="email" class="form-control @error('owner_wallet') is-invalid @enderror" id="info_mail" name="info_mail" aria-describedby="nameHelp" required>
                        <small id="nameHelp" class="form-text text-muted small">информирование</small>
                        @error('owner_wallet')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                     <div class="form-group" name="category">
                            <h4 class="text-primary">Категории проекта:</h4>
                             @foreach(\App\Models\Category::all() as $key=>$data)
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="customCheck_{{$data->id}}" name="categories[]" value="{{$data->id}}">
                                     <label class="custom-control-label" for="customCheck_{{$data->id}}">{{$data->name}}</label>
                                 </div>
                             @endforeach
                     </div>
                     <div class="form-group">
                        <h4 class="text-primary">Вид дохода:</h4>
                        @foreach(\App\Models\Income::all() as $key=>$data)
                         <div class="custom-control custom-checkbox">
                             <input type="checkbox" class="custom-control-input" id="customCheckIncome_{{$data->id}}" name="incomes[]" value="{{$data->id}}">
                             <label class="custom-control-label" for="customCheckIncome_{{$data->id}}">{{$data->name}}</label>
                         </div>
                     @endforeach
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary float-xl-left ml-3 pt-3 pb-3 pl-4 pr-4" type="submit" >Создать новый проект и перейти к редактированию</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>
