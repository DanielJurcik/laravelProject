<?php

use App\Controllers\UserController

?>
<form method="post" action="{{ url('update',$user->id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label for="firstname">Meno :</label><br>
    <input type="text" name="firstname" value="{{ $user->meno }}"><br>

    <label for="lastname">Priezvisko:</label><br>
    <input type="text" name="lastname" value="{{ $user->priezvisko }}"><br>

    <label for="Email">Email:</label><br>
    <input type="text" name="Email" value="{{ $user->email }}"><br>

    <label for="age">Vek:</label><br>
    <input type="number" name="age" value="{{ $user->vek }}"><br>

    <label for="password">Heslo:</label><br>
    <input type="password" name="password" value=""><br>

    <input type="submit" value="Upraviť">
</form>