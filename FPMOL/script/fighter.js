// Créateur CATILLAZ Dallas & RUEGGER Yann
// Date de création : 07.05.2020
// Page de création des combatants ayant comme caractéristiques :
//  - une image 
//  - un nom
//  - un type
//  - un set de 4 attaques -> moveset d'ability
// (- une piste audio personnel) -> facultatif

class Ability {
    constructor(sprite, name, type, power) {
        this.Sprite = sprite;
        this.Name = name;
        this.Type = type;
        this.Power = power;
    }
}
let ability0 = new Ability("", "Jet d'eau", "eau", 50);

class Fighter {
    constructor(sprite, name, type, moveset) {
        this.Sprite = sprite;
        this.Name = name;
        this.Type = type;
        this.Moveset = moveset;
    }
}

let torticho = new Fighter("", "Torticho", "eau", [ability0, ability0, ability0, ability0]);

