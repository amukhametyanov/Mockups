function() {
  function matches(elem, selector) {
    var matchesFunc = elem.matches || elem.msMatchesSelector || elem.webkitMatchesSelector;
    return matchesFunc.call(elem, selector);
  }
   
  function findClosestLink(element) {
    while (element && element.tagName !== 'A') {
      element = element.parentElement;
    }
    return element;
  }
   
  function toSentenceCase(text) {
    return text.toLowerCase().trim()
      .split(' ')
      .map(function(word) {
        return word.charAt(0).toUpperCase() + word.slice(1);
      })
      .join(' ');
  }
   
  function removeDuplicates(text) {
    var parts = text.split(' > ')
      .filter(function(part) {
        return part && part.trim() !== '';
      });
    var unique = parts.filter(function(item, pos) {
      return parts.indexOf(item) === pos;
    });
    return unique.join(' > ');
  }
   
  function isInSameUl(link1, link2) {
    return link1.closest('ul') === link2.closest('ul');
  }

  function isBannerItem(element) {
    return element.classList.contains('nvm-flyout-img-col');
  }
   
  var link = findClosestLink({{Click Element}});
  if (!link) return '';
 
  if (link.getAttribute('data-aria-label')) {
    var labelText = link.getAttribute('data-aria-label')
      .replace(/\s*(Shop Now|Magasiner)\s*/g, '')
      .split(' > ')
      .map(toSentenceCase)
      .filter(function(part) { return part && part.trim() !== ''; })
      .join(' > ');
     
    if (labelText) {
      var topLevelNav = link.closest('nav');
      var parentMenu = link.closest('li.has-sub-menu.menu-nav');
      var topLevelLink = parentMenu ? parentMenu.querySelector('a:not(.inactive-menu-link)') : null;
       
      if (topLevelLink) {
        var menuText = topLevelLink.textContent.trim();
        labelText = menuText + ' > ' + labelText;
      }

      if (isBannerItem(link)) {
        labelText = 'Flyout > ' + labelText;
      }
       
      return removeDuplicates(labelText);
    }
  }
 
  var hierarchy = [];
  var currentElement = link;
  var lastText = '';
  var hasTopLevel = false;
 
  while (currentElement && !matches(currentElement, 'nav')) {
    if (matches(currentElement, 'li.has-sub-menu')) {
      var topLevelLink = currentElement.matches('.menu-nav') ?
        currentElement.querySelector('a:not(.inactive-menu-link)') : null;
       
      if (topLevelLink) {
        var text = topLevelLink.textContent.replace(/\s+/g, ' ').trim();
        text = toSentenceCase(text);
        if (!hasTopLevel) {
          hierarchy.unshift(text);
          hasTopLevel = true;
          lastText = text;
        }
      } else if (window.innerWidth >= 1024 || !currentElement.classList.contains('d-lg-none')) {
        var menuTitle = currentElement.querySelector('a:not(.d-lg-none)');
        if (menuTitle && !isInSameUl(menuTitle, link)) {
          var text = menuTitle.textContent.replace(/\s+/g, ' ').trim();
          text = text.replace(/\s*(Shop Now|Magasiner)\s*/g, '');
          text = toSentenceCase(text);
          if (text && text !== lastText) {
            hierarchy.unshift(text);
            lastText = text;
          }
        }
      }
    }
    currentElement = currentElement.parentElement;
  }
 
  var linkText = link.textContent.replace(/\s+/g, ' ').trim();
  linkText = linkText.replace(/\s*(Shop Now|Magasiner)\s*/g, '');
  linkText = toSentenceCase(linkText);
   
  if (linkText && linkText !== lastText && !link.classList.contains('d-lg-none')) {
    hierarchy.push(linkText);
  }

  var result = hierarchy.join(' > ');
  if (isBannerItem(link)) {
    result = 'Flyout > ' + result;
  }
 
  return removeDuplicates(result);
}