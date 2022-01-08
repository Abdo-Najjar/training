<?php

function user() : \App\Models\User|null
{
    return auth()->user();
}