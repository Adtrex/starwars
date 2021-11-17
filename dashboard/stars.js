const results = document.querySelector('#items');

async function asyncFetch(value){
    const res = await fetch(`https://swapi.dev/api/${value}`)
    const data = await res.json();
    displayresults(data, value);
}

function displayresults(data, value) {
    let output = '';
    console.log(data);
    if (value == 'films') {
        data.results.forEach(items => {
            output += `
                <div>
                    <h3>${items.title}</h3>
                    <p>Director: ${items.director}</p>
                    <p>Producer: ${items.producer}</p>
                    
                </div>
            `
        })
    }

    if (value == 'people') {
        data.results.forEach(items => {
            output += `
                <div>
                    <h3>${items.name}</h3>
                    <p>Gender: ${items.gender}</p>
                    <p>Birth: ${items.birth_year}</p>
                    
                </div>
            `
        })
    }

    if (value == 'planets') {
        data.results.forEach(items => {
            output += `
                <div>
                    <h3>${items.name}</h3>
                    <p>Climate: ${items.climate}</p>
                    <p>Terrain: ${items.terrain}</p>
                </div>
            `
        })
    }

    if (value == 'species') {
        data.results.forEach(items => {
            output += `
                <div>
                    <h3>${items.name}</h3>
                    <p>Language: ${items.language}</p>
                    <p>Classification: ${items.classification}</p>
                    <p>Designation: ${items.designation}</p>
                    
                </div>
            `
        })
    }

    if (value == 'starships') {
        data.results.forEach(items => {
            output += `
                <div>
                    <h3>${items.name}</h3>
                    <p>Model: ${items.model}</p>
                    <p>Maufacturer: ${items.manufacturer}</p>
                    <p>Capacity: ${items.passangers}</p>
                </div>
            `
        })
    }

    if (value == 'vehicles') {
        data.results.forEach(items => {
            output += `
                <div>
                    <h3>${items.name}</h3>
                    <p>Model: ${items.model}</p>
                    <p>Manufacturer: ${items.manufacturer}</p>
                    <p>Capacity: ${items.cargo_capacity}</p>
                </div>
            `
        })
    }
    results.innerHTML = output;
}

document.querySelector('#links').addEventListener('click', e => {
    asyncFetch(e.target.id);
} )