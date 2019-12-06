-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2019 at 09:04 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `id` int(11) NOT NULL,
  `category` char(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `Image_dir` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`id`, `category`, `title`, `location`, `date`, `Image_dir`, `description`) VALUES
(7, 'arts', 'Members Preview', ' Art Gallery', '2019-12-07 14:30:00', 'images/exh.jpg', 'Discover the exhibitions as only a Gallery Member canâ€”before doors open to the public! Our beloved Emily Carr is back starting December 7! '),
(8, 'arts', ' Paint Night', 'Apple Art Centre', '2019-12-05 19:00:00', 'images/paint.jpg', 'There are only few things in life that are more well-paired with wine than art, so come and get your creative juice flowing with us at Kitsilano Paint Night!'),
(10, 'arts', 'Yule Duel', 'Art Gallery', '2019-12-20 14:00:00', 'images/exh2.jpg', 'Join us in Vancouverâ€™s City Centre, on the North Plaza of the Vancouver Art Gallery, for the holiday event of the year! Experience the excitement '),
(11, 'arts', 'Art Vancouver 2020', 'Convention Centre', '2020-01-05 18:00:00', 'images/vancouver.jpg', 'Art Vancouver brings together both rapidly growing creative talent and renowned international artists under one roof. Western Canada\'s largest contemporary art fair attracts over 10,000 art lovers'),
(12, 'arts', 'Signature Medal Art ', 'Canada Place', '2020-01-22 17:00:00', 'images/medal.jpg', 'Exhibiting artists exemplify the highest standards of Canadian art. Medals are awarded to the top three artists in each category, and the exhibition features a stunning array of still');

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `id` int(11) NOT NULL,
  `category` char(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `Image_dir` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`id`, `category`, `title`, `location`, `date`, `Image_dir`, `description`) VALUES
