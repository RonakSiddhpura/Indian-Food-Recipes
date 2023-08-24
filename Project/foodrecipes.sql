-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 07:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodrecipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bhavin', 'bhavin123'),
('bhavy', 'bhavy123'),
('meet', 'meet123'),
('ronak', 'ronak123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_nm` varchar(30) NOT NULL,
  `category_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_nm`, `category_image`) VALUES
(1, 'Gujarati', 'KHAMAN.jfif'),
(2, 'Marathi', 'pavbhaji1.jpg'),
(3, 'South Indian', 'DOSA.jfif'),
(4, 'Punjabi', 'paratha.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `user_id` int(5) NOT NULL,
  `recipe_id` int(5) NOT NULL,
  `message` text NOT NULL,
  `f_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(5) NOT NULL,
  `email` int(25) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `f_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `full name` varchar(30) NOT NULL,
  `user_id` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`full name`, `user_id`, `email`, `password`) VALUES
('ronak', 1, 'ronak@gmail.com', 'ronak'),
('bhavya', 2, 'bhavy@gmail.com', 'bhavya'),
('bhavin', 3, 'bhavin@gmail.com', 'bhavin'),
('meet', 4, 'meet@gmail.com', 'meet');

-- --------------------------------------------------------

--
-- Table structure for table `r_details`
--

