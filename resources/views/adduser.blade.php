<?php

use App\Controllers\UserController

?>
<form method="post" action="{{ url('insert/') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="firstname">Meno :</label><br>
    <input type="text" name="firstname" value="John"><br>
    <label for="lastname">Priezvisko:</label><br>
    <input type="text" name="lastname" value="Doe"><br>
    <label for="Email">Email:</label><br>
    <input type="text" name="Email"><br>
    <label for="age">Vek:</label><br>
    <input type="number" name="age" value="30"><br>
    <label for="password">Heslo:</label><br>
    <input type="password" name="password" value=""><br>
    <input type="submit" value="Odoslať">
</form>