(24, 'concerts', 'Billy Joel', 'Madison Square', '2019-12-11 15:00:00', 'images/concert.jpg', 'Billy Joel, born William Martin \"Billy\" Joel is an American pianist, singer-songwriter, and composer, born on May 9th 1949 in New York, America.\r\n\r\nBilly was born into a musical family, his Father being a pianist encouraged him to learn the piano at an early age and was taught by American pianist Morton Estrin and musician Timothy Ford.\r\n\r\nThe New York born musician decided to pursue a music career after being inspired by The Beatles. He went on to find a group named \'The Echoes\' who were similar to The Beatles and specialised in British Invasion covers. The band started to record in studios in 1965, but Billy was unfortunately kicked out of the band as he refused to wear the matching outfits worn by the other members. However, Billy went on to play the piano solo for various productions and recordings.\r\n\r\nEventually he recorded his first solo studio album, released in 1971, named \"Cold Spring Harbour\". This was not as successful as he had hope however, and later signed with Columbia and released another album with them in 1973, named \"Piano Man\".\r\n\r\nFinally a breakthrough for the talented pianist, since the release of his first hit song, \"Piano Man\", Billy Joel famously became the 6th best selling recording artist and the third best-selling solo artist in America.\r\n\r\nHe has impressively been included into the Songwriters Hall of Fame, the Rock and Roll Hall of Fame and the Long Island Music Hall of Fame in his music career.'),
(25, 'concerts', 'Alanis Morissette', 'Apollo Theater', '2019-12-02 19:30:00', 'images/concert.jpg', 'Biography\r\nAlanis Morissette (born June 1, 1974) is a child actress turned alternative pop rock sensation, known for her candid and emotive delivery, Morissette was born in Ottawa, Ontario, Canada.\r\n\r\nPrior to making waves in the music industry, Morissette had appeared on the childrenâ€™s television show â€œYou Canâ€™t Do That on Televisionâ€. Using money she had earned from the show the young talent recorded her first music demo entitled â€œFate Stay With Meâ€ in 1985, when the singer was 11. Three years later Morissette inked a publishing contract and in 1991, after signing with MCA Canada, released her debut album â€œAlanisâ€. Produced and co-written by Leslie Howe, the album became a hit in Canada, spawned the singles â€œToo Hotâ€, â€œWalk Awayâ€, and â€œFeel Your Loveâ€, and led to Morissette winning the Juno Award for Most Promising Female Vocalist.\r\n\r\nMorissetteâ€™s sophomore album â€œNow Is the Timeâ€, released in 1992, was a more thoughtful and candid album, and featured less pop production work than its predecessor. Despite being popular and producing three Top 40 singles â€œAn Emotion Awayâ€, â€œNo Apologiesâ€ and â€œ(Change Is) Never a Waste of Timeâ€, the album was a comparative commercial failure and the singer was dropped from MCA Canada.\r\n\r\nAfter graduating from high school, in liaison with her manager Scott Welsh, Morissette moved to Toronto, Canada, and began recording her third full-length in songwriter and producer Glen Ballardâ€™s studio. By 1995 she had signed a deal with Maverick Records who issued â€œJagged Little Pillâ€ internationally in June 1995. The albumâ€™s lead single â€œYou Oughta Knowâ€ soon got picked up by the relevant and influential Los Angeles, California radio station KROQ-FM, snowballing Morissette to success. The exposure led to heavy rotation on MTV and MuchMusic, and resulted in â€œJagged Little Pillâ€ reaching No. 1 in the U.S. Subsequent singles included â€œAll I Really Wantâ€, â€œHand in My Pocketâ€ and the instantly recognisable â€œIronicâ€. The album went on to sell over 30 million copies worldwide, was certified 12 times platinum in Canada, and won the singer-songwriter six Juno Awards and four Grammy Awards in 1996.\r\n\r\nAfter a successful tour in support of the album, and a six-week hiatus in India, the singer collaborated with Ringo Starr and Dave Matthews Band before returning to the studio to focus on her follow-up. Released in 1998, â€œSupposed Former Infatuation Junkieâ€ earned the highest first-week sales by any female artist, however failed to live-up to the success of its predecessor. After contributing four tracks to the Jonathan Elias project â€œThe Prayer Cycleâ€ Morissette released the live acoustic album â€œAlanis Unpluggedâ€ and toured alongside Tori Amos.\r\n\r\nMorissetteâ€™s fifth studio album â€œUnder Rug Sweptâ€ once again topped the charts in Canada, this time however the singer wrote and produced the album on her own. Aided by the singles â€œHands Cleanâ€, â€œSo Unsexyâ€, and â€œPrecious Illusionsâ€, the album went platinum in Canada and sold over a million copies in the States. After the live concert DVD â€œFeast on Scrapsâ€ in 2002 the singer went on to release her sixth full-length album â€œSo-Called Chaosâ€ issued in 2004, followed by the acoustic rework of her breakthrough album entitled â€œJagged Little Pill Acousticâ€. In 2008 Morissette released the album â€œFlavors of Entanglementâ€ which documented the break-up of her relationship with Ryan Reynolds, followed by â€œHavoc and Bright Lightsâ€ in 2012.'),
(26, 'concerts', 'Bob Dylan', 'Beacon Theatre', '2019-12-05 20:00:00', 'images/concert.jpg', 'Biography\r\nRobert Allen Zimmerman was born on the 24th of May, 1941 in Minnesota, US. In 1959 he started performing folk music in the coffee houses of Minneapolis, and began introducing himself as Bob Dylan. The rest, they say, is history.\r\n\r\nFive decades on, thereâ€™s still never been another artist that so many have written and speculated about to no avail whatsoever. Bob Dylan is still an enigma in an age where artifice and construct pretty much exists to be torn down and exposed. This is still the case even after he began publishing his own memoirs, and thatâ€™s saying something.\r\n\r\nAll we know for sure about one of the most influential and respected recording artists is that he earned that title with each and every one of his 35 studio albums, from 1962â€™s self-titled debut, to his most recent effort 2012â€™s â€œTempestâ€.\r\n\r\nItâ€™s pretty much pointless to try and sum up Dylanâ€™s career unless youâ€™ve been given a books amount of space to do so. His countless amounts of reinventions and the sheer musical diversity on display give even the chameleonic likes of Bowie and Madonna a run for their money.\r\n\r\nEvery single incarnation has given the world something entirely unique, from the serious troubadour of 1964â€™s â€œThe Times They Are a-Changinâ€™!â€ through the rock and roll Judas of â€œHighway 61 Revisitedâ€, all the way up to his Gospel period heralded by 1979â€™s â€œSlow Train Comingâ€, or more recently, the thunderous urban Blues of 2009â€™s â€œTogether Through Lifeâ€.\r\n\r\nThis is a man whose influence on music and pop culture in general is up there with his old buddies The Beatles (who, legend has it, Dylan introduced to weed on the set of the film â€œHelp!â€). So the truth of the matter is that even if you arenâ€™t a fan of his songs, Bob Dylan is still more deserving of your respect than practically any other solo artists in music history.'),
(27, 'concerts', 'Caifanes', 'Playstation Theater', '2019-12-07 20:00:00', 'images/concert1.jpg', 'Biography\r\nWith a unique fusion of Prog, New Wave and a twist of Latin influence, Caifanes became one of Mexicoâ€™s biggest bands in the 80s.\r\n\r\nBorn out of the ashes of previous act â€˜Las Insolitas ImÃ¡genes de Auroraâ€™ , SaÃºl HernÃ¡ndez, Alfonso AndrÃ© and Alejandro Marcovich officially formed Caifanes in 1986. Their first show came in 1987 and provided an early indicator of their success when the venue was packed out, leaving fans out in the streets.\r\n\r\nWord of the band spread throughout Mexico, known for their radical look and sound which was seen as a stark contrast to the popular artists of the time. Their unique look was inspired by British acts like The Cure, which was cool in the UK but the make-up and black suits were often too much for many in the Mexican industry.\r\n\r\nEventually the band, alongside other Rock en EspaÃ±ol acts, became too much for the industry to ignore and the band eventually signed with RCA-Ariola. After selling out the 10000 capacity Mexico Auditorium for two shows, there could be no doubting the bandâ€™s success. With the release of their second album â€˜El Diablitoâ€™, the band really cemented the Mexican Rock sound which the band would become synonymous with.\r\n\r\nBy 1994 the band were at an all-time high in popularity, selling out stadiums and other huge shows however personal tensions led to a split in 1995. However by 2010 the band had buried the hatchet and reformed to play huge shows at places like Coachella and others.'),
(28, 'concerts', 'Kansas', 'Beacon Theatre', '2019-12-14 20:00:00', 'images/concert1.jpg', 'Tour name: KANSAS Leftoverture & Point of Know Return - One Night Only\r\n\r\nFor one night only at The Beacon Theatre in New York City, Americaâ€™s preeminent progressive rock band, KANSAS, will be performing two of rockâ€™s most iconic albums, Leftoverture and Point of Know Return, in their entireties. On Saturday, December 14, 2019, KANSAS will be showcasing the two multi-platinum albums as well as other fan favorites. Ultimate Classic Rock announced the concert event here: http://ultimateclassicrock.com/kansas-beacon-2019.\r\n\r\nKANSAS pre-sale tickets and VIP Packages are available at 10AM on Tuesday, May 14 using promo code KANSASBAND'),
(29, 'concerts', 'David Byrne', 'Hudson Theatre', '2019-12-07 17:00:00', 'images/concert1.jpg', 'Biography\r\nMaking his fame in the iconic new wave band Talking Heads, front man David Byrne (born 14 May 1952) from Scotland, UK, boasts not only his Grammy award winning talent as a singer-songwriter but in his prolific career adds actor, writer and director to his impressive list of accolades.\r\n\r\nEarly on Byrne developed a love for music developing an obsession with the family record player and at five this inquisitiveness grew as his flair for music took control as started learning to play the harmonica. With his family migrating to America at nine, Byrne spent the rest of his childhood raised in Baltimore, US where he picked up guitar, playing in a few local bands.\r\n\r\nA brief stint at Rhode Island School of Design marked the beginning of his musical path and in 1975 created the band Talking Heads who would become a beacon for new wave American rock bands of the 80â€™s. Whilst having a majorly successful run in the band as principal songwriter and distinctive vocalist responsible for hits such as â€œPsycho Killerâ€ and â€œBurning Down the Houseâ€, Byrne established a solo career which allowed his creativity to blossom outside of Talking Heads.\r\n\r\nStriking a bond with musician and producer Brian Eno would push Byrneâ€™s experimental tendencies starting with the incredible debut solo release â€œMy Life in the Bush of Ghostsâ€ in 1981 which critics praised as one of the best albums of the 80â€™s with its pioneering use of sampling and fusing electronic with world music. With iconic solo albums such as â€œRei Momoâ€ (1989), Feelings (1997) and â€œLook into the Eyeballâ€ (2001) and the entire Talking Head discography, Byrne has influenced major contemporary acts such as: Radiohead, R.E.M. and Vampire Weekend.\r\n\r\nEmbracing all genres and styles of music, Byrne time after time strikes gold with his ability to adapt and inject his personal style into everything he touches, creating musical masterpieces which transcend time and genre while inspiring generations.'),
(30, 'concerts', 'Bad Bunny', 'Barclays Center', '2019-12-16 20:00:00', 'images/concert2.jpg', 'Benito Antonio MartÃ­nez Ocasio, known by his stage name Bad Bunny, is a Puerto Rican Latin trap and reggaeton singer. His music is often defined as Latin trap and reggaeton, but he has incorporated various other genres into his music, including rock, bachata, and soul'),
(31, 'concerts', 'Xavier Omar', 'Webster Hall', '2019-12-18 19:00:00', 'images/concert3.jpg', 'Sango began his career in 2010. Sango is also part of AGO (pronounced as individual letters), a team of rappers, singers and producers that he met when he moved to Michigan from Seattle. His music consists of a wide variety of styles, including Rap, Chillhop, R&B, Brazilian Funk and more'),
(32, 'concerts', 'Snoop Dogg', 'The Wiltern', '2019-12-15 19:00:00', 'images/concert3.jpg', 'Calvin Cordozar Broadus Jr., known professionally as Snoop Dogg, is an American rapper, singer, songwriter, producer, media personality, entrepreneur, and actor'),
(33, 'concerts', 'ILLENIUM', 'STAPLES Center', '2019-12-17 19:00:00', 'images/concert4.jpg', 'Nicholas D. Miller, known professionally as Illenium, is an American musician, DJ, and record producer. He has released three studio albums with his most recent, Ascend, being released in August 2019 on Astralwerks'),
(34, 'concerts', 'Trevor Noah', 'STAPLES Center', '2019-12-26 22:00:00', 'images/concert4.jpg', 'Trevor Noah is a South African comedian, writer, producer, political commentator, actor, and television host. He is the current host of The Daily Show, an American satirical news program on Comedy Central'),
(35, 'concerts', 'The Chainsmokers', 'Rogers Arena', '2019-12-06 19:00:00', 'images/chain.jpg', 'with 5 Seconds of Summer and Lennon Stella'),
(36, 'concerts', 'Boney M', 'Vogue Theatre', '2019-12-22 19:00:00', 'images/theatre.jpg', 'MRG Concerts presents: Boney M. Holiday Favourites & Classic Hits Feat. original singer Liz Mitchell w/ Morgan James Sunday, December 8th, 2019 The Vogue Theatre - Vancouver, BC All Ages Doors: 7pm'),
(37, 'concerts', 'The Dandy Warhols', 'Commodore ballroom', '2019-12-20 18:30:00', 'images/ballr.jpg', 'The Dandy Warhols at Commodore Ballroom at 2019-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

CREATE TABLE `locals` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `Image_dir` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`id`, `category`, `title`, `location`, `date`, `Image_dir`, `description`) VALUES
(48, 'locals', 'Christmas Market', 'Canda Place', '2019-12-09 15:00:00', 'images/vancouver.jpg', 'One of Vancouverâ€™s longest-running Christmas events gets underway soon at a waterfront landmark.\r\n\r\nChristmas at Canada Place is in its 32nd year of delighting locals and visitors alike with all sorts of free family-friendly fun to celebrate the season. The event kicks off on Dec. 6, and runs through Jan. 1, 2020.'),
(49, 'locals', 'Got Craft? Holiday Edition', 'Croatian Cultural Centre', '2019-12-07 12:00:00', 'images/craft.jpg', 'When:Saturday, December 7 +\r\nSunday, December 8, 2019 \r\n10:00 am to 5:00 pmAdmission:$5.00 at the door or $3.00 online in advanceWhere:Croatian Cultural Centre 3250 Commercial Drive, Vancouver (BC)Directions:GOOGLE MAPS | TRANSLINK TRIP PLANNER\r\nGot Craft? and the Croatian Cultural Centre are conveniently located at the corner of Commercial Drive and East 16th Avenue.\r\n\r\nParking: There is plenty of free street parking around the venue and a parking lot located at the front and back of the Croatian Cultural Centre.\r\n\r\nTransit: We are a 10 minute walk from the Commercial Broadway Skytrain station and bus #20 stops right in front of the venue.'),
(50, 'locals', 'Contact Festival', 'BC Place', '2019-12-28 20:00:00', 'images/club.jpg', 'Contact Festival: Tiesto & Rezz'),
(51, 'locals', 'HOLIDAY JAM', 'The Basement', '2019-12-07 19:00:00', 'images/jam.jpg', 'Festive all ages holiday concert for charity w/live performances by local Vancouver rnb artists! Proceeds to Covenant House. 19+ cash bar.\r\nAbout this Event\r\nThe Basement Vancouver X 100 Collective present \'HOLIDAY JAM,\' an all ages festive concert for charity in store Saturday December 7th from 7pm-9pm at The Basement (Gastown).\r\n\r\nStart the holidays off right and join us for a lovely evening filled with holiday inspired music & original songs performed live from local rnb artists Teon Gibbs, Fara, Makadi, Amber Bayani & Rebecca Sichon!\r\n\r\n100% of door sales will be donated to Covenant House Vancouver as well as proceeds from the bar + our 50/50 draw\r\n\r\nFestive 19+ Cash Bar sponsored by Nude Vodka- also featuring some yummy holiday inspired drinks ;)\r\n\r\nWEAR YOUR FAV HOLIDAY-ESQUE SWEATERS FOR EXTRA HOLIDAY COMFORT & ENJOYMENT!\r\n\r\nBring yourself, your lover, your friend(s), your mom, your kid(s) and help us ring in the holiday season together with some of Vancouver\'s best artists while giving back to our community â™¥\r\n\r\nDoors at 7PM\r\n\r\nALL AGES (Yes! Bring your whole fam!)\r\n\r\n$10 Cover\r\n\r\n19+ festive Cash Bar\r\n\r\nSnacks provided\r\n\r\n50/50 Draw + in store giveaway\r\n\r\nFACEBOOK EVENT PAGE: https://www.facebook.com/events/777928102648587/'),
(52, 'locals', 'Karaoke Night', 'Canada Place', '2019-12-12 19:00:00', 'images/karaoke.jpg', 'Vancouver knows how to deck its halls (and everything else) for the holiday season, so why not roll your way around town checking out the best and the brightest while singing karaoke Christmas carols?\r\n\r\nThe Karaoke Christmas Lights Trolley Tour is back for 2019, and it is sure to dazzle and delight.\r\n\r\nEach trolley is equipped with TVâ€™s, karaoke machines, and your favourite Christmas carols to sing while you roll through the city in search of the most sparkling lights.\r\n\r\nFirst stop on your three-hour tour: Bright Nights at Stanley Park. Youâ€™ll hop back on to check out other local light displays such as the English Bay Christmas Tree, Hycroft Manor, and Canuck Place.\r\n\r\n'),
(53, 'locals', 'Winter Breakout', 'PNE', '2019-12-22 19:00:00', 'images/theme.jpg', 'SCHOOLBOY Q\r\n\r\nDABABY // RODDY RICCH // LIL TECCA\r\n\r\nPOLO G // NLE CHOPPA // JUGGER\r\n\r\nSEGA // A4 // DAAMCP\r\n\r\nwith sounds by Johnny Black \r\n\r\nALL AGES SHOW w/ 19+ Bar and 19+ VIP Area'),
(54, 'locals', 'Elevate Music Project ', 'Biltmore Cabaret', '2019-12-06 15:00:00', 'images/concert.jpg', 'Doors: 7:00 PM\r\nAbout this Event\r\nELEVATE Music Project is a new initiative created by The MRG Group to help reignite Vancouverâ€™s live music scene and support local emerging artists. The goal of ELEVATE Vancouver is to showcase musicians of all genres from across the province and give them a platform to develop and advance their careers. ELEVATE Vancouver recognizes a need for more support to be given to Vancouverâ€™s local music community, through exposure and access to resources that may not be available to developing artists.\r\n\r\nThe competition will be held at three of Vancouverâ€™s premier music venues The Biltmore Cabaret, The Imperial and Vogue Theatre. A four person panel of local music industry pros will act as judges, six bands will be selected from the preliminary round and play in the semi-final in early 2020, from there the top three acts to perform for a grand prize at the Vogue Theatre in February.\r\n\r\nOur prize packages have been curated to include gifts that will help bolster the careers of the participants. Prizes totalling over $50,000.00 with the winning act of ELEVATE Music Project receiving a spot in the Westward Music Festival 2020 lineup, an article in Beatroute Magazine and online media support, a cash prize of $2500, a $2500 gift certificate for Long & McQuade, press photos taken by a professional photographer, with more prizes to be announced!\r\n\r\nLetâ€™s elevate Vancouver musical talent to the forefront of the Canadian music industry!'),
(55, 'locals', 'Paint Nite', 'Dunn\'s Restaurant', '2019-12-20 18:00:00', 'images/paint.jpg', 'he Original Paint Nite: Unleash your inner artist\r\nPROMO CODE for $13 off - GOPAINT19\r\nRaise your glass to a NEW kind of night out! Paint NiteÂ® invites you to create art over cocktails at a local restaurant or bar, guided by a professional artist and party host. Grab your friends and spend two hours drinking, laughing, and flexing your creative muscles. The event begins promptly at the start time listed above. Please allow extra time to find parking and get settled. If you\'re coming with a group (yay, how fun!) make sure you arrive early to get seats together - it\'s first come, first serve.  Events last approximately two hours, at the end of which you get to take home your new masterpiece.\r\n\r\n*No food or drink is included with your ticket price, and must be purchased at the restaurant. Please note, this is NOT A BYOB event.\r\n\r\nHelp keep your artist from becoming a starving one--tips are never expected, but always appreciated! ;)'),
(56, 'locals', 'Let it Glow', 'Coal Harbour Center', '2019-12-23 14:00:00', 'images/concert2.jpg', 'Description\r\nThis activity has been cancelled.\r\n\r\nDuring the dark days of the year we want to light up our artwork! Ever wondered how the old masters were able to get their pieces glowing? How some artists are able to catch the light in their artwork? Come and join Jeanne for a hands-on afternoon of glazing, washing, dry brushing, burnishing, scumbling and other old techniques to make a new and glowing piece of art. You will love to master these classic techniques and learn to use them in your artwork and see how to apply iridescents and interference paints. From now on you will think: how did I ever paint without? All use of tools and materials are included in the course fee.\r\n\r\nAge Category\r\n6 - Adult\r\n\r\nLocation\r\nMultipurpose Room at *Coal Harbour Community Centre\r\n\r\nInstructor\r\nJeanne Krabbendam'),
(57, 'locals', 'BC AWARE DAY', 'Canada Place', '2020-01-05 14:00:00', 'images/conf.jpg', 'Description\r\nBC AWARE DAY 2020 Conference\r\n\r\nWe are extremely excited to announce the launch of our sixth annual BC AWARE Campaign, taking place from January 21st to February 7th, 2020. One of our main themes will be Focus for the Cyber Decade Ahead. We are also proud to announce our keynote speaker, Brian Krebs, the worldâ€™s most influential security blogger and bestselling author of Spam Nation. On Tuesday January 21, 2020, join us for BC AWARE DAY 2020, a one-day conference for professionals in the cybersecurity space.\r\n\r\n\r\nDate: Tuesday January 21, 2020\r\nTime: 7:00AM to 5:30PM\r\nLocation: Pan Pacific Hotel Vancouver, 999 Canada Place, Vancouver, BC\r\n\r\n\r\nWHAT CAN YOU EXPECT?\r\n\r\n20 break-out sessions on today\'s most relevant cybersecurity topics to choose from\r\nNetwork with industry peers and post-secondary students looking to break into the cybersecurity profession\r\nBC AWARE 2020 Cybersecurity Awards Ceremony - Will you be one of this year\'s winners?\r\nCanadian Cyber Defence Challenge with teams from 6 of Vancouver\'s top post-secondary schools competing\r\n'),
(58, 'locals', 'Mad Science', 'Creekside Center', '2020-01-03 15:00:00', 'images/scie.jpg', 'Description\r\nChildren will explore the world of engineering by using LEGOÂ® bricks, children will build a different engineering-themed project. They will use critical thinking, cooperation, and creative problem-solving to test and improve creations. The types of engineering fields that children will explore includes mechanical, structural, aerospace, nautical, and bioengineering.\r\n\r\nNo Class Jan 1\r\n\r\nChildren will explore the world of engineering by using LEGOÂ® bricks, children will build a different engineering-themed project. They will use critical thinking, cooperation, and creative problem-solving to test and improve creations. The types of engineering fields that children will explore includes mechanical, structural, aerospace, nautical, and bioengineering.\r\n\r\nNo Class Jan 1\r\n\r\nAge Category\r\n3 - Child\r\n\r\nLocation\r\nMultipurpose Room 1 at *Creekside Community Recreation Centre\r\n\r\nInstructor\r\nMad Science'),
(59, 'locals', 'Swimming Lesson', 'Killarney Pool ', '2020-01-18 15:00:00', 'images/swim.jpg', 'NOTE: For online registration, please only enroll one participant. If you are registering for a semi-private lesson, please ensure that you specify the first and last name of the additional participant and select the correct add on fee during your enrollment.\r\n\r\nOne on-one or two participants with one swimming instructor for a set of lessons to improve specific swimming skills. Instructors may vary from week to week.\r\n\r\nMax of three participants per lesson. Online registration is not available for three participants to one instructor: please contact the pool directly to arrange registration. Additional fees may apply.\r\n\r\n2019 Private & Semi-Private Swimming Lesson Rates\r\n\r\nNote: Price is per person per lesson.\r\n\r\nPrivate (1 instructor to 1 participant) - $30.50\r\n\r\nSemi Private (1 instructor to 2 participants) - $20.50 per person\r\n\r\nPlease bring your most recent swimming report card to the instructor on the first day of lessons.\r\n\r\nAge Category\r\nAll Ages\r\n\r\nLocation\r\nKillarney Pool at *Killarney Pool\r\n\r\nInstructor\r\nSwim Private Lesson Instructor - Killarney');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `Image_dir` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `category`, `title`, `location`, `date`, `Image_dir`, `description`) VALUES
(18, 'sports', 'Whitecaps VS IWAKI FC', 'ALOHA STADIUM', '2020-02-10 16:30:00', 'images/soccer.jpg', 'Reyna had Vancouverâ€™s best chance of the opening frame in the 26th minute, missing the target with his left foot after a beautiful build-up with Felipe and Andy Rose. Canadian centre backs Doneil Henry and Derek Cornelius also came close on a pair of first-half set pieces.\r\n\r\nAt the other end of the pitch, CrÃ©peau came up big in the 36th minute with a diving stop on a long-range Iwaki FC free kick.\r\n\r\nDos Santos would use all 11 of his substitutions throughout the second half, with eight Whitecaps FC Academy products and six teenagers concluding the match on the pitch.\r\n\r\nThe â€˜Caps will now return to Vancouver for a week of training before heading to Los Angeles for the final leg of their preseason, where they will face LA Galaxy (Feb. 16), Club Tijuana (Feb. 20), and LAFC (Feb. 23). Whitecaps FC open the 2019 MLS regular season against Minnesota United FC on March 2 at BC Place '),
(19, 'sports', 'Whitecaps VS LA Galaxy', 'CHAPION STADIUM', '2020-02-16 17:00:00', 'images/soccer.jpg', 'Vancouver Whitecaps FC played to a 0-0 draw against LA Galaxy in their first of three preseason matches in Los Angeles on Saturday.\r\n\r\nHead coach Marc Dos Santos made only one change to his starting lineup from the previous preseason match in Hawaii, as Jake Nerwinski came in for Scott Sutter at right back. New signings Ã‰rik Godoy, Inbeom Hwang, and Jasser Khmiri joined the team in LA but did not dress for Saturdayâ€™s scrimmage.'),
(20, 'sports', 'Whitecaps VS Minesota FC', 'BC PLACE', '2020-03-02 15:00:00', 'images/soccer.jpg', 'MATCH DETAILS\r\n\r\nWFC Man of the Match: Yordy Reyna\r\nReferee: Rubiel Vazquez\r\nAttendance: 27,837\r\n\r\nScoring Summary\r\n6â€™ â€“ VAN â€“ Ã‰rik Godoy (Yordy Reyna)\r\n37â€™ â€“ MIN â€“ Darwin Quintero (penalty kick)\r\n66â€™ â€“ MIN â€“ Francisco Calvo (Darwin Quintero, Romario Ibarra)\r\n70â€™ â€“ MIN â€“ Romario Ibarra (Darwin Quintero)\r\n81â€™ â€“ VAN â€“ Doneil Henry (Victor â€œPCâ€ Giro, Inbeom Hwang)\r\n\r\nStatistics\r\nPossession: VAN 49.5% â€“ MIN 50.5%\r\nShots: VAN 11 â€“ MIN 15\r\nShots on Goal: VAN 4 â€“ MIN 4\r\nSaves: VAN 1 â€“ MIN 2\r\nFouls: VAN 13 â€“ MIN 17\r\nOffsides: VAN 1 â€“ MIN 1\r\nCorners: VAN 6 â€“ MIN 2\r\nDuels won: VAN 59 â€“ MIN 56\r\nTackles won: VAN 15 â€“ MIN 15\r\n\r\nCautions\r\n24â€™ â€“ MIN â€“ Osvaldo Alonso\r\n31â€™ â€“ VAN â€“ Jon Erice\r\n45â€™ â€“ VAN â€“ Derek Cornelius\r\n45â€™+2â€™ â€“ MIN â€“ Romario Ibarra\r\n79â€™ â€“ MIN â€“ Francisco Calvo\r\n\r\nVancouver Whitecaps FC\r\n16.Maxime CrÃ©peau; 28.Jake Nerwinski, 22.Ã‰rik Godoy, 2.Doneil Henry, 13.Derek Cornelius (94.Victor â€œPCâ€ Giro 76â€™); 8.Felipe Martins (9.JoaquÃ­n Ardaiz 71â€™), 6.Jon Erice Â©, 4.Inbeom Hwang; 29.Yordy Reyna, 12.Fredy Montero, 19.Lass Bangoura (7.Lucas Venuto 69â€™)\r\n\r\nSubstitutes not used\r\n18.Zac MacMath, 15.Andy Rose, 23.Scott Sutter, 54.Simon Colyn\r\n\r\nMinnesota United FC\r\n1.Vito Mannone; 19.Romain MÃ©tanire, 15.Michael Boxall, 3.Ike Opara, 5.Francisco Calvo Â©; 8.Jan Gregus, 6.Osvaldo Alonso; 10.Miguel Ibarra, 25.Darwin Quintero (31.Hassani Dotson 90â€™+3â€™), 20.Rasmus SchÃ¼ller (13.Ethan Finlay 80â€™); 11.Romario Ibarra (9.Angelo RodrÃ­guez 83â€™)\r\n\r\nSubstitutes not used\r\n33.Bobby Shuttleworth, 14.Brent Kallman, 23.Mason Toye, 77. Chase Gasper'),
(21, 'sports', 'Blue Jays VS White Sox', 'Guaranteed Rate Field', '2020-04-20 13:00:00', 'images/baseball.jpg', 'The Chicago White Sox are an American professional baseball team based in Chicago, Illinois. They compete in Major League Baseball (MLB) as a member club of the American League (AL) Central division'),
(22, 'sports', 'Blue Jays VS Astros', 'Minute Maid Park', '2020-03-20 14:30:00', 'images/baseball.jpg', 'The Houston Astros are an American professional baseball team based in Houston, Texas. The Astros compete in Major League Baseball (MLB) as a member club of the American League (AL) West division, having moved to the division in 2013 after spending their first 51 seasons in the National League (NL).'),
(23, 'sports', 'Dodgers VS Giants', 'Oracle Park', '2020-05-01 15:00:00', 'images/baseball.jpg', 'The San Francisco Giants are an American professional baseball team based in San Francisco, California. They compete in Major League Baseball (MLB) as a member club of the National League (NL) West division. Founded in 1883 as the New York Gothams, and renamed three years later the New York Giants, the team eventually moved to San Francisco in 1958.'),
(24, 'sports', 'Patriots VS Lions', 'Gillette Stadium', '2020-12-15 13:25:00', 'images/football.jpg', 'The New England Patriots are a professional American football team based in the Greater Boston area.'),
(25, 'sports', 'Warriors VS Magics', 'Oakland Arena', '2019-12-15 16:30:00', 'images/basketball.jpg', 'The Golden State Warriors are an American professional basketball team based in San Francisco'),
(26, 'sports', 'Hornets VS Rockets', 'Toyota Center', '2019-12-22 15:15:00', 'images/basketball.jpg', 'Toyota Center is an indoor arena located in downtown Houston, Texas. It is named after the Japanese automobile manufacturer Toyota. The arena is home to the Houston Rockets of the National Basketball Association, and it was once the home of the Houston Aeros of the American Hockey League'),
(27, 'sports', 'Womens Volley ball', 'Olympic Stadium', '2019-12-11 14:00:00', 'images/volleyball.jpg', 'There are 44 NGBs for the other Olympic and Pan American Sports. USAV currently has more than 383,000 members in the 2018-19 season, including players, coaches and officials. There are about 4,500 active clubs. USAV began with eight Regional Volleyball Associations (RVAs), and now has 40 regions serving its members.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arts`
--
ALTER TABLE `arts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
