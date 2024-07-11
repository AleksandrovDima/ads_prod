@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="m-2">
                    <div class="mb-3">
                        <a href="{{ route('ad.index') }}">
                            <button class="btn btn-outline-secondary">Назад</button>
                        </a>
                    </div>
                    <div>
                        <div class="text-center mb-4">
                            <h2>Новое объявление</h2>
                        </div>
                        <form action="{{ route('ad.store') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="type" class="form-label">Выберите тип объявления</label>
                                    <select class="form-select" id="type" name="type_id">
                                        @foreach($types as $type)
                                            <option
                                                @if(old('type_id') == $type->id)
                                                    selected
                                                @endif
                                                value="{{ $type->id }}">{{ $type->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="category" class="form-label">Выберите категорию</label>
                                    <select class="form-select" id="category" name="category_id">
                                        @foreach($categories as $category)
                                            <option
                                                @if(old('category_id') == $category->id)
                                                    selected
                                                @endif
                                                value="{{ $category->id }}">{{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Введите название объявления</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                       placeholder="Название" value="{{ old('subject') }}">
                                @error('subject')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description">Опишите недвижимость</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                          placeholder="Описание">{{ old('description') }}</textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="area" class="form-label">Площадь недвижемости в м<sup><small>2</small></sup></label>
                                    <input type="number" min="1" class="form-control" id="number_of_rooms" name="area"
                                           placeholder="Площадь" value="{{ old('area') }}">
                                    @error('area')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="number_of_rooms" class="form-label">Укажите количество комнат</label>
                                    <input type="number" min="1" class="form-control" id="number_of_rooms" name="number_of_rooms"
                                           placeholder="Количество комнат" value="{{ old('number_of_rooms') }}">
                                    @error('number_of_rooms')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="price" class="form-label">Укажите цену в рублях</label>
                                    <input type="number" min="1" class="form-control" id="price" name="price"
                                           placeholder="Цена" value="{{ old('price') }}">
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="contact" class="form-label">Укажите свой номер телефона</label>
                                    <input type="number" min="1" class="form-control" id="contact" name="contact"
                                           placeholder="Телефон" value="{{ old('contact') }}">
                                    @error('contact')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Введите адрес недвижимости</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       placeholder="Адрес" value="{{ old('address') }}">
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
