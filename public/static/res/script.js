var navElem = document.querySelector("nav"); //Nav elem felkutatatása és eltárolása
function Menuclick()
{
    navElem.classList.toggle("open"); //Az OPEN class hozzáadása a NAV elemhez
}
navElem.onclick = Menuclick();


document.addEventListener('DOMContentLoaded', function() //DOMContentLoaded eseményfigyelő: a script csak akkor fusson, amikor a teljes HTML dokumentum betöltődött
{
    //szolgáltatás típus és név kezelése
    const serviceTypeSelect = document.getElementById('service_type');
    const serviceNameSelect = document.getElementById('service_name');
    
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = serviceTypeSelect.getAttribute('data-services');
    const services = JSON.parse(tempDiv.innerText);
    
    var urlParams = new URLSearchParams(window.location.search);
    var day = urlParams.get('day').toString().padStart(2, '0');
    var month = urlParams.get('month').toString().padStart(2, '0');
    var year = urlParams.get('year');
  
   function updateServiceNames() //a szolgáltatás nevek frissítése, amikor a szolgáltatás típusát kiválasztják
   {
        const serviceType = serviceTypeSelect.value; //lekérdezi a kiválasztott szolgáltatás típusának értékét a serviceTypeSelect-ből
        serviceNameSelect.innerHTML = '<option value="">-- Választok --</option>'; //eltávolít minden meglévő opciót a serviceNameSelect legördülő menüből, és hozzáadja az alapértelmezett opciót

        if (serviceType && services[serviceType]) 
        {
            services[serviceType].forEach(service => //végigmegy a hozzátartozó szolgáltatások listáján, és minden szolgáltatás névhez létrehoz egy új option elemet, amelyet hozzáad a serviceNameSelect legördülő menühöz
            {
                const option = document.createElement('option');
                option.value = service;
                option.textContent = service;
                serviceNameSelect.appendChild(option);
            });
        }   
    } 
    serviceTypeSelect.addEventListener('change', updateServiceNames); //Hozzáad egy change esemény figyelőt a serviceTypeSelect elemhez, amely meghívja az updateServiceNames függvényt, amikor a kiválasztás változik
    updateServiceNames(); //függvény meghívása az oldal betöltésekor
 
    
    let selectedDate = [year , month, day].join('-');
    console.log(selectedDate);
   
    const hiddenDateInput = document.querySelector('input[name="date"]');
    hiddenDateInput.value = selectedDate;

    console.log('Hidden input date value:', hiddenDateInput.value);

    document.querySelector('input[name="date"]').value = selectedDate;
    console.log('selected date:', selectedDate);  
    console.log('hidden input value:', hiddenDateInput.value);      
            
     
    const form = document.querySelector('form');// a form elküldésének figyelése
});
