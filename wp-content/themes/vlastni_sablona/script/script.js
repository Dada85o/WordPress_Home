const hamburger = document.querySelector(".wrapper-hamburger"); 
const nav = document.querySelector("nav"); 

let state = false; 
hamburger.addEventListener("click", () => {

    if (state == true) {
        hamburger.classList.remove("is-active"); 
        nav.classList.remove("is-open"); 
    } 

    
    else {
        hamburger.classList.add("is-active"); //Volám proměnou hamburger, která odkazuje na html. Používám classlist.add - přidávám do elementu další classu, kterou jsem si pojmenoval "is-active". Tuto třídu my upravíme a podle toho se projeví animace
        nav.classList.add("is-open"); //Tady děláme to samé, jako v horním řádku, ale přidáváme jí pro element nav, aby se animace projevila pro nav společně, například naprogramuje ve stylusu to, aby nav popojelo dolů
        state = true; //Zde měním state na true, aby po druhý proběhl opačný proces, tím se nám navigace bude posouvat nahoru a dolů a hamburer rozevírat a zavírat
    }
})

//Zde založíme funkci, která reaguje na změnu šířky okna a kontoluje kdy se odebere classa
//ControlWidth() je název funkce bez parametru
function ControlWidth() {
    const sirka = window.innerWidth; //Deklarace proměný, kde se ukládá šířka okna
    
    //Podmínka která kontroluje šířku okna (celé stránky)
    //Díky tomu pokud někdo zvětší šířku stránky a bude otevřený hamburger s navigací, tohle zařídí aby se classy odebrali)
    if (sirka > 768)
    {
        hamburger.classList.remove("is-active"); //Odebere classu s hamburgeru .is-active
        nav.classList.remove("is-open"); //Odebere classu s navigace
        state = false; //nastavíme zpět na defaultní hodnotu state pro kontrolu pro hamburger
    }

}
//Tato funkce volá funkci, pokud se něco změní na stránce, způsobu je více. Tohle je jedna z nich.
//window - objekt který prezentuje okno prohlížeče
//addEventListener - přidává událost a naslouchá
//resize - spustí se, pokud se změní velikost okna
//ControlWidth() - spustí se funkce, kterou jsme vytvořili, pozor tady voláme bez závorek
window.addEventListener('resize', ControlWidth);



//Díky tomuto může fungovat animace, když se přidává nebo odebírá přidaná třída do elementu.