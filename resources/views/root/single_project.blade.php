@extends('root.layouts.SinglePage.SinglePage')
@section('title')
    {{$viewProject->name}} - MyCOINin CRYPTO FOUND Plarform
@endsection

@section('content')
    <!-- start blog-SinglePage-MainPage-content -->
    <section class="blog-single-main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9 col-md-8 col-sm-12 blog-single-content">
                    <h2>{{$viewProject->name}}</h2>

                    <div class="post">
                        <div class="media">
                            @foreach($projectDetailImages as $key=>$value)
                                <img src="{{asset($value->url)}}" width="870" height="450" alt="{{$viewProject->name}}"
                                     class="img img-responsive">
                            @endforeach

                        </div>
                        <div class="post-title-meta">
                            Тип: @foreach($projectIncomes as $key=>$data)
                                <a href="#{{$data->id}}" class="btn theme-btn">{{$data->name}}</a>&nbsp;
                            @endforeach

                            <h2>{{$viewProject->announce}}</h2>
                            <ul>
                                <li><a href="#">{{$projectCreator->name}}</a></li>
                                <li>{{$viewProject->published}}</li>
                            </ul>
                        </div>
                        <div class="post-body">
                            {!!$viewProject->desc !!}
                        </div>
                        <div class="gallery-post">
                            <div class="gallery">
                                <div>
                                    <img src="{{asset('images/latest-news/blog-detail/img-2.jpg')}}" alt
                                         class="img img-responsive">
                                </div>
                                <div>
                                    <img src="{{asset('images/latest-news/blog-detail/img-3.jpg')}}" alt
                                         class="img img-responsive">
                                </div>
                            </div>

                            <h3>Lorem Ipsum is not simply random text. </h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using making it look like
                                readable English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text</p>
                        </div>
                    </div> <!-- end post -->

                    <div class="tag-share">
                        <div>
                            <span>Категории: </span>
                            <ul class="tag">
                                @foreach($projectCat as $key=>$data)
                                    <li><a href="#{{$data->id}}">{{$data->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <ul class="share">
                                <li><a href="#"><i class="fa fa-facebook"></i>Like</a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i>Tweet</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i>Share</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="comments">
                        <div class="title">
                            <h3><span>2</span> comments</h3>
                        </div>

                        <ol>
                            <li>
                                <div class="article">
                                    <div class="author-pic">
                                        <img src="{{asset('images/latest-news/comments/img-1.jpg')}}" alt>
                                    </div>
                                    <div class="details">
                                        <div class="author-meta">
                                            <div class="name"><h4>Hasib sharif</h4></div>
                                            <div class="date"><span>2 hours ago</span></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. </p>
                                        </div>
                                        <div class="replay">
                                            <button>Replay</button>
                                        </div>
                                    </div>
                                </div>
                                <ol>
                                    <li>
                                        <div class="article">
                                            <div class="author-pic">
                                                <img src="images/latest-news/comments/img-2.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <div class="author-meta">
                                                    <div class="name"><h4>Ahmad sharif</h4></div>
                                                    <div class="date"><span>2 hours ago</span></div>
                                                </div>
                                                <div class="comment-content">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable. </p>
                                                </div>
                                                <div class="replay">
                                                    <button>Replay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="article">
                                            <div class="author-pic">
                                                <img src="images/latest-news/comments/img-2.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <div class="author-meta">
                                                    <div class="name"><h4>Ahmad sharif</h4></div>
                                                    <div class="date"><span>2 hours ago</span></div>
                                                </div>
                                                <div class="comment-content">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable. </p>
                                                </div>
                                                <div class="replay">
                                                    <button>Replay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <div class="article">
                                    <div class="author-pic">
                                        <img src="images/latest-news/comments/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <div class="author-meta">
                                            <div class="name"><h4>Hasib sharif</h4></div>
                                            <div class="date"><span>2 hours ago</span></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. </p>
                                        </div>
                                        <div class="replay">
                                            <button>Replay</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="comment-respond">
                            <h3>Post your comment</h3>
                            <form class="clearfix">
                                <div class="col col-md-4">
                                    <input type="text" class="form-control" placeholder="username..">
                                </div>
                                <div class="col col-md-4">
                                    <input type="email" class="form-control" placeholder="email address..">
                                </div>
                                <div class="col col-md-4">
                                    <input type="text" class="form-control" placeholder="website..">
                                </div>
                                <div class="col col-xs-12">
                                    <textarea class="form-control" placeholder="write.."></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn theme-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end comments -->
                </div> <!-- end blog-SinglePage-content -->
                <div class="col col-lg-3 col-md-4 col-sm-5">


                    <div class="blog-sidebar">

                        <div class="income">
                            <h4>Взнос</h4>
                            <p>цель: <span>{{number_format($viewProject->target, 0, '', ' ')}}</span> USDT</p>
                            @if($viewProject->collected != NULL)
                                <p>Собрано:
                                    <h7>{{number_format($viewProject->collected, 0, '', ' ')}} </h7>
                                    USDT
                                    <h7>({{sprintf("%d%%",($viewProject->collected/$viewProject->target)*100)}})</h7>
                                </p>
                                <div class="progress-in-bar progress-in-color stripes">
                                    <span style="width: {{($viewProject->collected/$viewProject->target)*100}}%"></span>
                                </div>
                            @endif
                            <a href="{{ route('root.donate',$viewProject->id) }}" class="btn theme-btn"
                               style="width: 100%; padding: 20px;">Инвестировать</a>
                            <p class="small text-muted">Минимальный взнос:
                                <text
                                    style="color: #FFFFFF">{{number_format($viewProject->minimum_payment, 0, '', ' ')}}</text>
                                USDT
                            </p>

                            @if(Cookie::get('subscribeProject_'.$viewProject->id) == $viewProject->id)
                                <a href="#" class="income-light-btn disabled">Вы подписаны</a>
                            @else
                                <a href="" data-toggle="modal" data-target="#{{$viewProject->id}}"
                                   class="income-light-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i> Следить</a>
                                {!!App\Http\Controllers\Public\PublicModalController::subscribeModalProject($viewProject->id) !!}
                            @endif
                            <br>
                            <p>Сектор:</p>
                            <a href="projectSector/{{$projectSector->slug}}"><h3 class="text-center">
                                    {{$projectSector->name}}
                                </h3></a>
                            <!-- Предварительная оценка -->

                            <p>Инвестиционный рейтинг</p>
                            <h1 class="text-orange text-uppercase">
                                {{$viewProject->letter_index}}
                            </h1>
                            <h8 class="text-muted text-center small"> {{\App\Models\LetterIndex::where('index_name',$viewProject->letter_index)->first()->desc}}</h8>
                            <div class="half" style="padding: 0;">
                                <div class="tab">
                                    <input id="tab-one" type="checkbox" name="tabs">
                                    <label for="tab-one" class="text-orange mt-3">
                                        <h8>Оценка площадки:
                                            <strong>{{number_format($viewProject->priced_around, 0, '', ' ')}}</strong>
                                            USDT
                                        </h8>
                                    </label>
                                    <div class="tab-content">

                                        <div class="radar-div">

                                            <canvas id="radarChart"></canvas>
                                            <p><strong>Привлекательность</strong></p>

                                            @for($i = 0; $i< (count($data_cart,1)-count($data_cart))/count($data_cart); $i++)
                                                <p>{{$data_cart['labels'][$i]}}- {{$data_cart['desc'][$i]}}
                                                    (<strong>{{$data_cart['data'][$i]}}</strong>)</p>

                                            @endfor
                                        </div>
                                        <script>
                                            var ctx = document.getElementById('radarChart').getContext('2d');
                                            var myChart = new Chart(ctx, {
                                                type: 'radar',
                                                data: {
                                                    labels: @json($data_cart['labels']),
                                                    datasets: [{
                                                        label: false,
                                                        data: @json($data_cart['data']),
                                                        backgroundColor: 'rgba(248,82,12,0.43)',
                                                        borderColor: 'rgba(255,255,255,0.84)',
                                                        hoverBackgroundColor: 'rgb(255,255,255)',
                                                        borderWidth: 1,
                                                        color: 'rgb(255,255,255)',
                                                    }]
                                                },

                                                options: {
                                                    scales: {

                                                        r: {
                                                            min: 0,
                                                            max: 10,
                                                            beginAtZero: true,
                                                            angleLines: {
                                                                color: 'rgba(255,255,255,0.5)'
                                                            },
                                                            grid: {
                                                                display: true,
                                                                color: 'rgba(255,255,255,0.5)'
                                                            },
                                                            ticks: {
                                                                display: false
                                                            },
                                                            pointLabels: {
                                                                color: 'rgba(255,255,255,0.84)',
                                                                fontSize: 10
                                                            }
                                                        },

                                                    },
                                                    plugins: {
                                                        legend: {
                                                            display: false,
                                                        }

                                                    }
                                                }

                                            });
                                        </script>
                                        <p>Если вы инвестируете, то ставите на то, что в будущем {{$viewProject->name}}
                                            будут стоить
                                            более {{number_format($viewProject->priced_around, 0, '', ' ')}} USDT</p>
                                        <p>Подробнее <a href="{{ route('root.faq') }}" class="link-primary">F.A.Q.</a></p>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="widget category-widget">


                            <h3>Category</h3>
                            <ul>
                                <li><a href="#">Food <span class="badge">12</span></a></li>
                                <li><a href="#">Water <span class="badge">20</span></a></li>
                                <li><a href="#">Education <span class="badge">8</span></a></li>
                                <li><a href="#">Africa <span class="badge">45</span></a></li>
                                <li><a href="#">India <span class="badge">33</span></a></li>
                                <li><a href="#">Event <span class="badge">12</span></a></li>
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Recent post</h3>
                            <ul>
                                <li>
                                    <div class="post-pic">
                                        <img src="images/latest-news/thumb/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Micenas placerat nibh loreming fentum</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="images/latest-news/thumb/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Integer suscipit sit amet</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="images/latest-news/thumb/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Praeent vehicula neget tempus</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget archive-widget">
                            <h3>Archive</h3>
                            <ul>
                                <li><a href="#">September 2015 <span class="badge">12</span></a></li>
                                <li><a href="#">August 2015 <span class="badge">20</span></a></li>
                                <li><a href="#">July 2015 <span class="badge">8</span></a></li>
                                <li><a href="#">October 2014 <span class="badge">45</span></a></li>
                                <li><a href="#">January 2014 <span class="badge">33</span></a></li>
                                <li><a href="#">December 2013 <span class="badge">12</span></a></li>
                            </ul>
                        </div>
                        <div class="widget tag-widget">
                            <h3>Tags</h3>
                            <div class="all-tags">
                                <a href="#" class="btn">Team</a>
                                <a href="#" class="btn">Charity</a>
                                <a href="#" class="btn">Volunteer</a>
                                <a href="#" class="btn">Web</a>
                                <a href="#" class="btn">Human</a>
                                <a href="#" class="btn">Education</a>
                                <a href="#" class="btn">UI</a>
                                <a href="#" class="btn">Speech</a>
                                <a href="#" class="btn">News</a>
                                <a href="#" class="btn">2016</a>
                                <a href="#" class="btn">Welfare</a>
                                <a href="#" class="btn">Design</a>
                                <a href="#" class="btn">Event</a>
                            </div>
                        </div>
                        <div class="widget instagram-widget">
                            <h3>Instagram</h3>
                            <ul>
                                <li><a href="#"><img src="images/instagram/img-1.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-2.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-3.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-4.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-5.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-6.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-7.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-8.jpg" alt></a></li>
                                <li><a href="#"><img src="images/instagram/img-9.jpg" alt></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end row -->

    </section>
    <!-- end blog-SinglePage-MainPage-content -->
@endsection
