<div class="container-fluid bg-custom">
    <div class="container">
        <div class="grid">
            <div class="card" id="interior_card">
                <h4 class="card_title">@lang('common.interior_card_heading')</h4>
                <div class="d-flex gap-2 justify-content-start">
                    <button id="interior_program_1" type="button" class="btn btn-warning rounded-1 active" style="min-width: 100px;">Program 1</button>
                    <button id="interior_alpha_intensiv" type="button" class="btn btn-info rounded-1 "style="min-width: 100px;">Alpha Intensiv</button>
                </div>
                <p id="interior_price" class="pricing"></p>
                <p id="interior_name" class="text-black"></p>
                <hr>
                <ul id="interior_ul" class="features text-black">
       
                </ul>
                <a href="#" class="cta_btn mt-auto">Read More</a>
            </div>
            <div class="card">
                <h4 class="card_title">@lang('common.polish_card_heading')</h4>
                <div class="d-flex gap-2 justify-content-start">
                    <button id="polish_program_1" type="button" class="btn btn-secondary rounded-1" style="min-width: 100px;">Program 1</button>
                    <button id="polish_program_2" type="button" class="btn btn-warning rounded-1" style="min-width: 100px;">Program 2</button>
                    <button id="polish_program_alpha" type="button" class="btn btn-info rounded-1"style="min-width: 100px;">Alpha Program</button>
                </div>
                <p class="pricing">545€</p>
                <p class="text-black">Alpha Program</p>
                <hr>
                <ul class="features text-black">
                    <li>Qualitäts Handwäsche mit tiefen Lackreinigung</li>
                    <li>3-4 Schicht Polieren</li>
                    <li>Anti-Hologramm Hochglanz Politur</li>
                    <li>Alle Lackkratzer entfernen</li>
                    <li>Lack Besichtigung</li>
                    <li>Felgen Aufbereitung</li>
                    <li>Kunststoffteile und Gummipflege</li>
                    <li>Sonax Wachs Versiegelung mit Dauer ca 1.5 Jahr</li>
                </ul>
                <a href="#" class="cta_btn mt-auto">Read More</a>
            </div>
            <div class="card">
                <h4 class="card_title">@lang('common.ceramic_card_heading')</h4>
                <div class="d-flex gap-2 justify-content-start">
                    <button id="ceramic_program_1" type="button" class="btn btn-secondary rounded-1" style="min-width: 100px;">Program 1</button>
                    <button id="ceramic_program_2" type="button" class="btn btn-warning rounded-1" style="min-width: 100px;">Program 2</button>
                    <button id="ceramic_program_alpha" type="button" class="btn btn-info rounded-1"style="min-width: 100px;">Alpha Keramik</button>
                </div>
                <p class="pricing">700€</p>
                <p class="text-black">Alpha Keramike</p>
                <hr>
                <ul class="features text-black">
                    <li>Kombinierbar mit Program 1 oder 2 Polieren</li>
                    <li>Keramik Versiegelung mit Dauer ca 5 Jahre</li>
                </ul>
                <a href="#" class="cta_btn mt-auto">Read More</a>
            </div>

        </div>
    </div>
</div>

<script>
    var programText = @json(__('common'));
    function updateFeatures(programId) {
        var featuresList = document.getElementById("interior_ul");
        featuresList.innerHTML = "";
        var programFeatures = programText[programId];
        programFeatures.forEach(function(feature) {
            var listItem = document.createElement("li");
            listItem.textContent = feature;
            featuresList.appendChild(listItem);
        });

        var card = document.getElementById("interior_card");
        if (programId === "interior_program_1") {
            document.getElementById("interior_price").textContent = "190€"; 
            document.getElementById("interior_name").textContent = "Program 1";
            card.style.backgroundColor = "rgba(204, 160, 0, 0.2)"; 
        } else if (programId === "interior_alpha_intensiv") {
            document.getElementById("interior_price").textContent = "235€"; 
            document.getElementById("interior_name").textContent = "Program Alpha Intensiv"; 
            card.style.backgroundColor = "rgba(0, 146, 202, 0.2)"; 
        }
    }
    document.getElementById("interior_program_1").addEventListener("click", function() {
        updateFeatures("interior_program_1");
    });

    document.getElementById("interior_alpha_intensiv").addEventListener("click", function() {
        updateFeatures("interior_alpha_intensiv");
    });

    window.onload = function() {
        updateFeatures("interior_alpha_intensiv");
    }

</script>

