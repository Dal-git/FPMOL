<?php
class Ability
{
    public $name;
    public $sprite;
    public $type;
    public $power;

    function set_all($name, $sprite, $type, $power)
    {
        $this->name = $name;
        $this->sprite = $sprite;
        $this->type = $type;
        $this->power = $power;
    }

    function get_name_a()
    {
        return $this->name;
    }

    function get_sprite_a()
    {

        return $this->sprite;
    }

    function get_type_a()
    {
        return $this->type;
    }

    function get_power_a()
    {
        return $this->power;
    }
}

//Liste de compétences
$charge = new Ability($charge->set_all("charge", "", "normal", 75));
$coupe = new Ability($coupe->set_all("coupe", "", "normal", 50));
$lanceflamme = new Ability($coupe->set_all("lance flamme", "", "feu", 70));
$jetdeau = new Ability($jetdeau->set_all("jet d'eau", "", "eau", 70));
$lancefeuille = new Ability($lancefeuille->set_all("lance feuille", "", "plante", 70));


class Fighter
{
    public $name;
    public $lifepoint;
    public $sprite;
    public $type;
    public $moveset;

    function set_all($name, $sprite, $type, $moveset, $lifepoint)
    {
        $this->name = $name;
        $this->sprite = $sprite;
        $this->type = $type;
        $this->moveset = $moveset;
        $this->lifepoint = $lifepoint;
    }

    function  update_lifepoint($lifepoint)
    {
        $this->lifepoint = $lifepoint;
    }

    function get_name_f()
    {
        return $this->name;
    }

    function get_sprite_f()
    {
        return $this->sprite;
    }

    function get_type_f()
    {
        return $this->type;
    }

    function get_lifepoint()
    {
        return $this->lifepoint;
    }

    //!!! A faire -> récupérer les attaques !!!
    function get_moveset()
    {
        return $this->power;
    }

    function attack($ability, $opponent)
    {
        $ability->get_name_a();
        $ability->get_sprite_a();
        $ability->get_type_a();

        $opponent->get_name_f();
        $opponent->get_sprite_f();
        $opponent->get_type_f();

        //Enlève les points de vie de l'adversaire
        $opponent->update_lifepoint($opponent->get_lifepoint() - $ability->get_power_a());
    }
}
