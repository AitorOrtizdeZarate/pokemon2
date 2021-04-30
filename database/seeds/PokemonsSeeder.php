<?php

use Illuminate\Database\Seeder;
use App\Pokemon;

class PokemonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = Pokemon::create([
        	'nombre' => 'Bulbasaur',
        	'imagen' => '/imagenes/pokemon/bulbasaur.png',
        	'descripcion' => 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional.'
        ]);
        $pokemons = Pokemon::create([
        	'nombre' => 'Ivysaur',
        	'imagen' => '/imagenes/pokemon/ivysaur.png',
        	'descripcion' => 'Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto.'
        ]);
        $pokemons = Pokemon::create([
        	'nombre' => 'Venusaur',
        	'imagen' => '/imagenes/pokemon/venusaur.png',
        	'descripcion' => 'Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y, a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur.'
        ]);
        $pokemons = Pokemon::create([
            'nombre' => 'Charmander',
            'imagen' => '/imagenes/pokemon/charmander.png',
            'descripcion' => 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Lets Go, Pikachu! y Pokémon: Lets Go, Eevee!'
        ]);
        $pokemons = Pokemon::create([
            'nombre' => 'Charmeleon',
            'imagen' => '/imagenes/pokemon/charmeleon.png',
            'descripcion' => 'Charmeleon es un Pokémon de tipo fuego introducido en la primera generación. Es la evolución de Charmander, uno de los Pokémon iniciales de los entrenadores que comienzan su aventura en la región de Kanto.'
        ]);
        $pokemons = Pokemon::create([
            'nombre' => 'Charizard',
            'imagen' => '/imagenes/pokemon/charizard.png',
            'descripcion' => 'Charizard es un Pokémon de tipo fuego/volador, introducido en la primera generación. Es la evolución de Charmeleon y, a partir de la sexta generación, puede megaevolucionar en Mega-Charizard X o en Mega-Charizard Y. En la Octava generación puede realizar Gigamax y transformarse en Charizard Gigamax.'
        ]);
        $pokemons = Pokemon::create([
            'nombre' => 'Squirtle',
            'imagen' => '/imagenes/pokemon/squirtle.png',
            'descripcion' => 'Squirtle es un Pokémon de tipo agua introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Charmander, excepto en Pokémon Amarillo.'
        ]);
        $pokemons = Pokemon::create([
            'nombre' => 'Wartortle',
            'imagen' => '/imagenes/pokemon/wartortle.png',
            'descripcion' => 'Wartortle es un Pokémon de tipo agua introducido en la primera generación. Es la forma evolucionada de Squirtle, uno de los Pokémon iniciales de Kanto.'
        ]);
        $pokemons = Pokemon::create([
            'nombre' => 'Blastoise',
            'imagen' => '/imagenes/pokemon/blastoise.png',
            'descripcion' => 'Blastoise es un Pokémon de tipo agua introducido en la primera generación. Es la evolución de Wartortle y, a partir de la sexta generación, puede megaevolucionar en Mega-Blastoise.'
        ]);
        /*
        $pokemons = Pokemon::create([
            'nombre' => '',
            'imagen' => '/imagenes/pokemon/.png',
            'descripcion' => ''
        ]);
        */
    }
}
