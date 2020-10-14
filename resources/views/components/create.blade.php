<!-- Modal Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Сделка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('home.store')}}" method="post">
                <div class="modal-body">

                    @csrf
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
                        <input type="text" name="transaction_name" placeholder="Введите название сделки"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Цена</label>
                        <input type="text" name="transaction_amount" placeholder="Введите стоимость"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Дата открытия</label>
                        <input type="date" name="open_date"  class="form-control">
                    </div>

                    <div class="modal-footer">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="width: 100%">
    Создать сделку
</button>

