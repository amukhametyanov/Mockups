function() {
    var element = {{Click Element}};
    
    function closest(element, selector) {
      while (element) {
        if (element.matches(selector)) return element;
        element = element.parentElement;
      }
      return null;
    }
  
    var categoryMap = {
      'sale': 'Sale',
      'womens-sale': 'Women\'s Sale',
      'mens-sale': 'Men\'s Sale',
      'girls-sale': 'Girls\' Sale',
      'boys-sale': 'Boys\' Sale',
      'shop-sale': 'Shop Sale',
      'equipment-sale': 'Equipment Sale'
    };
  
    var link = closest(element, 'a');
    if (!link) return '';
    var filterSection = closest(link, '.filter-section');
    if (!filterSection) return '';
  
    var href = link.getAttribute('href');
    var url = new URL(href, window.location.href);
    var pathSegments = url.pathname.split('/').filter(function(segment) {
      return segment.trim() !== '';
    });
  
    if (pathSegments.length > 0 && pathSegments[0].match(/^[a-z]{2}-[A-Z]{2}$/i)) {
      pathSegments.shift();
    }
  
    var breadcrumb = [];
    pathSegments.forEach(function(segment) {
      if (categoryMap[segment]) {
        breadcrumb.push(categoryMap[segment]);
      }
    });
  
    var div = link.querySelector('div');
    if (div) {
      var text = div.innerText
        .replace(/\n/g, ' ')         // Remove newlines
        .replace(/\s+/g, ' ')        // Collapse multiple spaces
        .trim()
        .toLowerCase()               // Convert to lowercase first
        .replace(/^./, function(match) {
          return match.toUpperCase(); // Capitalize only first character
        });
      
      breadcrumb.push(text);
    }
  
    return breadcrumb.join(' > ');
  }