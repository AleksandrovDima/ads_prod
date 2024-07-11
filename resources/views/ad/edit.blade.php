@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="m-2">
                    <div class="mb-3 m-2">
                        <a href="{{ route('ad.show', $ad->id) }}">
                            <button class="btn btn-outline-secondary">Назад</button>
                        </a>
                    </div>
                    <div>
                        <div class="text-center mb-4">
                            <h2>Редактирование</h2>
                        </div>
                        <form action="{{ route('ad.update', $ad->id) }}" method="post">
                            @csrf
                            @method('patch')

                            <div class="row">
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="type" class="form-label">Тип объявления</label>
                                    <select class="form-select" id="type" name="type_id">
                                        @foreach($types as $type)
                                            <option
                                                @if($type->id === $ad->type_id)
                                                    selected
                                                @endif
                                                value="{{ $type->id }}">{{ $type->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="category" class="form-label">Категория</label>
                                    <select class="form-select" id="category" name="category_id">
                                        @foreach($categories as $category)
                                            <option
                                                @if($category->id === $ad->category_id)
                                                    selected
                                                @endif
                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Название</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                       value="{{ $ad->subject }}">
                            </div>

                            <div class="mb-3">
                                <label for="description">Описание</label>
                                <textarea class="form-control" id="description" name="description"
                                          rows="3">{{ $ad->description }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="area" class="form-label">Площадь недвижемости в м<sup><small>2</small></sup></label>
                                    <input type="number" class="form-control" id="number_of_rooms" name="area"
                                           value="{{ $ad->area }}">
                                </div>

                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="number_of_rooms" class="form-label">Количество комнат</label>
                                    <input type="number" class="form-control" id="number_of_rooms" name="number_of_rooms"
                                           value="{{ $ad->number_of_rooms }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="price" class="form-label">Укажите цену в рублях</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                           value="{{ $ad->price }}">
                                </div>

                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="contact" class="form-label">Укажите свой номер телефона</label>
                                    <input type="number" class="form-control" id="contact" name="contact"
                                           value="{{ $ad->contact }}">
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Введите адрес недвижимости</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                           value="{{ $ad->address }}">
                                </div>
                            </div>
                            <div class="m-2">
                                <button type="submit" class="btn btn-outline-primary">Изменить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
