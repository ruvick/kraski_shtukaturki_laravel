<div class="advantages-slider__column">
    <div class="advantages-slider__item item-advantages">

        <span @class([
            'item-advantages__icon',
            'icon-bg-green' => $color === "green",
            'icon-bg-brick' => $color === "brick",
            'icon-bg-purpur' => $color === "purpur",
            "adv_quality" => $stylem === "adv_quality",
            "adv_estet" => $stylem === "adv_estet",
            "adv_select" => $stylem === "adv_select",
            "adv_strong"  => $stylem === "adv_strong",
            "adv_uhod" => $stylem === "adv_uhod",
            "adv_servic" => $stylem === "adv_servic",

            ]) ></span>

        <div class="item-advantages__descp">
            <p>
                {{ $text }}
            </p>
        </div>
    </div>
</div>
