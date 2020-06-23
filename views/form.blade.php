@extends('layouts.app')

@section('title', 'Tweet reference maker Vancouver edition')
@section('content')
    <div class="container  mainContent">
        <div class="row">
            <form method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">insert_comment</i>
                        <input name="tweet" id="icon_prefix" type="url" class="validate">
                        <label for="icon_prefix">Tweet URL</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">

                        <select name="dateFormat">
                            <optgroup label="España">
                                <option value="1">dd mes aaaa</option>
                                <option value="2">dd/mm/aaaa</option>
                            </optgroup>
                            <optgroup label="Internacional">
                                <option value="3">yyyy/mm/dd</option>
                            </optgroup>
                        </select>
                        <label>Formato fecha</label>
                    </div>

                    <div class="input-field col s4">

                        <select name="lang">
                            <option value="es">Castellano</option>
                            <option value="en">Ingles</option>
                        </select>
                        <label>Idioma</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Tweet To
                            Vancouver
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>
                <input type="hidden" name="incrusted" value="{{$incrusted}}">
            </form>
        </div>
    </div>
@endsection