<div class="form-group">
    <label for="soilHumidity">Umidade do Solo</label>
    <input type="text" class="form-control" name="soilHumidity" value="{{ isset($user) ? $user->soilHumidity : old('soilHumidity') }}" placeholder="Digite a umidade do solo aqui!">

    <label for="soilTemperature">Temperatura do Solo</label>
    <input type="text" class="form-control" name="soilTemperature" value="{{ isset($user) ? $user->soilTemperature : old('soilTemperature') }}" placeholder="Digite a temperatura do solo aqui!">

    <label for="airlHumidity">Umidade do Ar</label>
    <input type="text" class="form-control" name="airlHumidity" value="{{ isset($user) ? $user->airlHumidity : old('airlHumidity') }}" placeholder="Digite a umidade do ar aqui!">

    <label for="airTemperature">Temperatura do Ar</label>
    <input type="text" class="form-control" name="airTemperature" value="{{ isset($user) ? $user->airTemperature : old('airTemperature') }}" placeholder="Digite a temperatura do ar aqui!">

    <label for="soilConductivity">Condutividade do Solo</label>
    <input type="text" class="form-control" name="soilConductivity" value="{{ isset($user) ? $user->soilConductivity : old('soilConductivity') }}" placeholder="Digite a condutividade do solo aqui!">

    <label for="soilPH">pH do Solo</label>
    <input type="text" class="form-control" name="soilPH" value="{{ isset($user) ? $user->soilPH : old('soilPH') }}" placeholder="Digite o pH do solo aqui!">

    <label for="nitrogen">Nitrogênio</label>
    <input type="text" class="form-control" name="nitrogen" value="{{ isset($user) ? $user->nitrogen : old('nitrogen') }}" placeholder="Digite o nível de nitrogênio aqui!">

    <label for="phosphorus">Fósforo</label>
    <input type="text" class="form-control" name="phosphorus" value="{{ isset($user) ? $user->phosphorus : old('phosphorus') }}" placeholder="Digite o nível de fósforo aqui!">

    <label for="potassium">Potássio</label>
    <input type="text" class="form-control" name="potassium" value="{{ isset($user) ? $user->potassium : old('potassium') }}" placeholder="Digite o nível de potássio aqui!">
</div>
