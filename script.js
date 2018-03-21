var spaceWidth   = 0.6,
    posterWidth  = 1,
    posterHeight = 1.5;

AFRAME.registerComponent('grow-to-fit-posters', {
  init: function() {
    var sceneEl = document.querySelector('a-scene'),
        walls   = document.querySelectorAll('[grow-to-fit-posters]'),
        posters = getLongestPosterWall().querySelectorAll('a-poster').length;

    var totalHeight = this.el.getAttribute('geometry').height,
        totalWidth  = ((spaceWidth + posterWidth) * (posters)) + spaceWidth;

    this.el.object3D.position.x = totalWidth / 2; // It's faster to update position this way
    this.el.setAttribute('geometry', 'width', totalWidth);
    this.el.setAttribute('material', {
      repeat: totalWidth + ' ' + totalHeight,
      ambientOcclusionTextureRepeat: totalWidth + ' ' + totalHeight,
      normalTextureRepeat: totalWidth + ' ' + totalHeight,
    });

    // Updating the shader forces the material repeats to update
    this.el.setAttribute('material', 'shader', 'flat');
    this.el.setAttribute('material', 'shader', 'standard');
  }
});

AFRAME.registerComponent('reposition-posters', {
  init: function() {
    var posters = this.el.querySelectorAll('a-poster'),
        wallWidth = this.el.getAttribute('geometry').width;

    // Reposition posters
    for (var i = 0; i < posters.length; i++) {
      posters[i].setAttribute('position', {
        x: (wallWidth / 2 * -1) + (posterWidth / 2) + spaceWidth + (i * (spaceWidth + posterWidth)),
        y: 0.25,
        z: 0.01
      });
    }
  }
});

AFRAME.registerComponent('place-at-end-of-posters', {
  init: function() {
    var posters = getLongestPosterWall().querySelectorAll('a-poster').length,
        width   = ((spaceWidth + posterWidth) * (posters)) + spaceWidth;
    this.el.object3D.position.x = width;
  }
});

AFRAME.registerComponent('hall-lights', {
  init: function() {
    var floor        = document.querySelector('#floor'),
        floorWidth   = floor.getAttribute('geometry').width,
        lightSpacing = 9,
        lightOffset  = 3.5,
        totalLights  = Math.floor(((floorWidth - lightOffset) / lightSpacing) + 1);

    for (var i = 0; i < totalLights; i++) {
      var downLight = document.createElement('a-entity');
      downLight.setAttribute('light', {
        type: 'point',
        intensity: 1,
        decay: 0.5,
        distance: 12
      });
      downLight.setAttribute('position', {
        x: lightOffset + (lightSpacing * i),
        y: 2.0,
        z: 0
      });
      this.el.appendChild(downLight);
    }
  }
});

AFRAME.registerPrimitive('a-poster', {
  // Attaches the `poster` component by default.
  // Defaults the poster to be left-most.
  defaultComponents: {
    poster: {},
    position:'0.6 0.25 0.01',
    width: posterWidth,
    height: posterHeight
  },

  // Maps HTML attributes to the `poster` component's properties.
  mappings: {
    title: 'poster.title',
    stars: 'poster.stars',
  }
});

AFRAME.registerComponent('poster', {
  schema: {
    title: {type: 'string', default: ''},
    stars: {type: 'string', default: '0'},
    width:  {type: 'number', default: posterWidth},
    height: {type: 'number', default: posterHeight}
  },

  init: function() {
    var endpoint = 'https://api.themoviedb.org/3/search/movie',
        imageURL = 'https://image.tmdb.org/t/p/original/',
        apiKey   = '92fae392ac95212e4afb2f77ba8b32ec',
        response = getJSON(endpoint + '?api_key=' + apiKey + '&query=' + this.data.title);

    if (0 === response.length || 0 === response.results.length || 'undefined' == typeof response.results[0].poster_path ) {
      console.log('No posters found for title "' + this.data.title + '".');
    }

    var movie = response.results[0];

    this.el.setAttribute('geometry', {
      primitive: 'plane',
      width: this.data.width,
      height: this.data.height
    });
    this.el.setAttribute('material', {
      src: imageURL + movie.poster_path
    });

    var border = document.createElement('a-plane');
    border.setAttribute('geometry', {
      width: this.data.width + 0.05,
      height: this.data.height + 0.05
    });
    border.setAttribute('color', '#111');
    border.setAttribute('position', {
      x: 0,
      y: 0,
      z: -0.005
    });
    this.el.appendChild(border);

    var review = document.createElement('a-plane');
    review.setAttribute('geometry', {
      width: 0.64,
      height: 0.64
    });
    review.setAttribute('material', {
      src: 'img/' + this.data.stars + '.png',
      transparent: true
    });
    review.setAttribute('position', {
      x: 0,
      y: -0.9,
      z: 0.005
    });
    this.el.appendChild(review);
  }
});

function getLongestPosterWall() {
  var sceneEl = document.querySelector('a-scene'),
      walls   = document.querySelectorAll('[grow-to-fit-posters]'),
      longest = walls[0],
      posters = longest.querySelectorAll('a-poster').length;

  for (var i = 1; i < walls.length; i++) {
    var currentPosters = walls[i].querySelectorAll('a-poster').length;
    if (currentPosters > posters) {
      longest = walls[i];
    }
  }

  return longest;
}

function getJSON(url) {
  var request = new XMLHttpRequest(); // a new request
  request.open('GET', url, false);
  request.send(null);
  return JSON.parse(request.responseText);
}
