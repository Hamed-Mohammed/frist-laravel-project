-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2018 at 01:52 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Venus', 'wtZHfD49UA31a6rGfJQ1.png', '2018-01-18 15:10:34', '2018-01-19 08:33:49'),
(2, 'Earth', '0BahslsqdN0ngXSITj4G.png', '2018-01-18 15:10:39', '2018-01-19 08:34:03'),
(3, 'Mars', 'EzT1XHr8NtqQ3msbedOH.png', '2018-01-18 15:10:41', '2018-01-19 08:34:18'),
(4, 'Jupiter', '3By0mQwCoPIEZxaqBJ7f.png', '2018-01-18 15:10:44', '2018-01-19 08:37:17'),
(5, 'Saturn', 'OBfvYS9X2bCZSYIo3CqA.png', '2018-01-18 15:10:50', '2018-01-19 08:34:45'),
(6, 'Neptune', 'pgcuz0jl50.png', '2018-01-19 08:36:54', '2018-01-19 08:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_18_102655_create_news_table', 1),
(4, '2018_01_18_102749_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide` tinyint(1) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `post`, `image`, `slide`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 'Earth', 'Earth is the third planet from the Sun and the only object in the Universe known to harbor life. According to radiometric dating and other sources of evidence, Earth formed over 4 billion years ago.[24][25][26] Earth\'s gravity interacts with other objects in space, especially the Sun and the Moon, Earth\'s only natural satellite. Earth revolves around the Sun in 365.26 days, a period known as an Earth year. During this time, Earth rotates about its axis about 366.26 times', 'I8exdoAszt.png', NULL, 2, 1, '2018-01-19 09:19:50', '2018-01-19 09:19:50'),
(11, 'Geological history of Earth', 'The geological history of Earth follows the major events in Earth\'s past based on the geologic time scale, a system of chronological measurement based on the study of the planet\'s rock layers (stratigraphy). Earth formed about 4.54 billion years ago by accretion from the solar nebula, a disk-shaped mass of dust and gas left over from the formation of the Sun, which also created the rest of the Solar System.\r\n\r\nEarth was initially molten due to extreme volcanism and frequent collisions with other bodies. Eventually, the outer layer of the planet cooled to form a solid crust when water began accumulating in the atmosphere. The Moon formed soon afterwards, possibly as a result of the impact of a planetoid with the Earth. Outgassing and volcanic activity produced the primordial atmosphere. Condensing water vapor, augmented by ice delivered from comets, produced the oceans.\r\n\r\nAs the surface continually reshaped itself over hundreds of millions of years, continents formed and broke apart. They migrated across the surface, occasionally combining to form a supercontinent. Roughly 750 million years ago, the earliest-known supercontinent Rodinia, began to break apart. The continents later recombined to form Pannotia, 600 to 540 million years ago, then finally Pangaea, which broke apart 200 million years ago.\r\n\r\nThe present pattern of ice ages began about 40 million years ago, then intensified at the end of the Pliocene. The polar regions have since undergone repeated cycles of glaciation and thaw, repeating every 40,000–100,000 years. The last glacial period of the current ice age ended about 10,000 years ago.', 'qDWKoQwxRu.png', NULL, 2, 1, '2018-01-19 09:22:40', '2018-01-19 09:22:40'),
(12, 'Structure of the Earth', 'The interior structure of the Earth is layered in spherical shells: an outer silicate solid crust, a highly viscous mantle, a liquid outer core that is much less viscous than the mantle, and a solid inner core. Scientific understanding of the internal structure of the Earth is based on observations of topography and bathymetry, observations of rock in outcrop, samples brought to the surface from greater depths by volcanoes or volcanic activity, analysis of the seismic waves that pass through the Earth, measurements of the gravitational and magnetic fields of the Earth, and experiments with crystalline solids at pressures and temperatures characteristic of the Earth\'s deep interior.', '3nRHYX2hnF.png', NULL, 2, 1, '2018-01-19 09:56:22', '2018-01-19 09:56:22'),
(13, 'Gravity of Earth', 'The gravity of Earth, which is denoted by g, refers to the acceleration that is imparted to objects due to the distribution of mass within the Earth. In SI units this acceleration is measured in metres per second squared (in symbols, m/s2 or m·s−2) or equivalently in newtons per kilogram (N/kg or N·kg−1). Near the Earth\'s surface, gravitational acceleration is approximately 9.8 m/s2, which means that, ignoring the effects of air resistance, the speed of an object falling freely will increase by about 9.8 metres per second every second. This quantity is sometimes referred to informally as little g (in contrast, the gravitational constant G is referred to as big G).\r\n\r\nThe precise strength of Earth\'s gravity varies depending on location. The nominal \"average\" value at the Earth\'s surface, known as standard gravity is, by definition, 9.80665 m/s2.[2] This quantity is denoted variously as gn, ge (though this sometimes means the normal equatorial value on Earth, 9.78033 m/s2), g0, gee, or simply g (which is also used for the variable local value). The weight of an object on the Earth\'s surface is the downwards force on that object, given by Newton\'s second law of motion, or F = ma (force = mass × acceleration). Gravitational acceleration contributes to the total acceleration, but other factors, such as the rotation of the Earth, also contribute, and, therefore, affect the weight of the object.', '3WhL8nGqBG.png', NULL, 2, 1, '2018-01-19 09:57:24', '2018-01-19 09:57:24'),
(14, 'Venus', 'Venus is the second planet from the Sun, orbiting it every 224.7 Earth days.[12] It has the longest rotation period (243 days) of any planet in the Solar System and rotates in the opposite direction to most other planets. It has no natural satellites. It is named after the Roman goddess of love and beauty. It is the second-brightest natural object in the night sky after the Moon, reaching an apparent magnitude of −4.6 – bright enough to cast shadows at night and, rarely, visible to the naked eye in broad daylight.[13][14] Orbiting within Earth\'s orbit, Venus is an inferior planet and never appears to venture far from the Sun; its maximum angular distance from the Sun (elongation) is 47.8°.\r\nVenus is a terrestrial planet and is sometimes called Earth\'s \"sister planet\" because of their similar size, mass, proximity to the Sun, and bulk composition. It is radically different from Earth in other respects. It has the densest atmosphere of the four terrestrial planets, consisting of more than 96% carbon dioxide. The atmospheric pressure at the planet\'s surface is 92 times that of Earth, or roughly the pressure found 900 m (3,000 ft) underwater on Earth. Venus is by far the hottest planet in the Solar System, with a mean surface temperature of 735 K (462 °C; 863 °F), even though Mercury is closer to the Sun. Venus is shrouded by an opaque layer of highly reflective clouds of sulfuric acid, preventing its surface from being seen from space in visible light. It may have had water oceans in the past,[15][16] but these would have vaporized as the temperature rose due to a runaway greenhouse effect.[17] The water has probably photodissociated, and the free hydrogen has been swept into interplanetary space by the solar wind because of the lack of a planetary magnetic field.[18] Venus\'s surface is a dry desertscape interspersed with slab-like rocks and is periodically resurfaced by volcanism.', 'q2YPYJDmU4.png', NULL, 1, 1, '2018-01-19 10:04:24', '2018-01-19 10:04:24'),
(15, 'Venus: Overview: Planetary Hot Spo', 'Venus is the second planet from the sun and our closest planetary neighbor.\r\n\r\nSimilar in structure and size to Earth, Venus spins slowly in the opposite direction most planets do. Its thick atmosphere traps heat in a runaway greenhouse effect, making it the hottest planet in our solar system with surface temperatures hot enough to melt lead. Glimpses below the clouds reveal volcanoes and deformed mountains.\r\n\r\nVenus is named for the ancient Roman goddess of love and beauty, the counterpart to the Greek goddess Aphrodite.', 'OelOSsZ2eA.png', NULL, 1, 1, '2018-01-19 10:05:34', '2018-01-19 10:05:34'),
(16, 'Mars: Overview: The Red Planet', 'Mars is a cold desert world. It is half the diameter of Earth and has the same amount of dry land. Like Earth, Mars has seasons, polar ice caps, volcanoes, canyons and weather, but its atmosphere is too thin for liquid water to exist for long on the surface. There are signs of ancient floods on Mars, but evidence for water now exists mainly in icy soil and thin clouds.', 'NB6YwwNB6A.png', NULL, 3, 1, '2018-01-19 10:07:19', '2018-01-19 10:07:19'),
(17, 'Mars', 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System after Mercury. In English, Mars carries a name of the Roman god of war, and is often referred to as the \"Red Planet\"[14][15] because the reddish iron oxide prevalent on its surface gives it a reddish appearance that is distinctive among the astronomical bodies visible to the naked eye.[16] Mars is a terrestrial planet with a thin atmosphere, having surface features reminiscent both of the impact craters of the Moon and the valleys, deserts, and polar ice caps of Earth.\r\n\r\nThe rotational period and seasonal cycles of Mars are likewise similar to those of Earth, as is the tilt that produces the seasons. Mars is the site of Olympus Mons, the largest volcano and second-highest known mountain in the Solar System, and of Valles Marineris, one of the largest canyons in the Solar System. The smooth Borealis basin in the northern hemisphere covers 40% of the planet and may be a giant impact feature.[17][18] Mars has two moons, Phobos and Deimos, which are small and irregularly shaped. These may be captured asteroids,[19][20] similar to 5261 Eureka, a Mars trojan.', 'hzQ9mQGPJ5.png', NULL, 3, 1, '2018-01-19 10:08:11', '2018-01-19 10:08:11'),
(18, 'Jupiter: Overview: King of the Planets', 'Jupiter is the fifth planet from our sun and the largest planet in the solar system. Jupiter\'s stripes and swirls are cold, windy clouds of ammonia and water. The atmosphere is mostly hydrogen and helium, and its iconic Great Red Spot is a giant storm bigger than Earth that has raged for hundreds of years.\r\n\r\nJupiter is surrounded by more than 50 moons (with more a dozen more awaiting confirmation). Scientists are most interested in the Galilean satellites — the four largest moons discovered by Galileo Galilei in 1610: Europa, Callisto, Ganymede and Io. Jupiter also has three rings, but they are very hard to see and not nearly as intricate as Saturn\'s.\r\n\r\nJupiter is named for the king of ancient Roman gods.', '7Hj5CReL5e.png', NULL, 4, 2, '2018-01-19 10:16:20', '2018-01-19 10:16:20'),
(19, 'Saturn: Overview: Jewel of Our Solar System', 'The second largest planet in our solar system, adorned with thousands of beautiful ringlets, Saturn is unique among the planets. It is not the only planet to have rings -- made of chunks of ice and rock -- but none are as spectacular or as complicated as Saturn\'s. Like fellow gas giant Jupiter, Saturn is a massive ball of mostly hydrogen and helium.\r\n\r\nSurrounding by 53 confirmed and nine provisional moons, Saturn is home to some of the most fascinating landscapes in our solar system. From the jets of Enceladus to the methane lakes on smoggy Titan, the Saturn system is a rich source of scientific discovery and still holds many mysteries.\r\n\r\nThe farthest planet from Earth observable by the unaided human eye, Saturn has been known since ancient times and is named for the Roman god of agriculture and wealth. The Greek equivalent was Cronos, the father of Zeus/Jupiter.', 'Z3UMRvkopP.png', NULL, 5, 2, '2018-01-19 10:17:23', '2018-01-19 10:17:23'),
(20, 'Neptune: Overview: The Windiest Planet', 'Dark, cold and whipped by supersonic winds, Neptune is the last of the hydrogen and helium gas giants in our solar system. More than 30 times as far from the sun as Earth, the planet takes almost 165 Earth years to orbit our sun. In 2011 Neptune completed its first orbit since its discovery in 1846. \"We see (Neptune) as Columbus saw America from the coast of Spain. Its movements have been felt,', 'T2MFkppom3.png', NULL, 6, 2, '2018-01-19 10:19:09', '2018-01-19 10:19:09'),
(21, 'Jupiter', 'Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a giant planet with a mass one-thousandth that of the Sun, but two-and-a-half times that of all the other planets in the Solar System combined. Jupiter and Saturn are gas giants; the other two giant planets, Uranus and Neptune are ice giants. Jupiter has been known to astronomers since antiquity.[13] The Romans named it after their god Jupiter.[14] When viewed from Earth, Jupiter can reach an apparent magnitude of −2.94, bright enough for its reflected light to cast shadows,[15] and making it on average the third-brightest object in the night sky after the Moon and Venus.\r\n\r\nJupiter is primarily composed of hydrogen with a quarter of its mass being helium, though helium comprises only about a tenth of the number of molecules. It may also have a rocky core of heavier elements,[16] but like the other giant planets, Jupiter lacks a well-defined solid surface. Because of its rapid rotation, the planet\'s shape is that of an oblate spheroid (it has a slight but noticeable bulge around the equator). The outer atmosphere is visibly segregated into several bands at different latitudes, resulting in turbulence and storms along their interacting boundaries. A prominent result is the Great Red Spot, a giant storm that is known to have existed since at least the 17th century when it was first seen by telescope. Surrounding Jupiter is a faint planetary ring system and a powerful magnetosphere. Jupiter has at least 69 moons,[17] including the four large Galilean moons discovered by Galileo Galilei in 1610. Ganymede, the largest of these, has a diameter greater than that of the planet Mercury.\r\n\r\nJupiter has been explored on several occasions by robotic spacecraft, most notably during the early Pioneer and Voyager flyby missions and later by the Galileo orbiter. In late February 2007, Jupiter was visited by the New Horizons probe, which used Jupiter\'s gravity to increase its speed and bend its trajectory en route to Pluto. The latest probe to visit the planet is Juno, which entered into orbit around Jupiter on July 4, 2016.[18][19] Future targets for exploration in the Jupiter system include the probable ice-covered liquid ocean of its moon Europa.', 'rmKzVzrud2.png', NULL, 4, 1, '2018-01-19 10:22:03', '2018-01-19 10:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hamed', 'hh@gg.com', '$2y$10$DAGVm5quxVkMo4q/M7KSH.nxp9XwdeM/jK9X3OU1VdDN.efw.j8ge', 'uMMMqFvjKxkrVXvkv1ZfwWfSTPYcGbOvs3vN1wzZeiDZskvcLJFuXad1C5s8', '2018-01-18 13:32:20', '2018-01-18 13:32:20'),
(2, 'Ali', 'ali@gg.com', '$2y$10$IMavTi3AZEgSUTsIrwlzY.jRtQTlavEWceFsynaAumIZOq9doNuHe', 'AApbGLP9I8NCoCPrqMWsHnQTD5h8wjWTZBzgooqUhZkFnYx0xwc2gt03nVs9', '2018-01-19 10:12:59', '2018-01-19 10:12:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
