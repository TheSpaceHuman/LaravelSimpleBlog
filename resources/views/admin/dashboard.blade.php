@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">Admin Dashboard</h1>
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-around align-items-center">
                   <div class="label label-primary">Категории 0</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-around align-items-center">
                    <div class="label label-primary">Материалы 0</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-around align-items-center">
                    <div class="label label-primary">Всего посетителей 0</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-around align-items-center">
                    <div class="label label-primary">Сегодня посетителей 0</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Первая категория</h4>
                    <p class="list-group-item-text">Количество категорий</p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Первый материал</h4>
                    <p class="list-group-item-text">Количество материалов</p>
                </a>
            </div>
        </div>
    </div>

@endsection