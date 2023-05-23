/**
 * 
 * Manipulating the DOM exercise.
 * Exercise programmatically builds navigation,
 * scrolls to anchors from navigation,
 * and highlights section in viewport upon scrolling.
 * 
 * Dependencies: None
 * 
 * JS Version: ES2015/ES6
 * 
 * JS Standard: ESlint
 * 
*/



//                        ######    EDIT    ###### 
// {1- using ES6 let and const to declare variables and not var keyword} 
//                        ######            ######

//######get all sections of page using .querySelectorAll and make an array of sections using Array. from(function).
var allSections = Array.from(document.querySelectorAll('section')); // whenever I try to declar this with let or const an error pops up *_*

//#####get the navigation bar id , the parent list to append new items
var MainList = document.querySelector('#navbar__list');  // same error when using let or const
//######function to creat list items in navigatiob bar and append newly created items to the list
function creatItems() {
    let section = "";
    for ( section of allSections){
//######get attributes from sections for our navigation bar items
       let sectionName = section.getAttribute('data-nav');
       let sectionLink = section.getAttribute('id');
//######creat new list item
       let listItem = document.createElement('li');
        
//######creat anchor for the list item 
        let itemAnchor = document.createElement('a');
//######append class , href and section name to anchor
        let linkText = document.createTextNode(sectionName);
        itemAnchor.setAttribute("href","#"+sectionLink);
        itemAnchor.setAttribute("class","menu__link");
        itemAnchor.setAttribute("id","link"+sectionLink[7]);
        itemAnchor.appendChild(linkText);
//######append anchor to each list item
        listItem.appendChild(itemAnchor);
//######after creation of the list item its time to append each of them to the main navigation bar
        MainList.appendChild(listItem);
        

    };

};
//######calling the function to creat the navigation bar
creatItems();
//###### getting all list elements into an array
var linkArrays = Array.from(document.querySelectorAll(".menu__link"));
//######using getBoundingClientRect to obtain view port and use the active class for sections

window.addEventListener("scroll", function() {

    let section = "";
    for ( section of allSections){
    
//checking if class in viewport
        if (
            
            section.getBoundingClientRect().top >= -300 &&
            section.getBoundingClientRect().top <= 200
        ) {
 //if section is active in viewport , the function appends active class to section       
            section.classList.add('your-active-class');
//###### checking which section is selected in navbar according to view port and starting with highlighting section 1 ^_^
////                        ######    EDIT    ###### 
// {2- highlighting the navbar item according to the active section in viewport}
//######couldn't figure out an easier way , but i'm sure it exists ^_^        
            for(let link of linkArrays){
                        // getting the section in viewport and link to match both of them
                        let wow =section.getAttribute('id');
                        let wow2 = link.getAttribute('id');
                        let wowLink = wow2.slice(4);
                        let wowSec = wow.slice(7);
                        // matching each section with its link in navbar
                        if (wowSec == 1 && wow2 =='link1'){
                            
                           link.classList.add('your-active-class');
                        }

                        else if(wowSec==2 &&wow2 == 'link2'){
                            link.classList.add('your-active-class');

                        }
                        else if(wowSec==3 &&wow2 == 'link3'){
                            link.classList.add('your-active-class');

                        }
                        else if(wowSec==4 &&wow2 == 'link4'){
                            link.classList.add('your-active-class');

                        }
                        //removing the active class from unmatched navbar items
                        else {
                           
                           link.classList.remove('your-active-class');
                           
                        }
                        
                        
                        
                     
                    
                
                
                }
        }
        
//and remove it from all inactive sections
        else {
            section.classList.remove('your-active-class');

        }

    }

  });
 

//                        ######    EDIT    ###### 
// {3- using JavaScript to smooth scrollin}
// getting navbar items into an array
var linkArrays = Array.from(document.querySelectorAll(".menu__link"));
// looping each element and adding the event listener 

        for(var link of linkArrays){
    
// the event listener listens for the click on navbar item 
// clickHandler is a function that prevents the default behavior of anchor tags and add the smooth effect
    
        link.addEventListener('click',clickHandler);
     
    


}

// declaring the function 
function clickHandler(navItem) {
// preventing default behavior " the jump"
    navItem.preventDefault();
    let href = this.getAttribute("href");
    let test = this.getAttribute('id');
    let help = document.getElementById(test);
   
// adding the new behavior "smooth"
    document.querySelector(href).scrollIntoView({
      behavior: 'smooth'
    });
    
}
    
