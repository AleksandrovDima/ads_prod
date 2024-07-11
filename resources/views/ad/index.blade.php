@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="m-2">
                    <div class="col-md-6 ms-auto">
                        <form action="{{ route('ad.index') }}" method="get">
                            <div class="input-group mb-3">
                                <input type="search" name="subject" id="form1" class="form-control rounded"
                                       placeholder="По названию"
                                       aria-label="Search" aria-describedby="search-addon"/>
                                <button type="submit" class="btn btn-outline-primary">
                                    Поиск
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('ad.index') }}" method="get">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="type" class="form-label">Выберите тип объявления</label>
                                    <select class="form-select" id="type" name="type_id">
                                        @foreach($types as $type)
                                            <option
                                                @if(isset($request['type_id']))
                                                    @if ($type->id == $request['type_id'])
                                                        selected
                                                @endif
                                                @endif
                                                value="{{ $type->id }}">
                                                @if($type->title == 'продажа')
                                                    купить
                                                @else
                                                    снять
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <label for="category" class="form-label">Выберите категорию</label>
                                    <select class="form-select" id="category" name="category_id">
                                        @foreach($categories as $category)
                                            <option
                                                @if(isset($request['category_id']))
                                                    @if($category->id == $request['category_id'])
                                                        selected
                                                @endif
                                                @endif
                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 ms-auto mb-2">
                                <button type="submit" class="btn btn-outline-primary">Применить</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <div class="text-center mb-4">
                                <h2>Объявления:</h2>
                        </div>
                        <hr>
                        @foreach($ads as $ad)
                            <div class="mb-3">
                                <a class="text-decoration-none text-black" href="{{ route('ad.show', $ad->id) }}">
                                    <div class="container-fluid">
                                        <div class="row m-2">
                                            <div class="col-xs-12 col-md-6">
                                                <h4>{{ $ad->subject }}</h4>
                                                <p>{{ $ad->address }}</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6 text-md-end">
                                                <p>
                                                    {{ ($ad->category->title === 'квартира')?($ad->number_of_rooms.'-комн. '):'' }}
                                                    {{ $ad->category->title }}, {{ $ad->area }}
                                                    м<sup><small>2</small></sup>
                                                </p>
                                                <h5>{{ $ad->price }} руб.</h5>
                                            </div>
                                            <p>{{ $ad->description }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <hr>
                        @endforeach
                        <div>
                            {{ $ads->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
