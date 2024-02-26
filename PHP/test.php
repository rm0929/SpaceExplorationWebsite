<!-- <?php
    echo "Welcome to PHP where we are going to connect to a database";
    $conn = mysqli_connect("localhost","root","","wp_project");
    if($conn){
        echo "Connected to backend...<br>";
    }
    else{
        // echo "Problem in connecting...<br>";
        // echo mysqli_connect_error( );
        die("Failed to connect.. ");  
    }

    // $table=mysqli_query($conn,"Create table planets(name varchar(25),description varchar(1000));");
    // $table=mysqli_query($conn,"Create table celestialbodies(name varchar(25),description varchar(1000));");
    // if ($table){
    //     echo "Table Planets created..";
    // }
    // else{
    //     echo "Table could not be created due to the error-->". mysqli_error($conn);
    // }
    // echo "<br>";
    // echo "<br>";

    #planet details..
    $text_sun="The Sun is the star at the center of the Solar System. It is a nearly perfect sphere of hot plasma, heated to incandescence by nuclear fusion reactions in its core, radiating the energy mainly as visible light, ultraviolet light, and infrared radiation. It is by far the most important source of energy for life on Earth. Its diameter is about 1.39 million kilometers (864,000 miles), or 109 times that of Earth. Its mass is about 330,000 times that of Earth; it accounts for about 99.86% of the total mass of the Solar System. It is heavy element rich star. The heavy elements could most plausibly have been produced by endothermic nuclear reactions during a supernova, or by transmutation through neutron absorption within a massive second-generation star.";
    $text_mercury="Mercury is the smallest planet in the Solar System and the closest to the Sun. It is the shortest of all the Suns planets. It is tidally locked with the Sun in a 3:2 spin-orbit resonance, Its orbital eccentricity is the largest of all known planets in the Solar System. Mercurys surface appears heavily cratered and is similar in appearance to the Moons, indicating that it has been geologically inactive for billions of years. It does not have a moon. Mass : 3.3011x1023 kg. Diameter : 4,879.4km. Orbital period: 88 days.";
    $text_venus="Venus is the second planet from the Sun, and is Earths closest neighbor in the solar system. Venus is the brightest object in the sky after the Sun and the Moon, and sometimes looks like a bright star in the morning or evening sky. The atmosphere of Venus is made up mainly of carbon dioxide, and thick clouds of sulfuric acid completely cover the planet. The atmosphere traps the small amount of energy from the sun that does reach the surface along with the heat the planet itself releases. This greenhouse effect has made the surface and lower atmosphere of Venus one of the hottest places in the solar system. Its Orbital period: 225 days and Mass: 4.867 x 10^24 kg. Its diameter is 12,104km. It has no moon.";
    $text_earth="While Earth is only the fifth largest planet in the solar system, it is the only world in our solar system with liquid water on the surface. Just slightly larger than nearby Venus, Earth is the biggest of the four planets closest to the Sun. It has one moon and an atmosphere which protects us from incoming meteoroids, most of which break up in our atmosphere before they can strike the surface. Earth is not a perfect sphere. As Earth spins, gravity points toward the center of our planet and a centrifugal force pushes outward. Its diameter is 12,742km. Its orbital period is 365 days and  mass  is 5.9722 x 1024 kilograms .";
    $text_mars="Mars is the fourth planet from the sun. Befitting the Red Planets bloody color, the Romans named it after their god of war. The bright rust color Mars is known for is due to iron-rich minerals in its regolith - the loose dust and rock covering its surface. The planets cold, thin atmosphere means liquid water likely cannot exist on the Martian surface for any appreciable length of time. Mars is much colder than Earth, in large part due to its greater distance from the sun. The carbon-dioxide-rich atmosphere of Mars is also about 100 times less dense than Earths on average, but it is nevertheless thick enough to support weather, clouds and winds. Its diameter is 6779km. Its orbital period is 687 days and mass is 6.39 x 1023 kg. It has 2 moons.";
    $text_jupiter="Jupiter is the largest planet in the solar system. Fittingly, it was named after the king of the gods in Roman mythology. In a similar manner, the ancient Greeks named the planet after Zeus, the king of the Greek pantheon. Jupiters atmosphere resembles that of the sun, made up mostly of hydrogen and helium. The colorful light and dark bands that surround Jupiter are created by strong east-west winds in the planets upper atmosphere traveling more than 335 mph (539 km/h). The white clouds in the light zones are made of crystals of frozen ammonia, while darker clouds made of other chemicals are found in the dark belts. Its diameter is 139,820km. Jupiter has 53 named moons and another 26 awaiting official names. Combined, scientists now think Jupiter has 79 moons. Mass: 1.898 x 10^27 kg .Orbital period: 12 years.";
    $text_saturn="Saturn, second largest planet of the solar system in mass and size and the sixth nearest planet in distance to the Sun. In the night sky Saturn is easily visible to the unaided eye as a non-twinkling point of light. Saturn was noted to be the slowest-moving. Saturn has extensive systems of moons (natural satellites) and rings, which may provide clues to its origin and evolution as well as to those of the solar system. Saturns rotational axis is tilted substantially-by 26.7- to its orbital plane. The tilt gives Saturn seasons, as on Earth, but each season lasts more than seven years. It has 82 moons. Its orbital period is 29 years and mass is 5.683 x 1026 kg.";
    $text_uranus="Uranus is the seventh planet from the sun and the first to be discovered by scientists. Although Uranus is visible to the naked eye, it was long mistaken as a star because of the planets dimness and slow orbit. The planet is also notable for its dramatic tilt, which causes its axis to point nearly directly at the sun. This unusual tilt gives rise to extreme seasons that last for about 20 years. Uranus is blue-green in color, as a result of the methane in its mostly hydrogen-helium atmosphere. The planet is often dubbed an ice giant, since at least 80% of its mass is a fluid mix of water, methane and ammonia ice. Its internal structure is made up of a mantle of water, ammonia and methane ices, as well as a core of iron and magnesium silicate. It has 27 moons.Its diameter is 50,724km . Its orbital period is 84 years and mass is 8.681 x 1025 kg.";
    $text_neptune="Neptune is dark, cold, and very windy. Its the last of the planets in our solar system. Its more than 30 times as far from the sun as Earth is. Its made of a thick fog of water, ammonia, and methane over an Earth-sized solid center. Its atmosphere is made of hydrogen, helium, and methane. The methane gives Neptune the same blue color as Uranus. Neptune has six rings, but they are very hard to see. Only Voyager 2 has visited Neptune. Neptune consists primarily of hydrogen, helium, water, and other volatile compounds, along with rocky material, and it has no solid surface. It receives less than half as much sunlight as Uranus, but heat escaping from its interior makes Neptune slightly warmer than Uranus. It has 13 moons. Its orbital period is 165 years and mass is 1.024 x 1024 years. Its diameter is 49,244km.";
    $text_pluto="Pluto, once considered the ninth and most distant planet from the sun, is now the largest known dwarf planet in the solar system. It is also one of the largest known members of the Kuiper Belt, a shadowy zone beyond the orbit of Neptune thought to be populated by hundreds of thousands of rocky, icy bodies each larger than 62 miles (100 kilometers) across, along with 1 trillion or more comets. NASA Hubble Space Telescope has also revealed evidence that Plutos crust could contain complex organic molecules.Plutos surface is one of the coldest places in the solar system, at roughly minus 375 degrees Fahrenheit (minus 225 degrees Celsius). Its diameter is 2,376.6km. Its orbital period is 248 years and mass is 1.30900 x 1022 kilogram. It has 5 moons.";
    $text_proxima="The star Proxima Centauri isnt visible to the eye, but its one of the most noted stars in the sky. Thats because its part of the Alpha Centauri star system, home to three known stars and the closest stellar system to our sun. Of the three stars in Alpha Centauri, scientists believe Proxima is closest to our sun, at 4.22 light-years away. Astronomers have discovered two planets for Proxima so far. It also has massive solar flares and might even be the source of a mysterious radio signal.  Proxima Centauri is so small. Its whats called a red dwarf star, one of the most common sorts of stars in our Milky Way galaxy. It contains only about an eighth of our sun mass. Faint red Proxima Centauri is only 3,100 Kelvin in contrast to 5,778 K for our sun. So Proxima is 500 times less bright than our sun. Its diameter is 214,550km. Its mass is 2.446 x 1029 kg and orbital period is 550,000 years.";
    $text_barnard="Barnards star, second nearest star to the Sun (after the triple system of Proxima Centauri and Alpha Centauri A and B components considered together), at a distance of 5.95 light-years. It is named for Edward Emerson Barnard, the American astronomer who discovered it in 1916. Barnards star has the largest proper motion of any known star-10.39 seconds of arc annually. It is a red dwarf star with a visual magnitude of 9.5 and thus is too dim to be seen with the naked eye despite its close distance; its intrinsic luminosity is only 1/2,600 that of the Sun. Because of its high velocity of approach, 110 km (68 miles) per second, Barnards star is gradually coming nearer the solar system and by the year 11,800 will reach its closest point in distance-namely, 3.85 light-years. Its diameter is 272,210km. Its mass is 2.864 x 1029 kg.";
    
    #inserting planet details..
    // $result=mysqli_query($conn,"Insert into planets values('Sun','{$text_sun}')");
    // $result=mysqli_query($conn,"Insert into planets values('Mercury','{$text_mercury}')");
    // $result=mysqli_query($conn,"Insert into planets values('Venus','{$text_venus}')");
    // $result=mysqli_query($conn,"Insert into planets values('Earth','{$text_earth}')");
    // $result=mysqli_query($conn,"Insert into planets values('Mars','{$text_mars}')");
    // $result=mysqli_query($conn,"Insert into planets values('Jupiter','{$text_jupiter}')");
    // $result=mysqli_query($conn,"Insert into planets values('Saturn','{$text_saturn}')");
    // $result=mysqli_query($conn,"Insert into planets values('Uranus','{$text_uranus}')");
    // $result=mysqli_query($conn,"Insert into planets values('Neptune','{$text_neptune}')");
    // $result=mysqli_query($conn,"Insert into planets values('Proxima Centauri','{$text_proxima}')");
    // $result=mysqli_query($conn,"Insert into planets values('Barnard Star','{$text_barnard}')");
    // $result=mysqli_query($conn,"Insert into planets values('Pluto','{$text_pluto}')");
    
    $text_moon="The Moon is Earths only natural satellite and the fifth largest moon in the solar system.  Moons presence helps stabilize our planets wobble and moderate our climate. The Moon has a very thin atmosphere called an exosphere. The Moons surface is cratered and pitted from comet and asteroid impacts. Earths Moon is the fifth largest of the 200+ moons orbiting planets in our solar system. The Moon is a spherical rocky body, probably with a small metallic core, revolving around Earth in a slightly eccentric orbit at a mean distance of about 384,000 km (238,600 miles). Its equatorial radius is 1,738 km (1,080 miles), and its shape is slightly flattened in a a way that it bulges a little in the direction of Earth.";
    $text_asteroid="Asteroids, sometimes called minor planets, are rocky, airless remnants left over from the early formation of our solar system about 4.6 billion years ago. Most of this ancient space rubble can be found orbiting the Sun between Mars and Jupiter within the main asteroid belt. Asteroids range in size from Vesta – the largest at about 329 miles (530 kilometers) in diameter – to bodies that are less than 33 feet (10 meters) across. The total mass of all the asteroids combined is less than that of Earth Moon. Some asteroids go in front of and behind Jupiter. These are called Trojan asteroids. Asteroids that come close to Earth are called Near Earth Objects, NEOs for short. NASA keeps a close watch on NEOs";
    $text_comet="Comet is small body orbiting the Sun with a substantial fraction of its composition made up of volatile ices. When a comet comes close to the Sun, the ices sublimate (go directly from the solid to the gas phase) and form, along with entrained dust particles, a bright outflowing atmosphere around the comet nucleus known as a coma. As dust and gas in the coma flow freely into space, the comet forms two tails, one composed of ionized molecules and radicals and one of dust. Comets are important to scientists because they are primitive bodies left over from the formation of the solar system. They were among the first solid bodies to form in the solar nebula, the collapsing interstellar cloud of dust and gas out of which the Sun and planets formed.";
    $text_blackhole="A black hole is a place in space where gravity pulls so much that even light cannot get out. The gravity is so strong because matter has been squeezed into a tiny space. This can happen when a star is dying. Since no light can get out, people cannot see black holes. They are invisible. Space telescopes with special tools can help find black holes. The special tools can see how stars that are very close to black holes act differently than other stars. Most black holes form from the remnants of a large star that dies in a supernova explosion. As the star collapses, a strange thing occurs. As the surface of the star nears an imaginary surface called the event horizon ,time on the star slows relative to the time kept by observers far away.";
    $text_meteor="Meteoroids are objects in space that range in size from dust grains to small asteroids. Think of them as space rocks. When meteoroids enter Earth atmosphere (or that of another planet, like Mars) at high speed and burn up, the fireballs or shooting stars are called meteors. When a meteoroid survives a trip through the atmosphere and hits the ground, its called a meteorite. 48.5 tons (44 tonnes or 44,000 kilograms) of meteoritic material falls on the Earth each day. Almost all the material is vaporized in Earth atmosphere, leaving a bright trail fondly called shooting stars. Several meteors per hour can usually be seen on any given night. Meteor showers occur annually or at regular intervals as the Earth passes through the trail of dusty debris left by a comet.";
    $text_supernova="A supernova is a massive explosion of a dying star. The event occurs during the last evolutionary stages of a massive star, which is dying.  The explosions are extremely bright and powerful. The star, after explosion, turns into a neutron star or a black hole, or is completely destroyed. A supernova takes place when there is a change in the centre of a star. This change happens in a binary star system, when one of the stars takes away all the matter from the other star in the system. In the other type of change, a star, which is at the end of its lifetime, runs out of nuclear fuel.";
    $text_nebula="A nebula is a giant cloud of dust and gas in space. Some nebulae (more than one nebula) come from the gas and dust thrown out by the explosion of a dying star. Other nebulae are regions where new stars are beginning to form. For this reason, some nebulae are called star nurseries. Nebulae are made of dust and gases mostly hydrogen and helium. The dust and gases in a nebula are very spread out, but gravity can slowly begin to pull together clumps of dust and gas. As these clumps get bigger and bigger, their gravity gets stronger and stronger. Eventually, the clump of dust and gas gets so big that it collapses from its own gravity. The collapse causes the material at the center of the cloud to heat up-and this hot core is the beginning of a star.";
    $text_kuiper="The KuiperBelt is a region of space where known icy worlds and comets in both regions are much smaller than Earth Moon. It is is a doughnut-shaped ring of icy objects around the Sun, extending just beyond the orbit of Neptune from about 30 to 55 AU. Short-period comets originate in the Kuiper Belt.Egg-shaped Haumea has a ring around it. Astronomers think the icy objects of the Kuiper Belt are remnants left over from the formation of the solar system. This is where you will find dwarf planet Pluto. Its the most famous of the objects floating in the Kuiper Belt, which are also called Kuiper Belt Objects, or KBOs. There are bits of rock and ice, comets and dwarf planets in the Kuiper Belt They are dwarf planets like Pluto.";
    $text_oort="The Oort Cloud is the most distant region of our solar system. Even the nearest objects in the Oort Cloud are thought to be many times farther from the Sun than the outer reaches of the Belt. Unlike the orbits of the planets and the Kuiper Belt, which lie mostly in the same flat disk around the Sun, the Oort Cloud is believed to be a giant spherical shell surrounding the rest of the solar system. It is like a big, thick-walled bubble made of icy pieces of space debris the sizes of mountains and sometimes larger. The Oort Cloud might contain billions, or even trillions, of objects.";
   
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Moon','{$text_moon}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Asteroid','{$text_asteroid}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Comet','{$text_comet}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Black Hole','{$text_blackhole}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Meteor','{$text_meteor}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Supernova','{$text_supernova}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Nebula','{$text_nebula}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Kuiper Belt','{$text_kuiper}')");
    // $result=mysqli_query($conn,"Insert into celestialbodies values('Oort Cloud','{$text_oort}')");

    #check whether row inserted or not..
    // if ($result){
    //     echo "Row inserted..";
    // }
    // else{
    //     echo "Row could not be inserted due to the error -->",mysqli_error($conn);
    // }



    // $sql= "create database wp_project";
    // $result=mysqli_query($conn,$sql);

    // if($result){
    //     echo "The database is created..";
    // }
    // else{
    //     echo "The database is not created because of the error ---> ". mysqli_error($conn);
    // }


    // $flg = mysqli_close($conn);
    // $t = $flg ? "<br /> Closed..." : "<br /> Not close";
    // echo $t;             
 

?> -->
