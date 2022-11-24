const pokemonName = document.querySelector('.pokemon__name');
const pokemonNumber = document.querySelector('.pokemon__number');
const pokemonImage = document.querySelector('.pokemon__image');

const form = document.querySelector('.form');
const input = document.querySelector('.input__search');
const buttonPrev = document.querySelector('.btn-prev');
const buttonNext = document.querySelector('.btn-next');
let shinyPokemon = false;
let dataPokemon = {};
let searchPokemon = 1;


const fetchPokemon = async (pokemon) => {
    const APIResponse = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon}`);
    if (APIResponse.status === 200) {
        const data = await APIResponse.json();
        return data;
    }
}

const renderPokemon = async (pokemon) => {

    pokemonName.innerHTML = ' Procurando...';
    pokemonNumber.innerHTML = '';

    dataPokemon = await fetchPokemon(pokemon);
    if (dataPokemon) {
        pokemonImage.style.display = 'block';
        pokemonName.innerHTML = dataPokemon.name;
        pokemonNumber.innerHTML = dataPokemon.id;
        /*pokemonImage.src = dataPokemon['sprites']['versions']['generation-v']['black-white']['animated']['front_default'];
*/
        /*pokemonImage.src = dataPokemon['sprites']['versions']['generation-viii']['icons']['front_default'];*/
        pokemonImage.src = dataPokemon['sprites']['front_default'];
        shinyPokemon = false;

        searchPokemon = dataPokemon.id;
    } else {
        pokemonImage.style.display = 'none';
        pokemonName.innerHTML = 'Pokemon Inexistente ';
        pokemonNumber.innerHTML = ' '
    }

}


form.addEventListener('submit', (event) => {
    event.preventDefault();
    renderPokemon(input.value.toLowerCase());


});

buttonPrev.addEventListener('click', () => {
    if (searchPokemon > 1) {
        searchPokemon -= 1;
        renderPokemon(searchPokemon);
    }
});
buttonNext.addEventListener('click', () => {
    searchPokemon += 1;
    renderPokemon(searchPokemon);


});

renderPokemon(searchPokemon);

/*buttonShiny.addEventListener('click', () => {
    if (shinyPokemon) {
        pokemonImage.src = dataPokemon['sprites']['front_default'];
    } else {
        pokemonImage.src = dataPokemon['sprites']['front_shiny'];

    }
    shinyPokemon = !shinyPokemon;
});*/


function changeShiny() {
    shinyPokemon ? pokemonImage.src = dataPokemon['sprites']['front_default'] : pokemonImage.src = dataPokemon['sprites']['front_shiny'];

    shinyPokemon = !shinyPokemon;
};