CREATE TABLE `r_details` (
  `recipe_id` int(5) NOT NULL,
  `recipe_name` varchar(20) NOT NULL,
  `ingredients` text NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `r_description1` text NOT NULL,
  `r_description2` text NOT NULL,
  `r_description3` text NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_details`
--

INSERT INTO `r_details` (`recipe_id`, `recipe_name`, `ingredients`, `video_link`, `r_description1`, `r_description2`, `r_description3`, `category_id`) VALUES
(1, 'khandvi', 'Ingredients:.<br>1/4 cup Gram flour (besan).<br>•1/4 inch ginger.<br>•salt As required.<br>•1/4 teaspoon turmeric.<br>•Asafetida(hing) as required.<br>•3/4 cup buttermilk.<br>•1/2 green chilli.<br>•3/4 tablespoon Refined oil.<br>•1/4 tablespoon lemon juice.<br>•1/4 teaspoon mustard seeds.<br>For Garnishing.<br>•1/2 teaspoon coconut.<br>•coriander leaves as required.<br>\r\n\r\n', 'https://www.youtube.com/embed/ndTp8_1Kdyk', 'Take a glass bowl and sieve besan..<br>Remove the seeds of green chillies and prepare ginger and green chilli paste..<br>Grease the reverse side of a stainless steel thali or marble tabletop with a little oil to prevent the khandvi mixture from sticking.<br>and to ease the process of rolling the Khandvi..<br> Mix the besan with ginger-green chilli paste, salt, turmeric powder,.<br> lemon juice and buttermilk. Take care that no lumps are formed..<br>\r\n\r\n', 'In a thick bottomed pan, cook this mixture by stirring continuously,.<br> till it becomes a smooth thick batter.It takes a few minutes to get this ready..<br> Quickly spread long and thin portions of the mixture over the oiled inverted thali or marble tabletop .<br>as thinly as possible while the batter is still very hot..<br>\r\n', '\r\n\r\nWhen cool, cut into strips two inches wide and roll them tightly .<br>and taking care that you don\'t break them..<br>Heat two tablespoons of oil and add a pinch of asafoetida and mustard seeds..<br> When they crackle/splutter, pour over the pieces..<br>Serve your homemade Gujarati Khandvi immediately. Garnish with grated fresh coconut and finely chopped green coriander leaves..<br>', 1),
(2, 'Undhiyu', 'Ingredients for the Muthadi/ Muthiya.<br>\r\n•Methi leaves / Fenugreek Leaves (chopped)	1 cup.<br>\r\n•Whole Wheat Flour/ Roti ka atta	¼ cup.<br>\r\n•Gram Flour / Besan	4 tbsp.<br>\r\n•Coarse whole wheat flour / Dardarra Atta	2 1/2 tbsp.<br>\r\n•Ginger Chilli Paste	½ tsp.<br>\r\n•Turmeric/ Haldi	¼ tsp.<br>\r\n•Soda Bicarb	⅛ tsp.<br>\r\n•Sugar	1 tsp.<br>\r\n•Kashmiri Red chilli powder	½ tsp.<br>\r\n•Coriander- Cumin/ Dhania- Jeera powder	¼ tsp.<br>\r\n•Salt	¾ tsp or as per your taste.<br>\r\n•Oil	2 tsp/ oil for frying.<br>\r\nIngredients for Undhiyu.<br>\r\n•Small potatoes / Alu	7.<br>\r\n•Small bringles / baingan	7.<br>\r\n•Ripe Bananas/ Kela	2.<br>\r\n•Purple Yam / Kand	1 small 200 grams.<br>\r\n•Surti Val Papadi	1 cup.<br>\r\n•Val Dana	½ cup.<br>\r\n•Tuvar/ Tur Dana	½ cup.<br>\r\n•Green Chickpeas / Harbara dana	½ cup.<br>\r\n•Fresh coconut (grated)	1 cup.<br>\r\n•Fresh Dhania / Cilantro	2 cups.<br>\r\n•Green garlic / Hara lasun	½ cup.<br>\r\n•Carom seeds / Ajwain	1 tsp.<br>\r\n•safoetida / Hing	¼ tsp.<br>\r\n•Soda bicarb	¼ tsp.<br>\r\n•Ginger chilli paste/ Adrak Mirch paste	1 tbsp.<br>\r\n•Turmeric/ Haldi	¼ tsp.<br>\r\n•Sugar	2 tbsp.<br>\r\n•Kashmiri Red Chilli Powder	1 ½ tbsp.<br>\r\n•Coriander- cumin/ Dhania- jeera powder	4 tbsp.<br>\r\n•Oil	½ cup.<br>\r\n•Salt	1 tbsp or as per your taste..<br>', 'https://www.youtube.com/embed/JCJtIkJwGxQ', 'Prepping for the Muthadi/ Muthiya.<br>\r\nWash and chop the Methi / Fenugreek leaves..<br>\r\nMethod for the Muthadi/ Muthiya.<br>\r\nTo make the muthadi take a large bowl and add the chopped up methi which is fenugreek leaves,.<br> followed by the gram flour which is besan, then the whole wheat flour which is roti ka atta,.<br> and then the Coarse whole wheat flour / Dardarra Atta, Turmeric/ Haldi,Kashmiri red chilli powder .<br>and the Coriander- cumin/ Dhania- jeera powder, sugar, Ginger Chilli Paste, salt and the soda bicarb.<br> and last but not least some oil and then use your hands and give it a nice mix..<br>\r\nAnd then add very little water about 2-3 tbsp and make it into a dough..<br>\r\nOnce the dough is ready take a little bit of oil in your hand and make small round balls the size of a small lime..<br>\r\nonce all the dough balls are ready it’s time to deep fry them,.<br> so add half of this lot in one go and fry them till they are golden in color from all sides then remove them on a paper napkin..<br>\r\n', 'Method for the Undhiyu.<br>\r\nfirst prepare the masala or stuffing for the undhyo so i an a large mixing bowl add all of the fresh dania / cilantro followed.<br> by all of the grated coconut then the green garlic / hara lasun and then the salt, sugar, Coriander- cumin/ Dhania- jeera powder, .<br>then the kashmiri red chilli powder, Ginger chilli paste, turmeric, soda bicarb and 2 tbsp of oil and now using your hand mix it all in. And then keep it aside..<br>\r\nin a large pan or wok add ½ cup of oil and.<br> (You can use the same oil you had used to fry the muthadis), and once the oil is hot,.<br>\r\nthe Asafoetida / Hing, followed by the tuvar dana, then the val dana and the harbara dana,.<br> then the surti val papdi, then the Carom seeds / Ajwain then ⅛ tsp of Soda bicarb and mix it well.<br>\r\nAnd then add 2-3 tbsp of the  prepared masala stuffing and mix well again and add about 1 ½ cup of water mix again.<br>and then cover with a lid and cook for 5 minutes on medium flame..<br>\r\n', 'After 5 minutes remove the lid and slit the bringles in four parts but it should still be intact from the bottom,.<br> and add the prepared masala stuffing in there and place all of the bringles in the pan, make sure they are all in horizontal position..<br>\r\nThen add the cut up the purple yam( big cubes) and spread them in the pan..<br>\r\nAnd time to add the potatoes So slit the small potatoes into half and in the pocket fill the prepared masala stuffing and place all of the potatoes in a horizontal position in the pan..<br>\r\nAfter that add about 2 tbsp of the prepared masala stuffing all over the veggies, and about 1 ½ cup of water and then cover the pan with a lid and add some water on the lid..<br>\r\ncook it for about 20-25 minutes or until the potatoes and bringles are fully cooked. Also make sure that the flame is on low..<br>\r\nAfter 25 minutes remove the lid, and check by using the toothpick that the potatoes and bringles are cooked..<br>\r\nNow to the already cut and slit bananas fill the prepared masala stuffing mix and add it in horizontal position in the pan.<br>\r\nFollowed by all of the mutandis and any leftover masala stuffing and using a spatula press all the veggies down very gently..<br> And then cover with a lid with water and cook for 10 minutes on low flame..<br>\r\nAfter 10 minutes remove and serve while hot..<br>', 1),
(3, 'Gujarati kadhi', '•4 tablespoon besan (gram flour).<br>\r\n•½ tablespoon ginger-green chili paste or 1 inch ginger + 1 to 2 green chilies crushed in a mortar pestle..<br>\r\n•1 cup yogurt (curd).<br>\r\n•1 tablespoon sugar (or jaggery).<br>\r\n•salt as required.<br>\r\n•½ teaspoon cumin seeds.<br>\r\n•1 inch cinnamon stick.<br>\r\n•2 cloves.<br>\r\n•8 to 10 curry leaves.<br>\r\n•2 broken dry red chilies – remove the seeds.<br>\r\n•¼ teaspoon fenugreek seeds.<br>\r\n•a generous pinch of asafoetida (hing).<br>', 'https://www.youtube.com/embed/nKZaQ1cJhE0', 'Add 2 to 2.5 cups of water..<br>\r\nWhisk everything to a smooth consistency. There should not be any lumps in this liquid mixture..<br>\r\nThe tempering ingredients are in the below photo. The curry leaves are dry curry leaves..<br>\r\n', 'In a sauce pan or pot, heat 1 tablespoon oil or ghee..<br> Add ½ teaspoon mustard seeds and let them crackle on low heat..<br>\r\nAdd the yogurt mixture slowly and carefully as it may splutter..<br> tir and mix well to combine. On a medium-low to medium heat let the kadhi mixture come to a boil first..<br>\r\nDo use a large pan and stir often,.<br>so that the kadhi does not spill out or gets browned or stuck at the bottom of the pan..<br>\r\n', 'Later let the gujarati kadhi simmer for 5 to 7 minutes more on low to medium-low heat..<br> Stir in between to avoid the lumps from forming. Adjust the salt and sugar as required..<br>\r\nCheck the taste and there should be no rawness from the besan felt in the kadhi..<br> If there is some rawness from the besan, then simmer for some more minutes as required..<br>\r\nServe Gujarati kadhi hot or warm with steamed basmati rice or phulka or paratha..<br> It makes for a comforting meal with rice served with a side of a vegetable dish, pickle or salad..<br>', 1),
(4, 'Dhokla', '•1/2 cup gram flour (besan).<br>\r\n•1/2 teaspoon sugar.<br>\r\n•1/2 teaspoon salt.<br>\r\n•1/2 tablespoon refined oil.<br>\r\n•1/2 teaspoon mustard seeds.<br>\r\n•1/3 cup and 2 teaspoon water.<br>\r\n•1/2 tablespoon lemon juice.<br>\r\n•1/2 teaspoon baking soda.<br>\r\n•7 and 1/2 curry leaves.<br>\r\nFor Garnishing.<br>\r\n•2 green chilli.<br>\r\n•1/2 teaspoon coconut powder.<br>\r\n•1/2 handful coriander leaves.<br>\r\n', 'https://www.youtube.com/embed/cSs77CQh3FI', 'To make this easy Khaman Dhokla recipe, take a large mixing bowl and add gram flour, salt, water, lemon juice and baking soda to it..<br> Mix all these ingredients well. Allow the batter to ferment for 1-2 hours. If you are making it in the winter season, this might take longer..<br> In the meantime, pour boiled water into a steamer and grease the utensil with oil..<br>', 'Pour the dhokla batter in the greased utensil and cook on low flame in a steamer for 15-20 minutes..<br> Check with a knife after 15 minutes by inserting it inside the dhokla..<br> If the knife comes out clean, remove it from the stove. Allow the dish to cool and then cut into squares..<br>', 'For the tempering, heat a pan with oil in it over a medium flame. Once the oil is sufficiently hot, add mustard seeds, curry leaves and vertically sliced green chilli..<br> Add 1/2 cup of water to the pan and allow it to boil. On 2-3 boils, lower the flame and squeeze 1/2 lemon, add sugar and green coriander leaves..<br> If you prefer higher spice levels, you can also add some finely chopped green chillies..<br> You can also make a Dhokla sandwich by layering Dhokla and adding your favourite sauce to it!.<br>', 1),
(5, 'Pav Bhaji', '•2 medium Potatoes (approx. 1½ cups chopped).<br>\r\n•1/2 cup Green Peas (fresh or frozen).<br>\r\n•3/4 cup chopped Cauliflower (approx. 1/4 head of cauliflower).<br>\r\n•1/2 cup chopped Carrot (approx. 1 medium).<br>\r\n•1 large Onion, chopped (approx. 3/4 cup).<br>\r\n•1 tablespoon Ginger Garlic Paste.<br>\r\n•2 medium Tomatoes, chopped (approx. 1¼ cup).<br>\r\n•1/2 cup chopped Capsicum (approx. 1 small).<br>\r\n•1½ teaspoons Red Chilli Powder (or less).<br>\r\n•1/4 teaspoon Turmeric Powder.<br>\r\n•1 teaspoon Cumin-Coriander Powder, optional.<br>\r\n•1 teaspoon Readymade Pav Bhaji Masala Powder.<br>\r\n•1 teaspoon Lemon Juice.<br>\r\n•Salt to taste.<br>\r\n•2 tablespoons Oil + 2 tablespoons Butter.<br>\r\n•Butter for serving.<br>\r\n•2 tablespoons finely chopped Coriander Leaves.<br>\r\n•8 Pav Buns, for serving.<br>\r\n', 'https://www.youtube.com/embed/sAnPUIvPc1I', 'Take all the vegetables listed in the ingredients. Wash them in running water and cut them into small pieces..<br>\r\nTransfer chopped potato, cauliflower, carrot and green peas into a 2-3 liter capacity pressure cooker. Add 1/2 cup water and salt to taste..<br>\r\nClose the pressure cooker with a lid and cook over medium flame for 2-whistles..<br> Turn off the flame. Open the lid after pressure releases naturally; it will take around 5-7 minutes..<br>\r\nMash the boiled vegetables gently with potato masher or using the backside of a large spoon until little chunky texture..<br> You can mash cooked veggies into a texture you like – with small chunks or smooth with no chunks at all..<br> The texture of your bhaji would depend on how you mashed the veggies..<br>\r\n', 'Heat 2-tablespoons oil and 2-tablespoons butter together in a pan over medium flame..<br> Add chopped onion and ginger-garlic paste. Sauté until onion turns translucent..<br>\r\nAdd chopped capsicum, chopped tomato and salt..<br>\r\nSauté until tomatoes and capsicum turn soft..<br>\r\nAdd 1½ teaspoons red chilli powder, 1/4 teaspoon turmeric powder, 1-teaspoon cumin-coriander powder and 1-teaspoon readymade pav bhaji masala powder..<br>\r\nStir and cook for a minute.\r\nAdd 3/4 cup water, mix well and cook for 2-3 minutes..<br>\r\nAdd boiled and mashed vegetables and 1-teaspoon lemon juice..<br>\r\nHeat 2-tablespoons oil and 2-tablespoons butter together in a pan over medium flame. Add chopped onion and ginger-garlic paste. Sauté until onion turns translucent..<br>\r\nAdd chopped capsicum, chopped tomato and salt..<br>\r\nSauté until tomatoes and capsicum turn soft.\r\nAdd 1½ teaspoons red chilli powder, 1/4 teaspoon turmeric powder, 1-teaspoon cumin-coriander powder and 1-teaspoon readymade pav bhaji masala powder..<br>\r\nStir and cook for a minute.\r\nAdd 3/4 cup water, mix well and cook for 2-3 minutes..<br>\r\nAdd boiled and mashed vegetables and 1-teaspoon lemon juice..<br>', 'Mix well and cook for 4-5 minutes. Taste for the salt at this stage and add more if required..<br> Turn off the flame. Add chopped coriander leaves and mix well. Bhaji is ready for serving..<br>\r\nCut the pav buns horizontally into halves. Heat tava over medium flame. Add a tablespoon of butter and place halved pav buns over it..<br> Shallow fry both sides until light brown spots appear, it will take around 30 seconds for each side to turn light brown. Transfer to the plate. Shallow fry remaining pavs..<br>\r\nTransfer prepared bhaji to a serving bowl and garnish with a cube of butter. Serve hot with butter roasted pav, sliced onion and lemon wedges..<br>\r\n', 2),
(6, 'Vada Pav', '•2 tsp oil.<br>\r\n• ½ tsp mustard.<br>\r\n• pinch of hing / asafoetida.<br>\r\n• few curry leaves.<br>\r\n• 1 inch ginger (crushed).<br>\r\n• 2 clove garlic (crushed).<br>\r\n• 1 chilli (finely chopped).<br>\r\n• 2 tbsp coriander (finely chopped).<br>\r\n• ¼ tsp turmeric / haldi.<br>\r\n• 2 potato / aloo (boiled & mashed).<br>\r\n• ½ tsp salt.<br>\r\n• 1 tbsp lemon juice.<br>\r\nfor besan batter:.<br>\r\n• ¾ cup besan / gram flour.<br>\r\n• 1 tbsp rice flour.<br>\r\n• ¼ tsp turmeric / haldi.<br>\r\n• ¼ tsp kashmiri red chilli powder / lal mirch powder.<br>\r\n• pinch of hing / asafoetida.<br>\r\n• ¼ tsp salt.<br>\r\n• ¼ tsp baking soda.<br>\r\n• ½ cup water.<br>\r\n• oil for deep frying.<br>\r\nother ingredients:.<br>\r\n• 6 ladi pav / dinner rolls.<br>\r\n• 7 green chilli.<br>\r\n• 6 tsp green chutney.<br>\r\n• 3 tsp tamarind chutney.<br>\r\n• 3 tsp dry garlic chutney.<br>', 'https://www.youtube.com/embed/r4saZD0J_gU', 'vada preparing recipe:.<br>\r\nfirstly, in a large kadai heat 2 tsp oil and splutter ½ tsp mustard, a pinch of hing and few curry leaves..<br>\r\nalso add 1-inch ginger, 2 clove garlic, 1 chilli, 2 tbsp coriander and saute well..<br\r\nfurther, add ¼ tsp turmeric and saute for 30 seconds..<br>\r\nadditionally, add 2 boiled and mashed potato and ½ tsp salt..<br>\r\nmix well making sure all the spices are combined well with potato..<br>\r\nturn off the flame and add 1 tbsp lemon juice..<br>\r\nmix well and aloo mixture is ready. keep aside..<br>\r\n\r\n', 'further, prepare besan batter by taking ¾ cup besan, 1 tbsp rice flour, ¼ tsp turmeric, ¼ tsp chilli powder, a pinch of hing, ¼ tsp salt and ¼ tsp baking soda..<br>\r\nadd ½ cup water or as required and prepare smooth lump free batter.\r\nnow make ball sized aloo mixture. i like my vada to be round rather than flat, flatten the balls slightly if you prefer..<br>\r\ndip in prepared besan batter and coat well..<br>\r\ndeep fry in hot oil stirring occasionally..<br>\r\nfry on medium flame till the vada turns golden and crisp..<br>\r\ndrain the vada on a kitchen paper to absorb excess oil. keep aside..<br>\r\nnow fry the green chilli, by turning off the flame – be careful as the oil splutter..<br>\r\nstir occasionally, till the blisters appear on chilli..<br>\r\ndrain the fried chilli on a kitchen paper to absorb excess oil. keep aside..<br>\r\nnow with leftover besan batter prepare chura by pouring watery besan batter in hot oil..<br> add 2 tbsp of water to besan batter to make watery besan batter..<br>\r\nfry on medium flame till the chura turns golden and crisp..<br>\r\ndrain the chura on a kitchen paper to absorb excess oil. keep aside..<br>', 'assembling vada pav recipe:.<br>\r\nnow slit the ladi pav centre halfway without cutting fully..<br>\r\nspread 1 tsp green chutney, ½ tsp tamarind chutney and ½ tsp dry garlic chutney on one side of inside pav..<br>\r\nplace the prepared vada in center of pav..<br>\r\nalso stuff few prepared chura and place a fried chilli on top of vada..<br>\r\nfinally, press the vada pav and serve immediately.<br>', 2),
(7, 'Puran Puri', 'For Puran Mixture – Sweet Filling.<br>\r\n•1 cup powdered jiggery.<br>\r\n•1 cup chana dal (skinned split bengal gram).<br>\r\n•3 cups water for pressure cooking the chana dal.<br>\r\n•2 teaspoons Ghee.<br>\r\n•1 teaspoon fennel powder (ground fennel seeds).<br>\r\n•¾ to 1 teaspoon dry ginger powder (ground ginger).<br>\r\n•½ teaspoon cardamom powder (ground cardamom)or 4 to 5 green cardamoms crushed finely.<br>\r\n•¼ teaspoon nutmeg powder (ground nutmeg).<br>\r\nFor The Poli – Outer Covering.<br>\r\n•1.5 cups whole wheat flour + ½ cup all purpose flour or you can also use 2 cups whole wheat flour instead.<br>\r\n•4 tablespoon oil or ghee (clarified butter).<br>\r\n•½ teaspoon salt or as required.<br>\r\n•¼ teaspoon turmeric powder (optional – to give a faint yellow color to the poli).<br>\r\n•water as required to knead the dough.<br>\r\n•oil or ghee as required for roasting the puran poli.<br>\r\n', 'https://www.youtube.com/embed/l7Efb-HjDPU', 'Preparing Puran.<br>\r\nRinse the chana dal first very well in water. I didn’t soaked the chana dal but you can also soak.<br> the chana dal for 30 minutes to one hour and then drain the water..<br>\r\nIn a pressure cooker, cook the chana dal for 6 to 7 whistles. The dal has to be cooked well..<br> If you soak the chana dal, the cooking time will be reduced. Once the pressure settles down on its own, strain the cooked dal. The dal has to be strained well..<br>\r\nKeep the stock aside. This stock can be used for making katachi amti which.<br> is a thin tempered dal or you can just add it to your veggie dishes or roti..<br>\r\nHeat ghee in a pan and add the ground ginger powder, ground nutmeg powder,.<br> ground cardamom powder and ground fennel powder. Fry for a few seconds on a low heat..<br>\r\nAdd the chana dal and jaggery..<br> Stir and let this puran mixture cook on a low flame till the mixture becomes dry..<br>\r\nKeep on stirring the puran mixture at intervals..<br>\r\nOnce the puran stuffing become dry and thick, switch off the flame..<br>\r\nLet it cool and then mash the puran mixture with a potato masher..<br> You can also use your mixer to mash the puran mixture very well. Keep aside..<br>\r\n', 'Preparing The Poli Dough.<br>\r\nMeanwhile take whole wheat flour, all purpose flour and salt in a bowl mix well..<br>\r\nAdd a little bit of water and ghee and mix. Begin to knead the dough adding water as required..<br>\r\nThe dough should be smooth and soft. Cover and keep aside the dough for 15-20 minutes..<br>\r\nMaking Puran Poli.<br>\r\nTake a medium or large size ball from the dough..<br> Roll it 2 to 3 inches in circumference on a dusted rolling board..<br>\r\nPlace a portion of puran mixture in the center of the rolled dough..<br>\r\nBring the edges together towards the center. Join all the edges and pinch them..<br>', 'Sprinkle some flour and start rolling the dough..<br>\r\nMake a medium or large circle (poli) as depending upon the size of the dough and puran filling you took..<br>\r\nOn a heated tawa or griddle, spread some ghee. Place the rolled poli/dough circle on the tawa..<br>\r\nWhen one side gets browned, turn over and cook the other side till you see some brown spots..<br>\r\nOnce the second side gets browned, then turn over and apply ghee..<br> If everything is done properly then puran poli will puff up. The poli should be cooked well with brown spots and golden..<br>\r\nMake all puran polis this way and stack them in a casserole or in a kitchen napkin..<br>\r\nYou can serve puran poli warm or at room temperature with milk, ghee or curd (yogurt)..<br>\r\n', 2),
(8, 'missal pav', 'For paste of gravy/sauce:.<br>\r\n•2 tbsp oil.<br>\r\n•1 tsp ginger paste.<br>\r\n•1 tsp garlic paste.<br>\r\n•1 cup onion, chopped.<br>\r\n•1 cup tomato, chopped.<br>\r\n•3/4 cup coconut, grated.<br>\r\nTo make gravy/sauce (Kat in Marathi):.<br>\r\n•3 tbsp oil.<br>\r\n•spice paste (as above).<br>\r\n•to taste salt.<br>\r\n•1 tsp red chilli paste.<br>\r\n•1 tsp garam masala.<br>\r\n•1/2 tsp turmeric powder.<br>\r\n•1 tsp cumin-coriander powder.<br>\r\n•1/2 tsp cinnamon & clove powder.<br>\r\n•3 cups water (or as required to adjust the consistency).<br>\r\nTo make usal:.<br>\r\n•3 tbsp oil.<br>\r\n•1 tsp garlic paste.<br>\r\n•1 tsp ginger paste.<br>\r\n•1/2 tsp hing (asafoetida).<br>\r\n•1 1/2 cups steamed matki (moth) (soaked overnight).<br>\r\n•1 cup potato (cut into square pieces), boiled.<br>\r\n•1/2 tsp turmeric powder.<br>\r\n•1 tsp garam masala.<br>\r\n•1/2 tsp cinnamon-clove powder.<br>\r\n•1 lime juice.<br>\r\n•3 cups water (or as required).<br>\r\nFor garnishing:.<br>\r\n•onion, chopped.<br>\r\n•coriander, chopped.<br>\r\n•To serve with: Paav, slice of lemon.<br>\r\n', 'https://www.youtube.com/embed/ozyN7b3jP-A ', 'Prepare paste:.<br>\r\nHeat oil in a pan. Add ginger paste, garlic paste and chopped onion..<br>\r\nSaute till the onion is transculent..<br>\r\nNow add chopped tomatoes and grated coconut..<br> Mix well and saute it for few minutes..<br>\r\nAllow the mixture to cool then grind it into a smooth paste..<br>\r\nPrepare gravy/sauce (\'Kat\' in Marathi):.<br>\r\nHeat oil in a pan. Add the ready paste into oil and saute it for about 2 minutes..<br>\r\nNow add salt, red chilly powder, garam masala, turmeric powder,.<br> cumin-coriander powder, clove-cinnamon powder and mix it..<br>\r\nAdd water and cook till the mixture starts leaving oil..<br>\r\nTransfer it in a bowl and keep it aside..<br>\r\n', 'Prepare Usal:.<br>\r\nHeat oil in a pan. Add ginger paste, garlic paste and asafoetida..<br>\r\nSaute it for a minute and add soaked & boiled sprouts along with potatoes. Mix it well..<br>\r\nNow add salt, turmeric powder, garam masala, clove-cinnamon powder and lime juice..<br>\r\nAdd water to it and cook it for about 8-10 minutes..<br>\r\nTransfer it in a separate bowl..<br>\r\n', 'Prepare Misal:.<br>\r\nTake a serving bowl. First pour ready usal in the bowl and then pour the red gravy over it..<br>\r\nThereafter, add finely chopped onion and farsan to the mixture..<br>\r\nGarnish it with chopped coriander. Serve it with pav and a slice of lemon.<br>\r\n', 2),
(9, 'Dosa', '•½ cup idli rice or parboiled rice or regular rice – 100 grams.<br>\r\n•½ cup regular rice – 100 grams.<br>\r\n•¼ cup urad dal – 50 grams (husked whole or split black gram).<br>\r\n•⅛ teaspoon fenugreek seeds or 2 pinches (methi seeds or methi dana).<br>\r\n•2 tablespoons thick poha (flattened rice).<br>\r\n•1.5 cups water – for soaking both rice and lentils.<br>\r\n•¾ cup water – for grinding, do add water as required.<br>\r\n•½ teaspoon rock salt edible and food grade or non-iodized salt or sea salt crystals or Himalayan pink salt.<br>\r\n•oil as required.<br>', 'https://www.youtube.com/embed/gY1LXg8AnU4', 'Soaking rice and lentils.<br>\r\nIn a bowl take ½ cup idli rice or parboiled rice along with ½ cup regular rice..<br> Instead of adding regular rice, you can also make the dosa with a total of 1 cup idli rice as I have shown in the video..<br> Kindly note that the video has the recipe ingredients doubled in proportion..<br>\r\nTo the same bowl, add ¼ cup urad dal and ⅛ teaspoon fenugreek seeds (methi). .<br>\r\nRinse the rice, lentils and methi seeds together a couple of times and keep them aside..<br>\r\nIn a separate bowl, take 2 tablespoons of thick poha (flattened rice or parched rice)..<br>\r\nRinse poha once or twice in water and then add to the bowl containing the rinsed rice+lentils+methi seeds..<br>\r\nAdd 1.5 cups of water and mix. Cover with a lid and soak everything for 4 to 5 hours..<br>\r\nMaking Dosa Batter.<br>\r\nDrain all the water and add the soaked ingredients to a mixer grinder or a blender..<br>\r\nAdd ⅔ to ¾ cup water and grind or blend till you get a fine grainy consistency of rice in the batter..<br> A smooth consistency of the batter is also fine..<br>\r\nIf the mixer gets heated up, then stop and wait for some minutes. When the mixer cools down, grind again..<br>\r\nDepending on the jar capacity, you can grind everything once or in two batches..<br> I ground in two batches and added a total of ¾ cup water..<br>\r\nNow take the batter in a large bowl or pan. In case the dosa batter becomes thin,.<br> then add a few tablespoons of rice flour to thicken it..<br> Mix the rice flour very well in the batter..<br>\r\nAdd ½ teaspoon of edible rock salt. Mix very well..<br> Instead of rock salt, you can use non-iodized salt or sea salt crystals or Himalayan pink salt..<br>', 'Fermenting Dosa Batter.<br>\r\nCover and allow to ferment for 8 to 9 hours or more..<br> The time of fermentation will vary depending on the temperature conditions, climate and altitude..<br>\r\nIn winters, the time of fermentation can go up to 14 to 24 hours..<br> If you live in a cold city or high altitude then I highly recommend fermenting the batter in an Instant pot if you have one..<br>\r\nI have listed below more fermentation tips and suggestions including fermenting dosa batter in an Instant pot. So do read these handy and helpful tips..<br>\r\nIn the below photo, you see the dosa batter after 11 hours of fermentation. A proper fermentation will double or triple up the volume of the batter with a light sour aroma..<br>\r\nNow lightly stir the batter, before you begin to make dosa. You will also see many tiny air pockets in the batter. As you see in the below photo, the batter is very well fermented.<br>\r\nMaking Dosa.<br>\r\nHeat a cast iron pan. When the pan becomes hot, spread ¼ to ½ teaspoon oil all over.<br> the pan with a spoon or with a thick paper towel dipped in oil. For a richer taste, you can cook the dosa with ghee or butter..<br>\r\nNote that the oil should be spread evenly or else it becomes difficult to spread the batter. .<br>If the pan is well seasoned you don’t need to spread oil. I suggest keeping a separate skillet or tawa to make only dosa..<br>\r\nDo keep the heat on low to low-medium flame, so that you are easily able to spread the batter. If the pan base is very thick, then keep the flame to medium..<br>', 'For a low-fat option, just make the dosa without any oil..<br> But make sure that your pan is well seasoned. Otherwise the dosa will stick to the pan..<br>\r\nNow take a ladle full of the dosa batter or about ¼ cup of the batter..<br> Pour the batter and gently spread the batter starting from the center and moving outwards. In the below photo you will see a well-spread dosa batter..<br>\r\nCook the dosa on low to medium heat. Do regulate the heat as per the pan size and thickness..<br> You can even cover the dosa with a lid and let it get cooked from the bottom as I do..<br>\r\nCook till the base is nicely golden and crisp. The base will leave the pan and the edges separate when it gets cooked..<br>\r\nWhen you see the batter on the top cooked well and the base has become golden,.<br> then sprinkle ¼ to ½ teaspoon oil on the edges and center. With the spoon spread the oil on the dosa..<br>\r\nWhen the dosa has nicely browned from the bottom and the surface looks well cooked,.<br> soft without any specks of undercooked batter, then fold with a spatula and lift it from the pan..<br>\r\nServe Dosa hot with coconut chutney, potato masala and sambar. It is best to serve these crispy dosa hot..<br>', 3),
(10, 'Puttu', '•1 Kg Rice flour.<br>\r\n•1 Coconut, grated.<br>\r\n•to taste Salt.<br>\r\n•200 ml Water.<br>', 'https://www.youtube.com/embed/EiAeNPOnIzg', 'Roast the rice powder till it becomes golden brown in color. Strain the rice powder and mix it with water and salt..<br>\r\nLayer the puttu maker with some grated coconut, then with rice mixture and with coconut again..<br>\r\nSteam for 2-3 minutes, take out and serve hot..<br>\r\n', '', '', 3),
(11, 'Palada Pradhaman', '•3/4 cup rice ada.<br>\r\n•4 cups milk.<br>\r\n•3/4 th cup sugar.<br>\r\n•10 cashew nuts.<br>\r\n•8-10 raisins.<br>\r\n•4 crushed green cardamoms.<br>\r\n•1 Tbsp clarified butter/ ghee.<br>', 'https://www.youtube.com/embed/UO8jPcrum4A', 'Boil the milk and cook the rice ada in it for about 30 minutes..<br>\r\nAdd sugar while stirring all the time. Lower the flame and keep stirring off and on for an hour..<br>\r\nThen, fry cashew nuts and raisins in ghee and add it to the rice ada..<br>\r\nAfter that, add the crushed cardamom and stir for a few minutes..<br>\r\nYour palada pradhaman is ready to eat..<br>\r\nWondering what is rice ada?.<br>\r\nThey are thin flakes of rice flour. It is made out of rice flour, ghee and some sugar..<br> Rice ada is a delicacy of Kerela often served as breakfast or an evening snack and is steamed in a banana leaf. Easily available in grocery stores in Kerala..<br>', '', '', 3),
(12, 'Pathiri', '•250 gm Rice flour.<br>\r\n•250 gm Cooked soft rice.<br>\r\n•Salt to taste.<br>\r\n•Water sufficient for dough.<br>\r\n•30 ml Ghee.<br>\r\n•50 ml Coconut milk.<br>', 'https://www.youtube.com/embed/O-5JGOr099E', 'In a blender grind the cooked rice with enough water to make a smooth paste..<br>\r\nMix all the ingredients with the rice and make a hard dough..<br>\r\nDivide the dough into required size, form into balls and roll into thin circles..<br>\r\nHeat a griddle and cook each aripathiri using little ghee..<br>\r\nWhen the aripathiri is cooked on both sides, lightly brush with coconut milk and serve hot..<br>', '', '', 3),
(13, 'Shahi Panner', '•1/3 Cup melon Seeds, soaked.<br>\r\n•2 tbsp butter.<br>\r\n•1 tsp cumin seeds.<br>\r\n•1 tbsp ginger, chopped.<br>\r\n•1 cup tomato, pureed.<br>\r\n•1/4 tsp turmeric powder.<br>\r\n•2 tsp coriander powder.<br>\r\n•2 tsp salt.<br>\r\n•1 tsp red chilli powder.<br>\r\n•3 nos green chilli , chopped.<br>\r\n•Crushed paneer.<br>\r\n•1/2 cup water.<br>\r\n•15 Paneer cubes.<br>\r\n•2 tbsp coriander leaves.<br>\r\n•2 Butter cubes.<br>', 'https://www.youtube.com/embed/T9hQV22Uezw', 'Soak the melon seeds in water for about 30 minutes..<br>\r\nGrind it to a smooth paste and keep aside..<br>\r\nIn a pan heat butter. Make sure that it does not burn..<br>\r\nAdd cumin seeds. When they crackle put ginger to it and cook for few seconds..<br>\r\n', 'Pour tomato puree and bring to a simmer..<br>\r\nNow add melon seed paste. Stir well and cook for a minute..<br>\r\nAdd turmeric powder, coriander powder, salt, red chilli powder and green chillis to it..<br>', 'Pour tomato puree and bring to a simmer..<br>\r\nNow add melon seed paste. Stir well and cook for a minute..<br>\r\nAdd turmeric powder, coriander powder, salt, red chilli powder and green chillis to it..<br>', 4),
(14, 'Dal Makhani', '•2 Cups sabut urad dal.<br>\r\n•8 cups water.<br>\r\n•2 tbsp salt.<br>\r\n•1 tbsp ginger, sliced.<br>\r\n•2 tbsp butter.<br>\r\n•1 tbsp oil.<br>\r\n•2 tsp shahi jeera.<br>\r\n•1 tsp kasoori meethi.<br>\r\n•2 cups tomato puree.<br>\r\n•1 tsp chilli powder.<br>\r\n•1 tsp sugar.<br>\r\n•1/2 cups cream.<br>\r\n•for garnishing green chillies (slit lengthwise).<br>', 'https://www.youtube.com/embed/o3k55z-tv9I', 'To the dal, add water, 1 Tbsp salt and ginger. Cook until dal becomes tender..<br>\r\nIn a heavy based pan, heat butter and oil. Add shahi jeera and kasoori methi..<br> When they begin to splutter, add tomato puree, remaining salt, chilli powder and sugar..<br>\r\nStir-fry over high flame, till the oil separates..<br>\r\nAdd cooked dal and bring to boil. The consistency should be such that.<br> the dal should move around freely when stirred, otherwise add a little water..<br>\r\nLeave to simmer, uncovered, till well blended..<br> Stir-in cream and once it gets heated through, serve immediately, garnished with green chillies..<br>\r\n', '', '', 4),
(15, 'Lassi', '•750 gms yogurt.<br>\r\n•50 gms ice cubes.<br>\r\n•Salt or sugar.<br>\r\n•200 ml water.<br>\r\n', 'https://www.youtube.com/embed/vKn1b9G1BjE', 'Crush the ice cubes in a blender..<br>\r\nAdd the yoghurt, water, salt or sugar..<br>\r\nBlend for about 1 minute..<br>\r\nServe chilled..<br>\r\nIf you are making a namkeen lassi you can add masala like bhuna jeera and kala namak and as desired..<br>\r\n', '', '', 4),
(16, 'Chole-Bhature', 'For chole:.<br>\r\n•2 cup chickpeas (channas).<br>\r\n•2 tsp oil.<br>\r\n•1 Bbay leaf (tej patta).<br>\r\n•1 Cinnamon stick (dalchini).<br>\r\n•3-4 Cloves (laung).<br>\r\n•1 tsp whole pepper corns (sabut kali mirch).<br>\r\n•3 Green cardamom (choti elaichi).<br>\r\n•2 Black cardamom (badi elaichi).<br>\r\n•1 tsp rurmeric powder (haldi).<br>\r\n•1 tsp chili powder (lal mirch powder).<br>\r\n•1 tsp coriander powder (dhaniya powder).<br>\r\n•1 tsp cumin powder (zeera powder).<br>\r\n•1 tsp cumin seeds (zeera).<br>\r\n•1/2 tsp asafoetida (heeng).<br>\r\n•to taste salt.<br>\r\n•1 cup onions, chopped.<br>\r\n•1 cup tomatoes, chopped.<br>\r\n•1 tsp ginger, chopped.<br>\r\n•1 tsp garlic, chopped.<br>\r\n•1 tsp ajwain.<br>\r\n•1 tsp lime juice.<br>\r\n•1 green chili, chopped.<br>\r\n•1 Tea bag.<br>\r\n•1 tbsp butter.<br>\r\nFor the bhaturas:.<br>\r\n•2 cups maida (refined flour).<br>\r\n•1/2 tsp yeast (dissolved for 10 minutes in luke warm water).<br>\r\n•1/2 cup whole wheat flour.<br>\r\n•A pinch of salt.<br>\r\n•Water (to knead).<br>\r\n•Oil (for frying).<br>', 'https://www.youtube.com/embed/aFzBnNWEu5Y', 'Prepare chole:.<br>\r\nIn a pan add oil, bay leaf, cinnamon, cumin seeds, cloves, whole pepper corns, green and black cardamom..<br>\r\nAfter it gets brown add chopped onions and saute it. Now add chopped ginger and garlic..<br>\r\nFollowed by turmeric, chili powder, coriander powder, cumin powder, asafoetida and salt, fry the ingredients together well..<br>\r\nFor de--glazing the pan add a little water..<br>\r\nNow add the chole (soaked overnight and pressure cooked) to the masala..<br>\r\nAfter stirring well add tomatoes, little sugar and salt to the chole..<br>\r\n', 'Now add ajwain, chopped green chilies and water for the base..<br>\r\nTo get the color in the chole, add a tea bag to the masala..<br>\r\nSimmer the chole gently for an hour and cover it..<br>\r\nAdd lime juice and a dollop of butter to it..<br>\r\nGarnish the chole with coriander and butter and serve them hot with bhaturas..<br>', 'Prepare the bhaturas:.<br>\r\nKnead the whole wheat flour, maida and salt together with adequate amount of water..<br>\r\nSprinkle the yeast on top. Leave it for 2-3 hours for the yeast to work..<br>\r\nDivide it into equal portions. Roll out in an oval or round shape..<br>\r\nDeep fry till golden brown, like a puri..<br>\r\nServe..<br>', 4);

-- --------------------------------------------------------

--
-- Table structure for table `r_image`
--

CREATE TABLE `r_image` (
  `recipe_id` int(10) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `recipe_image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_image`
--

INSERT INTO `r_image` (`recipe_id`, `image_1`, `image_2`, `image_3`, `image_4`, `recipe_image_id`) VALUES
(1, 'khandvi1.jpeg', 'Khandvi2.jpg', 'khandvi3.jpg', 'Khandvi4.jpg', 1),
(2, 'undhiyu_1.jpg', 'undhiyu_2.jpg', 'undhiyu_3.jpg', 'undhiyu_4.jpg', 2),
(3, 'kadhi.jpg', 'kadhi_1.jpg', 'Kadhi_2.jpg', 'kadhi_3.jpg', 3),
(4, 'KHAMAN.jfif', 'khaman1.jfif', 'khaman2.jfif', 'khaman3.jfif', 4),
(5, 'pavbhaji1.jpg', 'PavBhaji2.jpg', 'pavbhaji3.jpg', 'pavbhaji4.jpg', 5),
(6, 'vadapav_1.jpg', 'vadapav_2.jpg', 'vadapav_3.jpg', 'vadapav_4.jpg', 6),
(7, 'puranpuli_1.jpg', 'puranpuli_2.jpg', 'puranpuli_3.jpg', 'puranpuli_4.jpg', 7),
(8, 'misalpav_1.jpg', 'misalpav_2.jpg', 'misalpav_3.jpg', 'misalpav_4.jpg', 8),
(9, 'dosa1.jpg', 'dosa2.jpg', 'dosa3.jpg', 'dosa4.jpg', 9),
(10, 'puttu_1.jpg', 'puttu_2.jpg', 'puttu_3.jpg', 'puttu_4.jpg', 10),
(11, 'palada_1.jpg', 'palada_2.jpg', 'palada_3.jpg', 'palada_4.jpg', 11),
(12, 'pathiri_1.jpg', 'pathiri_2.jpg', 'pathiri_3.jpg', 'pathiri_4.jpg', 12),
(13, 'shahipanner1.jpg', 'shahipanner2.jpg', 'shahipanner3.jpg', 'shahipanner4.jpg', 13),
(14, 'dalmakhani_1.jpg', 'dalmakhani_2.jpg', 'dalmakhani_3.jpg', 'dalmakhani_4.jpg', 14),
(15, 'lassi.jpg', 'lassi_1.jpg', 'lassi_2.jpg', 'lassi_3.jpg', 15),
(16, 'chole_1.jpg', 'chole_@.jpg', 'chole_3.jpg', 'chole_4.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `r_rating`
--

CREATE TABLE `r_rating` (
  `user_id` int(5) NOT NULL,
  `recipe_id` int(5) NOT NULL,
  `r_date` text NOT NULL,
  `stars` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Username` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_nm` (`category_nm`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `E-mail` (`email`);

--
-- Indexes for table `r_details`
--
ALTER TABLE `r_details`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `r_image`
--
ALTER TABLE `r_image`
  ADD PRIMARY KEY (`recipe_image_id`),
  ADD KEY `Recipe_id` (`recipe_id`);

--
-- Indexes for table `r_rating`
--
ALTER TABLE `r_rating`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_details`
--
ALTER TABLE `r_details`
  MODIFY `recipe_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `r_image`
--
ALTER TABLE `r_image`
  MODIFY `recipe_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `r_rating`
--
ALTER TABLE `r_rating`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
