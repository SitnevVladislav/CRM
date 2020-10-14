@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Заявки') }}</div>

                    <div class="card-body">
                        @foreach($application as $el)
                            <div class="alert alert-info">
                                <!-- Delete Transaction -->
                                <form action="{{ route('home.destroy',$el->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </form>
                                <!-- End Delete Transaction -->
                                <h6>#{{$el->id}}</h6>
                                <h3>{{$el->transaction_name}}</h3>
                                <h5>{{$el->transaction_amount}} $</h5>
                                <h6><small>{{$el->open_date}}</small></h6>
                                <a href="{{route('home.edit',$el->id)}}" type="button" class="btn btn-light" style="width: 100%">
                                    Редактировать
                                </a>
                            </div>

                        @endforeach
                                <!-- Modal Create -->
                                <x-create></x-create>
                                <!-- End Modal Create -->
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Переговоры') }}</div>

                    <div class="card-body">
                        @foreach($negotiation as $el)
                            <div class="alert alert-info">
                                <!-- Delete Transaction -->
                                <form action="{{ route('home.destroy',$el->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </form>
                                <!-- End Delete Transaction -->
                                <h6>#{{$el->id}}</h6>
                                <h3>{{$el->transaction_name}}</h3>
                                <h5>{{$el->transaction_amount}} $</h5>
                                <h6><small>{{$el->open_date}}</small></h6>
                                <a href="{{route('home.edit',$el->id)}}" type="button" class="btn btn-light" style="width: 100%">
                                    Редактировать
                                </a>
                            </div>

                        @endforeach


                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Завершенные') }}</div>

                    <div class="card-body">
                        @foreach($completed as $el)
                            <div class="alert alert-info">
                                <!-- Delete Transaction -->
                                <form action="{{ route('home.destroy',$el->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </form>
                                <!-- End Delete Transaction -->
                                <h6>#{{$el->id}}</h6>
                                <h3>{{$el->transaction_name}}</h3>
                                <h5>{{$el->transaction_amount}} $</h5>
                                <h6><small>{{$el->open_date}}</small></h6>
                                <a href="{{route('home.edit',$el->id)}}" type="button" class="btn btn-light" style="width: 100%">
                                    Edit
                                </a>
                            </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
