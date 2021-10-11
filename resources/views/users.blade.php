<?php

use App\Controllers\UserController

?>

<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{ $user->meno }} {{ $user ->priezvisko }}
            </td>
            <td>
                {{ $user->email }} 
            </td>
            <td>
                <a href="{{ url('show',$user->id) }}">EDITOVAŤ</a>
            </td>
        </tr>
    @endforeach
</table>