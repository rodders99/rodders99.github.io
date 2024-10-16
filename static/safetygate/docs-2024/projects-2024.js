

function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

const country1 = getUrlParameter('country1');

// Parse the current URL
const currentUrl = new URL(window.location.href);
const params = currentUrl.searchParams;

// Check if the parameter is set, and set a default value if it isn't
const paramName = 'country1';
const defaultValue = 'all-countries';

if (!document.body.classList.contains("exclude-page")) {
if (!params.has(paramName)) {
    params.set(paramName, defaultValue);
    // Redirect to the new URL with the default parameter
    window.location.href = currentUrl.toString();
}

}
function generateIDs() {
    //const toc = document.createElement('ul');
    //const container = document.getElementById('tableOfContents');
   // container.innerHTML = ''; // Clear previous ToC content
    document.querySelectorAll('h1, h2, h3').forEach((header, index) => {
        const anchor = `header-${index}`;
        header.id = anchor;

        //const listItem = document.createElement('li');
        //listItem.className = header.tagName.toLowerCase();
        //const link = document.createElement('a');
        //link.href = `#${anchor}`;
        //link.textContent = header.textContent;
        //listItem.appendChild(link);

        //toc.appendChild(listItem);
    });

   // container.appendChild(toc);
}

function generateToC() {
    const toc = document.createElement('ul');
    const container = document.getElementById('tableOfContents');
    container.innerHTML = ''; // Clear previous ToC content
    document.querySelectorAll('h1, h2, h3').forEach((header, index) => {
        const anchor = `header-${index}`;
        header.id = anchor;

        const listItem = document.createElement('li');
        listItem.className = header.tagName.toLowerCase();
        const link = document.createElement('a');
        link.href = `#${anchor}`;
        link.textContent = header.textContent;
        listItem.appendChild(link);

        toc.appendChild(listItem);
    });

   container.appendChild(toc);
}


function updateImageSources(country1) {
  // Select all image elements by class name
  var images = document.querySelectorAll('img.change'); // Assuming 'change' is the class name
  images.forEach(function(img) {
      var src = img.getAttribute('src');
      var lastSlashIndex = src.lastIndexOf('/');
      var newSrc = src.substring(0, lastSlashIndex + 1) + country1 + "-" + src.substring(lastSlashIndex + 1);
      img.setAttribute('src', newSrc);
  });
}

function updateHrefsWithPrefix(country1) {
      //const country1 = getPrefix();
      if (!country1) return; // If no country1 is found, do nothing
      
      const links = document.querySelectorAll('a:not(.nochange)');
      links.forEach(function(link) {
          var currentHref = link.getAttribute('href');
          var newSrc = currentHref.replace('all-countries', `${country1}`);
          link.setAttribute('href', newSrc);
      });
  }


// FUNCTION : Get class = ChangeCountry and add country1 + original text
function updateHeadingsWithPrefix(country1) {
    var headings = document.querySelectorAll('.ChangeCountry'); // Adjust for h2, h3, etc. as needed
    headings.forEach(function(heading) {
        heading.textContent = country1 + ' - ' + heading.textContent;
    });
    }



function updateProduct_categoryContent(element) {
  // Extract the index from the element's class
  // Assuming each element has only one class that matches the pattern "product_catN"
  const classList = Array.from(element.classList);
  const productCatClass = classList.find(className => className.startsWith('product_cat'));
  const index = productCatClass.replace('product_cat', '');
  const filePath = `../headings-2024/${country1}-${index}-product-category.txt`;

  fetch(filePath)
      .then(response => response.text())
      .then(data => {
          const currentContent = element.textContent;
          element.textContent = data + ' - ' + currentContent;
      })
      .catch(error => console.error(`Error fetching file: ${filePath}`, error));
}


//Select elements by class and apply the function
function update_product_cat() {
    document.querySelectorAll('.product_cat0, .product_cat1, .product_cat2').forEach(element => {
        updateProduct_categoryContent(element); // 
    });
}

function capitalizeFirstLetter(string) {
        return  string.charAt(0).toUpperCase() + string.slice(1);
    }


  
async function updateContent() {
    // var country1 = getUrlParameter('country1');
    
    const country = capitalizeFirstLetter(country1);
    if (!document.body.classList.contains("exclude-page")) {
        await updateImageSources(country1);
        await updateHrefsWithPrefix(country1);
        await update_product_cat(); // Updates class=product_catn where n = a number


    }        
    await updateHeadingsWithPrefix(country);
    //await generateToC();
    //await generateIDs();
    // Await more updates if necessary
    
}


document.addEventListener("DOMContentLoaded", function() {
    
    
    updateContent();
    // setTimeout(function() {
    //     // Called after all updates are done
    //     generateIDs(); 
    // }, 1000);
    //generateToC();
    
    // function openNav() {
    //     document.getElementById("mySidenav").style.width = "400";
    //     }
        
    //     /* Set the width of the side navigation to 0 */
    // function closeNav() {
    //     document.getElementById("mySidenav").style.width = "0";
    //     } 
    });

