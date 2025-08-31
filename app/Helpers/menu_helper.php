<?php

if (!function_exists('saludo')) {
    function saludo($nombre = 'Invitado') {
      return "Hola, " . ucfirst($nombre) . " 👋";
    }
}
