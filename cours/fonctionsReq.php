<?php
function addition($nb1, $nb2): int
{
    return $nb1 + $nb2;
}

function soustraction($nombre, $nombre2): int
{
    return $nombre - $nombre2;
}

function multiplication($nombre, $nombre2): int
{
    return $nombre * $nombre2;
}

function division($nombre, $nombre2): float
{
    return $nombre / $nombre2;
}

function moyenne2nombre(float $nb1, float $nb2): float
{
    return addition($nb1, $nb2) / 2;
}

function estFemme(string $sexe): bool
{
    if ($sexe == "F") {
        return true;
    }
    return false;
}
function estAdulte(int $age): bool
{
    if ($age >= 18) {
        return true;
    }
    return false;
}

function ouiOuNon(?string $phrase = null): bool
{
    while (true) {
        $reponse = readline($phrase . " - (o)ui/(n)on : ");
        if ($reponse === "o") {
            return true;
        } elseif ($reponse === "n") {
            return false;
        }
    }
}
