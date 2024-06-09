function showHoverContent(element) {
    var hoverContent = element.querySelector('#hoverContent');
    hoverContent.classList.remove('hidden');
    hoverContent.classList.add('flex');
}

function hideHoverContent(element) {
    var hoverContent = element.querySelector('#hoverContent');
    hoverContent.classList.remove('flex');
    hoverContent.classList.add('hidden');
}
