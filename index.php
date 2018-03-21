<html>
  <head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/matthewbryancurtis/aframe-star-system-component/db4f1030/index.js"></script>
    <script src="https://rawgit.com/fernandojsg/aframe-teleport-controls/master/dist/aframe-teleport-controls.min.js"></script>
  </head>
  <body>
    <script src="script.js"></script>
    <a-scene>
      <!-- Camera -->
      <a-entity id="cameraRig">
        <!-- camera -->
        <a-entity id="head" camera wasd-controls look-controls position="2.5 1.6 0"></a-entity>
        <!-- hand controls -->
        <a-entity id="left-hand" teleport-controls="cameraRig: #cameraRig; teleportOrigin: #head;"></a-entity>
        <a-entity id="right-hand" teleport-controls="cameraRig: #cameraRig; teleportOrigin: #head;"></a-entity>
      </a-entity>

      <!-- Asset management system. -->
      <a-assets>
        <!-- Textures by Katsukagi: https://3dtextures.me -->
        <img id="wood-floor" src="materials/Wood_Floor_007_SD/Wood_Floor_007_COLOR.jpg">
        <img id="wood-floor-occ" src="materials/Wood_Floor_007_SD/Wood_Floor_007_OCC.jpg">
        <img id="wood-floor-norm" src="materials/Wood_Floor_007_SD/Wood_Floor_007_NORM.jpg">
        <img id="plaster" src="materials/Plaster_001_SD/Plaster_001_COLOR.jpg">
        <img id="plaster-occ" src="materials/Plaster_001_SD/Plaster_001_OCC.jpg">
        <img id="plaster-norm" src="materials/Plaster_001_SD/Plaster_001_NORM.jpg">
      </a-assets>

      <a-plane id="floor" grow-to-fit-posters position="3 0 0" rotation="-90 0 0" width="5" height="5" color="#fff"
        material="
          shader: standard;
          src: #wood-floor;
          ambientOcclusionMap: #wood-floor-occ;
          normalMap: #wood-floor-norm;
          metalness: 0;
          repeat: 5 5;
          ambientOcclusionTextureRepeat: 5 5;
          normalTextureRepeat: 5 5;
          "
        ></a-plane>
      <a-plane
        id="west-wall"
        position="0 1.25 0"
        rotation="0 90 0"
        width="5"
        height="3"
        color="#fff"
        material="
          shader: standard;
          src: #plaster;
          ambientOcclusionMap: #plaster-occ;
          normalMap: #plaster-norm;
          metalness: 0;
          roughness: 1;
          side: double;
          repeat: 5 2.5;
          ambientOcclusionTextureRepeat: 5 2.5;
          normalTextureRepeat: 5 2.5;
          "
        >
        <a-entity
         position="0 1.0 0.1"
         text="
          value: Luke's Top;
          color: #000;
          width: 6;
          font: kelsonsans;
          align: center;
          alphaTest: 0;
          "
         ></a-entity>
         <a-entity
          position="0 0.3 0.1"
          text="
           value: 100;
           color: #000;
           width: 20;
           font: kelsonsans;
           align: center;
           alphaTest: 0;
           "
          ></a-entity>
         <a-entity
          position="0 -0.5 0.1"
          text="
           value: Movies;
           color: #000;
           width: 10;
           font: kelsonsans;
           align: center;
           alphaTest: 0;
           "
          ></a-entity>
        </a-plane>
        <a-plane
          id="east-wall"
          place-at-end-of-posters
          position="0 1.25 0"
          rotation="0 -90 0"
          width="5"
          height="3"
          color="#fff"
          material="
            shader: standard;
            src: #plaster;
            ambientOcclusionMap: #plaster-occ;
            normalMap: #plaster-norm;
            metalness: 0;
            roughness: 1;
            side: double;
            repeat: 5 2.5;
            ambientOcclusionTextureRepeat: 5 2.5;
            normalTextureRepeat: 5 2.5;
            "
        ></a-plane>
      <a-plane
        id="north-wall"
        grow-to-fit-posters
        reposition-posters
        position="2.5 1.25 -2.5"
        rotation="0 0 0"
        width="5"
        height="3"
        color="#fff"
        material="
          shader: standard;
          src: #plaster;
          ambientOcclusionMap: #plaster-occ;
          normalMap: #plaster-norm;
          metalness: 0;
          roughness: 1;
          side: double;
          repeat: 5 2.5;
          ambientOcclusionTextureRepeat: 5 2.5;
          normalTextureRepeat: 5 2.5;
          "
        >
        <a-poster title="Alien" year="1979" director="Ridley Scott" stars="3"></a-poster>
        <a-poster title="Arrival" year="2016" director="Denis Villeneuve" stars="3"></a-poster>
        <a-poster title="Baby Driver" year="2017" director="Edgar Wright" stars="3"></a-poster>
        <a-poster title="Blade Runner" year="1982" director="Ridley Scott" stars="3"></a-poster>
        <a-poster title="Blade Runner 2049" year="2017" director="Denis Villeneuve" stars="3"></a-poster>
        <a-poster title="Call Me By Your Name" year="2017" director="Luca Guadagnino" stars="3"></a-poster>
        <a-poster title="Captain America: Civil War" year="2016" director="Anthony and Joe Russo" stars="3"></a-poster>
        <a-poster title="Coco" year="2017" director="Lee Unkrich" stars="3"></a-poster>
        <a-poster title="Death proof" year="2007" director="Quentin Tarantino" stars="3"></a-poster>
        <a-poster title="Detroit" year="2017" director="Kathryn Bigelow" stars="3"></a-poster>
        <a-poster title="Dunkirk" year="2017" director="Christopher Nolan" stars="3"></a-poster>
        <a-poster title="Frances Ha" year="2012" director="Noah Baumbach" stars="3"></a-poster>
        <a-poster title="Hidden Figures" year="2016" director="Theodore Melfi" stars="3"></a-poster>
        <a-poster title="Hunt for the Wilderpeople" year="2016" director="Taika Waititi" stars="3"></a-poster>
        <a-poster title="I, Tonya" year="2017" director="Craig Gillespie" stars="3"></a-poster>
        <a-poster title="Kill Bill" year="2004" director="Quentin Tarantino" stars="3"></a-poster>
        <a-poster title="La La Land" year="2016" director="Damien Chazelle" stars="3"></a-poster>
        <a-poster title="Pulp Fiction" year="1994" director="Quentin Tarantino" stars="3"></a-poster>
        <a-poster title="Spider-Man: Homecoming" year="2017" director="Jon Watts" stars="3"></a-poster>
        <a-poster title="Star Wars: A New Hope" year="1977" director="George Lucas" stars="3"></a-poster>
        <a-poster title="Star Wars: The Empire Strikes Back" year="1980" director="Irvin Kershner" stars="3"></a-poster>
        <a-poster title="Star Wars: The Last Jedi" year="2017" director="Rian Johnson" stars="3"></a-poster>
        <a-poster title="The LEGO Batman Movie" year="2017" director="Chris McKay" stars="3"></a-poster>
        <a-poster title="The Trip" year="2010" director="Michael Winterbottom" stars="3"></a-poster>
        <a-poster title="Thor: Ragnarok" year="2017" director="Taika Waititi" stars="3"></a-poster>
        <a-poster title="Three Billboards Outside Ebbing, Missouri" year="2017" director="Martin McDonagh" stars="3"></a-poster>
        <a-poster title="True Romance" year="1993" director="Quentin Tarantino" stars="3"></a-poster>
        <a-poster title="Wonder Woman" year="2017" director="Patty Jenkins" stars="3"></a-poster>
        <a-poster title="Ali's Wedding" year="2017" director="Jeffrey Walker" stars="2"></a-poster>
        <a-poster title="Alien vs. Predator" year="2004" director="Paul W. S. Anderson" stars="2"></a-poster>
        <a-poster title="All the Money in the World" year="2017" director="Ridley Scott" stars="2"></a-poster>
        <a-poster title="Ant-Man" year="2015" director="Peyton Reed" stars="2"></a-poster>
        <a-poster title="Atomic Blonde" year="2017" director="David Leitch" stars="2"></a-poster>
        <a-poster title="Avengers: Age of Ultron" year="2015" director="Joss Whedon" stars="2"></a-poster>
        <a-poster title="Batman v Superman: Dawn of Justice" year="2016" director="Zack Snyder" stars="2"></a-poster>
        <a-poster title="Battle of the Sexes" year="2017" director="Jonathan Dayton, Valerie Faris" stars="2"></a-poster>
        <a-poster title="Beatriz at Dinner" year="2017" director="Miguel Arteta" stars="2"></a-poster>
        <a-poster title="Black Panther" year="2018" director="Ryan Coogler" stars="2"></a-poster>
        <a-poster title="Boy" year="2010" director="Taika Waititi" stars="2"></a-poster>
        <a-poster title="Bushwick" year="2017" director="Cary Murnion, Jonathan Milott" stars="2"></a-poster>
        <a-poster title="Buster's Mal Heart" year="2016" director="Sarah Adina Smith" stars="2"></a-poster>
        <a-poster title="Captain America: The Winter Soldier" year="2014" director="Anthony and Joe Russo" stars="2"></a-poster>
        <a-poster title="Coherence" year="2013" director="James Ward Byrkit" stars="2"></a-poster>
        <a-poster title="Dave Made a Maze" year="2017" director="Bill Watterson" stars="2"></a-poster>
        <a-poster title="Dawn of the Planet of the Apes" year="2014" director="Matt Reeves" stars="2"></a-poster>
        <a-poster title="Deadpool" year="2016" director="Tim Miller" stars="2"></a-poster>
        <a-poster title="Despicable Me 3" year="2017" director="Kyle Balda, Pierre Coffin" stars="2"></a-poster>
        <a-poster title="Django Unchained" year="2012" director="Quentin Tarantino" stars="2"></a-poster>
        <a-poster title="Doctor Strange" year="2016" director="Scott Derrickson" stars="2"></a-poster>
        <a-poster title="Fantastic Beasts and Where to Find Them" year="2016" director="David Yates" stars="2"></a-poster>
      </a-plane>
      <a-plane
        id="south-wall"
        grow-to-fit-posters
        reposition-posters
        position="2.5 1.25 2.5"
        rotation="0 180 0"
        width="5"
        height="3"
        color="#fff"
        material="
          shader: standard;
          src: #plaster;
          ambientOcclusionMap: #plaster-occ;
          normalMap: #plaster-norm;
          metalness: 0;
          roughness: 1;
          side: double;
          repeat: 5 2.5;
          ambientOcclusionTextureRepeat: 5 2.5;
          normalTextureRepeat: 5 2.5;
          "
        >
        <a-poster title="Fantastic Mr. Fox" year="2009" director="Wes Anderson" stars="2"></a-poster>
        <a-poster title="Ghost in the Shell" year="2017" director="Rupert Sanders" stars="2"></a-poster>
        <a-poster title="Greenberg" year="2010" director="Noah Baumbach" stars="2"></a-poster>
        <a-poster title="Guardians of the Galaxy" year="2014" director="James Gunn" stars="2"></a-poster>
        <a-poster title="Guardians of the Galaxy Vol. 2" year="2017" director="James Gunn" stars="2"></a-poster>
        <a-poster title="Hail, Caesar!" year="2016" director="Ethan and Joel Coen" stars="2"></a-poster>
        <a-poster title="Happy Feet" year="2006" director="George Miller" stars="2"></a-poster>
        <a-poster title="Infinity Chamber" year="2016" director="Travis Milloy" stars="2"></a-poster>
        <a-poster title="Inglourious Basterds" year="2009" director="Quentin Tarantino" stars="2"></a-poster>
        <a-poster title="Iron Man" year="2008" director="Jon Favreau" stars="2"></a-poster>
        <a-poster title="Iron Man 3" year="2013" director="Shane Black" stars="2"></a-poster>
        <a-poster title="Jackie Brown" year="1997" director="Quentin Tarantino" stars="2"></a-poster>
        <a-poster title="John Wick" year="2014" director="Chad Stahelski" stars="2"></a-poster>
        <a-poster title="John Wick Chapter 2" year="2017" director="Chad Stahelski" stars="2"></a-poster>
        <a-poster title="Killing of a Sacred Deer" year="2017" director="Yorgos Lanthimos" stars="2"></a-poster>
        <a-poster title="Kingsman: The Secret Service" year="2014" director="Matthew Vaughn" stars="2"></a-poster>
        <a-poster title="Kong: Skull Island" year="2017" director="Jordan Vogt-Roberts" stars="2"></a-poster>
        <a-poster title="Lady Bird" year="2017" director="Greta Gerwig" stars="2"></a-poster>
        <a-poster title="Logan" year="2017" director="James Mangold" stars="2"></a-poster>
        <a-poster title="Logan Lucky" year="2017" director="Steven Soderbergh" stars="2"></a-poster>
        <a-poster title="Mad Max" year="1979" director="George Miller" stars="2"></a-poster>
        <a-poster title="Mad Max: Fury Road" year="2015" director="George Miller" stars="2"></a-poster>
        <a-poster title="Man of Steel" year="2013" director="Zack Snyder" stars="2"></a-poster>
        <a-poster title="Margot at the Wedding" year="2007" director="Noah Baumbach" stars="2"></a-poster>
        <a-poster title="Men in Black" year="1997" director="Barry Sonnenfeld" stars="2"></a-poster>
        <a-poster title="Murder on the Orient Express" year="2017" director="Kenneth Branagh" stars="2"></a-poster>
        <a-poster title="Muriel's Wedding" year="1994" director="P.J. Hogan" stars="2"></a-poster>
        <a-poster title="Paddington" year="2014" director="Paul King" stars="2"></a-poster>
        <a-poster title="Predators" year="2010" director="Nimród Antal" stars="2"></a-poster>
        <a-poster title="Rain Man" year="1988" director="Barry Levinson" stars="2"></a-poster>
        <a-poster title="Reservoir Dogs" year="1992" director="Quentin Tarantino" stars="2"></a-poster>
        <a-poster title="Rise of the Planet of the Apes" year="2011" director="Rupert Wyatt" stars="2"></a-poster>
        <a-poster title="Rogue One: A Star Wars Story" year="2016" director="Gareth Edwards" stars="2"></a-poster>
        <a-poster title="Star Wars: Return of the Jedi" year="1983" director="Richard Marquand" stars="2"></a-poster>
        <a-poster title="Star Wars: The Force Awakens" year="2015" director="J. J. Abrams" stars="2"></a-poster>
        <a-poster title="Suicide Squad" year="2016" director="David Ayer" stars="2"></a-poster>
        <a-poster title="The Avengers" year="2012" director="Joss Whedon" stars="2"></a-poster>
        <a-poster title="The Fundamentals of Caring" year="2016" director="Rob Burnett" stars="2"></a-poster>
        <a-poster title="The Hateful Eight" year="2015" director="Quentin Tarantino" stars="2"></a-poster>
        <a-poster title="The Imitation Game" year="2014" director="Morten Tyldum" stars="2"></a-poster>
        <a-poster title="The LEGO Ninjago Movie" year="2017" director="Charlie Bean, Paul Fisher, Bob Logan" stars="2"></a-poster>
        <a-poster title="The Only Living Boy in New York" year="2017" director="Marc Webb" stars="2"></a-poster>
        <a-poster title="The Shape of Water" year="2017" director="Guillermo del Toro" stars="2"></a-poster>
        <a-poster title="The Squid and the Whale" year="2005" director="Noah Baumbach" stars="2"></a-poster>
        <a-poster title="The Teacher" year="2017" director="Jan Hrebejk" stars="2"></a-poster>
        <a-poster title="The Trip to Italy" year="2014" director="Michael Winterbottom" stars="2"></a-poster>
        <a-poster title="The Trip to Spain" year="2017" director="Michael Winterbottom" stars="2"></a-poster>
        <a-poster title="Victoria and Abdul" year="2017" director="Stephen Frears" stars="2"></a-poster>
        <a-poster title="War of the Planet of the Apes" year="2017" director="Matt Reeves" stars="2"></a-poster>
        <a-poster title="What We Do in the Shadows" year="2014" director="Taika Waititi" stars="2"></a-poster>
      </a-plane>
      <a-sky color="#000"></a-sky>
      <a-entity star-system="texture: https://cdn.rawgit.com/matthewbryancurtis/aframe-star-system-component/master/assets/star.svg"></a-entity>
    </a-scene>
  </body>
</html>
