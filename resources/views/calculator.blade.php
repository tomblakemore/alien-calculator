<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
                    </div>
                </div>
            </nav>

            <div class="container">
                <h1>{{ config('app.name') }}</h1>

                <p class="lead">Enter the two operands below and choose an operator.</p>

                <form class="form-inline" v-on:submit.prevent="calculate">
                    {{ csrf_field() }}

                    <div class="form-group" :class="errors.operand1 ? 'has-error' : ''">
                        <label class="sr-only" for="value1">First operand</label>
                        <input type="text" class="form-control" id="operand1" placeholder="First operand" v-model="operand1">
                    </div>

                    <div class="form-group" :class="errors.operand2 ? 'has-error' : ''">
                        <label class="sr-only" for="operand2">Password</label>
                        <input type="text" class="form-control" id="operand2" placeholder="Second operand" v-model="operand2">
                    </div>

                    <div class="form-group" :class="errors.operator ? 'has-error' : ''">
                        <select class="form-control" v-model="operator">
                            <option value="" selected>Operator &#8230;</option>
                            <option value="Alien">&#128125; Alien</option>
                            <option value="Skull">&#128128; Skull</option>
                            <option value="Ghost">&#128123; Ghost</option>
                            <option value="Scream">&#128561; Scream</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Calculate</button>
                </form>

                <p class="result" v-if="result">@{{ result }}</p>

                <div class="errors" v-if="errors">
                    <p v-for="messages in errors">
                        <span class="help-block" v-for="message in messages">
                            @{{ message }}
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>