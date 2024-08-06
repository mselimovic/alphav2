<div class="container-fluid bg-custom">
    <div class="container">
        <div class="grid">
            <div class="card" id="interior_card">
                <h4 class="card_title">@lang('common.interior_card_heading')</h4>
                <div class="d-flex gap-2 justify-content-start">
                    <button id="interior_program_1" type="button" class="btn btn-warning rounded-1 active" style="min-width: 80px;">Program 1</button>
                    <button id="interior_alpha_intensiv" type="button" class="btn btn-info rounded-1 "style="min-width: 80px;">Alpha Intensiv</button>
                </div>
                <p id="interior_price" class="pricing"></p>
                <p id="interior_name" class="text-black"></p>
                <hr>
                <ul id="interior_ul" class="features text-black">
       
                </ul>
                <a href="{{ route('pages.request') }}" class="cta_btn mt-auto">{{__('common.learn_more')}}</a>
            </div>
            <div class="card" id="polish_card">
                <h4 class="card_title">@lang('common.polish_card_heading')</h4>
                <div class="d-flex gap-2 justify-content-start">
                    <button id="polish_program_1" type="button" class="btn btn-secondary rounded-1" style="min-width: 80px;">Program 1</button>
                    <button id="polish_program_2" type="button" class="btn btn-warning rounded-1" style="min-width: 80px;">Program 2</button>
                    <button id="polish_program_alpha" type="button" class="btn btn-info rounded-1"style="min-width: 80px;">Alpha Program</button>
                </div>
                <p id="polish_price" class="pricing"></p>
                <p id="polish_name" class="text-black"></p>
                <hr>
                <ul id="polish_ul" class="features text-black">
                </ul>
                <a href="{{ route('pages.request') }}" class="cta_btn mt-auto">{{__('common.learn_more')}}</a>
            </div>
            <div class="card" id="ceramic_card">
                <h4 class="card_title">@lang('common.ceramic_card_heading')</h4>
                <div class="d-flex gap-2 justify-content-start">
                    <button id="ceramic_program_1" type="button" class="btn btn-secondary rounded-1" style="min-width: 80px;">Program 1</button>
                    <button id="ceramic_program_2" type="button" class="btn btn-warning rounded-1" style="min-width: 80px;">Program 2</button>
                    <button id="ceramic_program_alpha" type="button" class="btn btn-info rounded-1"style="min-width: 80px;">Alpha Keramik</button>
                </div>
                <p id="ceramic_price" class="pricing"></p>
                <p id="ceramic_name" class="text-black"></p>
                <hr>
                <ul id="ceramic_ul" class="features text-black">

                </ul>
                <a href="{{ route('pages.request') }}" class="cta_btn mt-auto">{{__('common.learn_more')}}</a>
            </div>

        </div>
    </div>
</div>
<script>
    var cardText = {
        'polish_card': @json(__('common')),
        'interior_card': @json(__('common')),
        'ceramic_card': @json(__('common')),
        
    };

    function updateCardFeatures(cardId, programId) {
        var featuresList = document.getElementById(cardId).querySelector('ul.features');
        featuresList.innerHTML = "";
        var programFeatures = cardText[cardId][programId];
        programFeatures.forEach(function(feature) {
            var listItem = document.createElement("li");
            listItem.textContent = feature;
            featuresList.appendChild(listItem);
        });

        var card = document.getElementById(cardId);
        switch (programId) {
            case "ceramic_program_1":
                updateCardInfo(card, "245€", "Program 1", "rgba(51, 51, 51, 0.2)");
                break;
            case "ceramic_program_2":
                updateCardInfo(card, "345€", "Program 2", "rgba(204, 160, 0, 0.2)");
                break;
            case "ceramic_program_alpha":
                updateCardInfo(card, "700€", "Alpha Program", "rgba(0, 146, 202, 0.2)");
                break;
            case "polish_program_1":
                updateCardInfo(card, "275€", "Program 1", "rgba(51, 51, 51, 0.2)");
                break;
            case "polish_program_2":
                updateCardInfo(card, "375€", "Program 2", "rgba(204, 160, 0, 0.2)");
                break;
            case "polish_program_alpha":
                updateCardInfo(card, "545€", "Alpha Program", "rgba(0, 146, 202, 0.2)");
                break;
            case "interior_program_1":
                updateCardInfo(card, "190€", "Program 1", "rgba(204, 160, 0, 0.2)");
                break;
            case "interior_alpha_intensiv":
                updateCardInfo(card, "235€", "Program Alpha Intensiv", "rgba(0, 146, 202, 0.2)");
                break;
            default:
                break;
        }
    }

    function updateCardInfo(card, price, name, backgroundColor) {
        card.querySelector('.pricing').textContent = price;
        card.querySelector('.text-black').textContent = name;
        card.style.backgroundColor = backgroundColor;
    }

    document.querySelectorAll('.card button').forEach(function(button) {
        button.addEventListener('click', function() {
            var cardId = this.closest('.card').id;
            var programId = this.id;
            updateCardFeatures(cardId, programId);
        });
    });

    window.onload = function() {
        updateCardFeatures('ceramic_card', 'ceramic_program_alpha');
        updateCardFeatures('polish_card', 'polish_program_alpha');
        updateCardFeatures('interior_card', 'interior_alpha_intensiv');
    }
</script>