function() {
    var clickElement = {{Click Element}};
    
    var link = clickElement.closest('a');
    if (link) {
      return link.getAttribute('data-aria-label');
    }
    return null;
}