<?php
    include_once 'header.php';
?>

    <main>

        <form id="feedback" action="">
        <div class="pinfo">Persoonlijke informatie:</div>
        
        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input  name="name" placeholder="Naam..." class="form-control"  type="text">
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input name="email" type="email" class="form-control" placeholder="E-Mail...">
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
        <input  name="URL" placeholder="https://google.com" class="form-control"  type="url">
            </div>
        </div>
        </div>

        <div class="pinfo">Laat een review achter op een game:</div>

        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fas fa-gamepad"></i></span>
        <select class="form-control" id="rate">
            <option value="1star"></option>
            <option value="2stars"></option>
            <option value="3stars"></option>
            <option value="4stars"></option>
            <option value="5stars"></option>
            <option value="5stars"></option>
            <option value="5stars"></option>
            <option value="5stars"></option>
            <option value="5stars"></option>
            <option value="5stars"></option>
            </select>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-heart"></i></span>
        <select class="form-control" id="rate">
            <option value="1star">1</option>
            <option value="2stars">2</option>
            <option value="3stars">3</option>
            <option value="4stars">4</option>
            <option value="5stars">5</option>
            <option value="5stars">6</option>
            <option value="5stars">7</option>
            <option value="5stars">8</option>
            <option value="5stars">9</option>
            <option value="5stars">10</option>
            </select>
            </div>
        </div>
        </div>

        <div class="pinfo">Omschrijf je keuze:</div>
        

        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
        <textarea class="form-control" id="review" rows="3"></textarea>
        
            </div>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Voeg review toe</button>


</form>

    </main>

<?php   
    include_once 'footer.php';
?>