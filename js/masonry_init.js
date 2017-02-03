(function () {
  'use strict';

  var msnry, isActive, timeout;
  var MEDIAQUERY = '(min-width: 900px), (max-height: 500px) and (orientation: landscape)';
  var elem = document.querySelector('.grid');
  var images = document.querySelectorAll('.full-width-img');

  if (elem) {

    msnry = createMsnry();

    toggleMsnry();

    /**
     * Listen for images to load.
     */
    Array.prototype.forEach.call(images, function (img) {
      img.addEventListener('load', function () {

        if (isActive) {
          // Let Masonry recalculate layout.
          msnry.layout();
        }
      });
    });
  }

  /**
   * Debounce toggleMsnry for 200ms on window resize
   */
  window.addEventListener('resize', function() {
    clearTimeout(timeout);
    timeout = setTimeout(toggleMsnry, 200);
  });

  /**
   * Determine whether Msnry should be active or not.
   */
  function toggleMsnry() {
    var shouldBeActive = window.matchMedia(MEDIAQUERY).matches;

    if (shouldBeActive && !isActive) {
      msnry = createMsnry();
    } else if (!shouldBeActive && isActive) {
      msnry.destroy();
    }

    isActive = shouldBeActive;
  }

  /**
   * Create a grid using Masonry
   * @return {Masonry}
   */
  function createMsnry() {
    return new Masonry(elem, {
      itemSelector: '.grid-item',
      gutter: 40,
      transitionDuration: 0
    });
  }

}());
