<?php
    include_once 'IncOnce/header.php';
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
        <input  name="date" type="date" placeholder="https://google.com" class="form-control"  type="url">
            </div>
        </div>
        </div>

        <div class="pinfo">Laat een bericht achter:</div>
        
        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-align-center"></i></i></span>
        <select class="form-control" id="rate">
            <option value="1star">Ik heb een vraag</option>
            <option value="1star">Ik heb een opmerking</option>
            <option value="2stars">Ik wil een game aanraden</option>
            <option value="3stars">Ik wil een compliment geven</option>
            </select>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
        <textarea class="form-control" id="review" rows="3"></textarea>
        
            </div>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Verzenden</button>


</form>

    </main>

<?php   
    include_once 'footer.php';
?>