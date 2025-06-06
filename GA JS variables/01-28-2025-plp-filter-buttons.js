function() {
    var element = {{Click Element}};
   
    function closest(element, selector) {
      while (element) {
        if (element.matches(selector)) return element;
        element = element.parentElement;
      }
      return null;
    }

    // Bilingual category mapping
    var categoryMap = {
      'en': {
        'sale': 'Sale',
        'womens-sale': 'Women\'s Sale',
        'mens-sale': 'Men\'s Sale',
        'girls-sale': 'Girls\' Sale',
        'boys-sale': 'Boys\' Sale',
        'shop-sale': 'Shop Sale',
        'equipment-sale': 'Equipment Sale'
      },
      'fr': {
        'vente': 'Sale',
        'vente-femmes': 'Women\'s Sale',
        'vente-hommes': 'Men\'s Sale',
        'vente-filles': 'Girls\' Sale',
        'vente-gar%C3%A7ons': 'Boys\' Sale',
        'vente-de-chaussures': 'Shop Sale',
        'vente-dequipement': 'Equipment Sale'
      }
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

    // Determine language based on URL path
    var language = 'en';
    if (pathSegments.length > 0) {
      if (pathSegments[0] === 'fr-CA') {
        language = 'fr';
        pathSegments.shift();
      } else if (pathSegments[0].match(/^[a-z]{2}-[A-Z]{2}$/i)) {
        pathSegments.shift();
      }
    }

    var breadcrumb = [];
    pathSegments.forEach(function(segment) {
      if (categoryMap[language][segment]) {
        breadcrumb.push(categoryMap[language][segment]);
      }
    });

    // Get data-aria-label instead of div text
    var ariaLabel = link.getAttribute('data-aria-label');
    if (ariaLabel) {
      var text = ariaLabel
        .replace(/\n/g, ' ')
        .replace(/\s+/g, ' ')
        .trim()
        .toLowerCase()
        .replace(/^./, function(match) {
          return match.toUpperCase();
        });
      
      breadcrumb.push(text);
    }

    return breadcrumb.join(' > ');
}