<!-- Modal Edit -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">


                    <form action="{{route('home.update',$tr->id)}}" method="post">
                        <div class="modal-body">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary active">
                                        <input type="radio" name="statement" value="Application" checked> Заявка
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="statement"  value="Negotiation"> Переговоры
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="statement"  value="Completed"> Завершена
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Название сделки</label>
                                <input type="text" name="transaction_name" id="transaction_name" placeholder="Введите название сделки"  class="form-control"
                                       value="{{$tr->transaction_name}}">
                            </div>


                            <div class="form-group">
                                <label>Цена</label>
                                <input type="text" name="transaction_amount" id="transaction_amount"
                                       value="{{$tr->transaction_amount}}" placeholder="Введите стоимость"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Дата открытия</label>
                                <input type="date" name="open_date" id="open_date"
                                       value="{{$tr->open_date}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Условия</label>
                                <input type="text" name="terms" id="terms"
                                       value="{{$tr->terms}}" placeholder="Введите условия сделки"  class="form-control">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection
