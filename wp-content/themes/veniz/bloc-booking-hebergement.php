<?php
?>
<div class="booking-component">
    <h3 class="booking-title title dino"><strong class="yellow-text">Pour</strong> venise</h3>
    <form class="reserve-form">
        <div class="fields">
            <div id="date">
                <span>
                    <label for="depart">Arrivée</label>
                    <span class="input-component">
                        <input type="texte" name="" id="depart" class="date-picker-wp">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
                <span>
                    <label for="retour">Départ</label>
                    <span class="input-component">
                        <input type="texte" name="" id="depart" class="date-picker-wp">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>

            <div id="trajet">
                <span>
                    <label for="lieu_depart">Combien &ecirc;tes vous ?</label>
                    <span class="input-component">
                        <select name="person_number">
                            <option value="1" >1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="other">Plus de 5 </option>
                           
                        </select>
                         <i class="fa fa-caret-down"></i>
                    </span>
                </span>
                <span>
                    <label for="destination">Chambre</label>
                    <span class="input-component">
                       <select name="chambre">
                            <option value="1" >1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>                       
                            <option value="other">Plus de 5 </option>
                        </select>
                         <i class="fa fa-caret-down"></i>
                    </span>
                </span>
            </div>

        </div>
        <button type="submit" class="title dino">Go</button>
    </form>
</div>

