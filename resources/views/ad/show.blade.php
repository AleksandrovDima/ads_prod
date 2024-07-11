@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="m-2">
                    <div class="m-3">
                        <a href="{{ route('ad.index', $ad->id) }}">
                            <button class="btn btn-outline-secondary">Назад</button>
                        </a>
                    </div>

                    <div class="m-2">
                        <div class="row">
                            <div class="text-center mb-3">
                                <h2>Объявление</h2>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h4>{{ $ad->subject }}</h4>
                                <p>{{ $ad->address }}</p>
                                <p>
                                    {{ ($ad->category->title === 'квартира')?($ad->number_of_rooms.'-комн. '):'' }}
                                    {{ $ad->category->title }}, {{ $ad->area }} м<sup><small>2</small></sup>
                                </p>
                                <h5>{{ $ad->price }}</h5>
                            </div>
                            <div class="col-xs-12 col-md-6 text-md-end">
                                @auth
                                    <p>Контакт владельца:</p>
                                    <h5>тел. {{ $ad->contact }}</h5>
                                @else
                                    <p>Контактную информацию может увидеть только авторизованный пользователь.</p>
                                @endauth
                            </div>

                            <p>{{ $ad->description }}</p>
                        </div>

                        @can('view', auth()->user())
                            <div class="">
                                <div class="m-3">
                                    <a href="{{ route('ad.edit', $ad->id) }}">
                                        <button class="btn btn-outline-primary">Редактировать объявление</button>
                                    </a>
                                </div>
                                <div class="m-3">
                                    <form action="{{ route('ad.delete', $ad->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger">Удалить объявление</button>
                                    </form>
                                </div>
                            </div>
                        @endcan
                        @if($ad->user->is(auth()->user()))
                            <div class="">
                                <div class="m-3">
                                    <a href="{{ route('ad.edit', $ad->id) }}">
                                        <button class="btn btn-outline-primary">Редактировать объявление</button>
                                    </a>
                                </div>
                                <div class="m-3">
                                    <form action="{{ route('ad.delete', $ad->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger">Удалить объявление</button>
                                    </form>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
