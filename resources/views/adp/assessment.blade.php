@extends('adp.layouts.Adm')
@section('title')
    Инвестиционная оценка проекта - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
         <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Инвестиционная оценка проекта</h2>
                        <div class="row my-4">
                            <!-- Small table -->
                            <div class="col-md-12">
                                <div class="card shadow">

                                    <form method="POST"
                                          action="{{ route('adp.preCalculation', ['id' => $Project->id])}}">
                                        @csrf
                                        <div class="card-body">
                                            <!-- table -->
                                            <div class="row">
                                                <div class="col-8">

                                                    <table class="table table-borderless table-striped"
                                                           style="width: 100%">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th>Обозначение</th>
                                                            <th>Привлекательность</th>
                                                            <th></th>
                                                            <th>Значение</th>
                                                            <th>Описание</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($allAttractivenesses as $allAttractiveness)
                                                            @if($select_data != NULL && array_key_exists($allAttractiveness->id, $select_data)  )
                                                                    <?php $value = $select_data[$allAttractiveness->id]; ?>
                                                            @else
                                                                    <?php $value = 1; ?>
                                                            @endif
                                                            <tr>
                                                                <td>{{$allAttractiveness->name}}</td>
                                                                <td>{{$allAttractiveness->desc}}</td>
                                                                <td>
                                                                    <div class="slider">
                                                                        <input
                                                                            type="range"
                                                                            min="1"
                                                                            max="10"
                                                                            value="{{$value}}"
                                                                            oninput="rangeValue_{{$allAttractiveness->id}}.innerText = this.value"
                                                                            name="AttractivenessID[{{$allAttractiveness->id}}]"
                                                                        >

                                                                    </div>

                                                                </td>
                                                                <td class="text-center"><p
                                                                        id="rangeValue_{{$allAttractiveness->id}}"
                                                                        class="h3">{{$value}}</p></td>
                                                                <td></td>

                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                    <button class="btn btn-primary" type="submit">Предварительный
                                                        расчет
                                                    </button>
                                                    <button class="btn btn-primary"
                                                            formaction="{{ route('Adm.calculation', ['id' => $Project->id])}}"
                                                            type="submit">Опубликовать расчет
                                                    </button>

                                                </div>
                                                <div class="col">
                                                    <H1>{{$Project->name}}</H1>
                                                    <p>{!! $Project->announce !!}</p>

                                                    @if($widthSectorLetter != NULL)
                                                        <input type="hidden" name="letter_index"
                                                               value="{{$widthSectorLetter->index_name}}">
                                                        <p><span class="h1">{{$widthSectorLetter->index_name}}</span>
                                                            ({{$widthSectorLetter->desc}})</p>
                                                    @endif
                                                    <div class="form-group">
                                                        <label for="target">Оценка площадки<span style="color: #fb5e1c">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">USDT</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="target"
                                                                   name="priced_around"
                                                                   value="{{number_format($priced_around, 0, '', ' ')}}"
                                                                   required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <H3>Сектор</H3>
                                                    @foreach($allSectors as $allSector)

                                                        <div class="custom-control custom-radio">
                                                            @if($global_type == $allSector->id)
                                                                <input type="radio" id="customRadio{{$allSector->id}}"
                                                                       name="global_type" class="custom-control-input"
                                                                       value="{{$allSector->id}}" checked="true">
                                                            @else
                                                                <input type="radio" id="customRadio{{$allSector->id}}"
                                                                       name="global_type" class="custom-control-input"
                                                                       value="{{$allSector->id}}">
                                                            @endif
                                                            <label class="custom-control-label"
                                                                   for="customRadio{{$allSector->id}}"><span
                                                                    class="h4">{{$allSector->ratio}}</span>
                                                                - {{$allSector->name}}  </label>
                                                        </div>
                                                    @endforeach
                                                    <div class="radar-div">
                                                        <canvas id="radarChart"></canvas>
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
                                                </div>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div> <!-- simple table -->
                        </div> <!-- end section -->
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </main> <!-- MainPage -->
@endsection
