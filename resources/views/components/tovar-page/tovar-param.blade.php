<div class="param__element">
    <div @class([
        'icon',
        'icon__instrument' => $key === "Инструменты",
        'icon__rashod' => $key === "Расход",
        'icon__layers' => $key === "Количество слоев",
        'icon__pack' => $key === "Упаковка",
        'icon__razvod' => $key === "Разведение",
        'icon__sves' => $key === "Связующее вещество",
        ])></div>

    <div class="text">
        <p>{{$key}}</p>
        <span>{{$item}}</span>
    </div>
</div>
