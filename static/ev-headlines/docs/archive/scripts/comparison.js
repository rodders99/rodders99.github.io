function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

const country1 = getUrlParameter('country1');
const country2 = getUrlParameter('country2');

// Parse the current URL
const currentUrl = new URL(window.location.href);
const params = currentUrl.searchParams;

// Check if the parameter is set, and set a default value if it isn't
const paramName1 = 'country1';
const defaultValue1 = 'all-countries';
const paramName2 = 'country2';
const defaultValue2 = 'all-countries';

if (!params.has(paramName1)) {
    params.set(paramName1, defaultValue1);
    // Redirect to the new URL with the default parameter
    window.location.href = currentUrl.toString();
}
if (!params.has(paramName2)) {
    params.set(paramName2, defaultValue2);
    // Redirect to the new URL with the default parameter
    window.location.href = currentUrl.toString();
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

    //container.appendChild(toc);
}




function updateImageSources(country1) {
  // Select all image elements by class name
  var images1 = document.querySelectorAll('img.country1'); // Assuming 'change' is the class name
  images1.forEach(function(img) {
      var src = img.getAttribute('src');
      var lastSlashIndex = src.lastIndexOf('/');
      var newSrc = src.substring(0, lastSlashIndex + 1) + country1 + "-" + src.substring(lastSlashIndex + 1);
      img.setAttribute('src', newSrc);
  });
  var images2 = document.querySelectorAll('img.country2'); // Assuming 'change' is the class name
  images2.forEach(function(img) {
      var src = img.getAttribute('src');
      var lastSlashIndex = src.lastIndexOf('/');
      var newSrc = src.substring(0, lastSlashIndex + 1) + country2 + "-" + src.substring(lastSlashIndex + 1);
      img.setAttribute('src', newSrc);
  });
}

function updateHrefsWithPrefix(country1) {
      //const country1 = getPrefix();
      if (!country1) return; // If no country1 is found, do nothing
      
      const links1 = document.querySelectorAll('a.country1');
      links1.forEach(function(link) {
          var currentHref = link.getAttribute('href');
          var newSrc = currentHref.replace('all', `${country1}`);
          link.setAttribute('href', newSrc);
      });

      if (!country2) return; // If no country1 is found, do nothing
      
      const links2 = document.querySelectorAll('a.country2');
      links2.forEach(function(link) {
          var currentHref = link.getAttribute('href');
          var newSrc = currentHref.replace('all', `${country2}`);
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
  const filePath = `../headings/${country1}-${index}-product-category.txt`;

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


  
async function updateContentCompare() {
        // var country1 = getUrlParameter('country1');
        // const country1 = capitalizeFirstLetter(country1);
        // var country2 = getUrlParameter('country2');
        // const country2 = capitalizeFirstLetter(country2);
        
        await updateImageSources(country1);
        await updateHeadingsWithPrefix(country1);
        await update_product_cat(); // Updates class=product_catn where n = a number
        await updateHrefsWithPrefix(country1);
        // Await more updates if necessary
        if (country1) {
            document.getElementById('country1').value = country1;
          }
        
          if (country2) {
            document.getElementById('country2').value = country2;
          }
    
    }

function redirectToComparison() {
    var country1 = document.getElementById("country1").value;
    var country2 = document.getElementById("country2").value;
    window.location.href = window.location.pathname + "?country1=" + country1 + "&country2=" + country2;
    
    }


updateContentCompare();
// setTimeout(function() {
//     //generateToC(); // Called after all updates are done
//     generateIDs(); // Called after all updates are done
// }, 1000);



