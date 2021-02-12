-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 07:30 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `writer_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `title`, `topic_id`, `featured_image`, `body`, `created_at`) VALUES
(17, 'Online', '', '', 'The Definite Article\r\nThe definite article is the word the. It limits the meaning of a noun to one particular thing. For example, your friend might ask, “Are you going to the party this weekend?” The definite article tells you that your friend is referring to a specific party that both of you know about. The definite article can be used with singular, plural, or uncountable nouns. Below are some examples of the definite article the used in context:\r\n\r\nPlease give me the hammer.\r\nPlease give me the red hammer; the blue one is too small.\r\nPlease give me the nail.\r\nPlease give me the large nail; it’s the only one strong enough to hold this painting.\r\nPlease give me the hammer and the nail.\r\nThe Indefinite Article\r\nThe indefinite article takes two forms. It’s the word a when it precedes a word that begins with a consonant. It’s the word an when it precedes a word that begins with a vowel. The indefinite article indicates that a noun refers to a general idea rather than a particular thing. For example, you might ask your friend, “Should I bring a gift to the party?” Your friend will understand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,” your friend tells you. Again, the indefinite article indicates that she is not talking about a specific apple pie. Your friend probably doesn’t even have any pie yet. The indefinite article only appears with singular nouns. Consider the following examples of indefinite articles used in context:\r\n\r\nPlease hand me a book; any book will do.\r\nPlease hand me an autobiography; any autobiography will do.\r\nExceptions: Choosing A or An\r\nThere are a few exceptions to the general rule of using a before words that start with consonants and an before words that begin with vowels. The first letter of the word honor, for example, is a consonant, but it’s unpronounced. In spite of its spelling, the word honor begins with a vowel sound. Therefore, we use an. Consider the example sentence below for an illustration of this concept.\r\n\r\nMy mother is a honest woman.\r\nMy mother is an honest woman.\r\nSimilarly, when the first letter of a word is a vowel but is pronounced with a consonant sound, use a, as in the sample sentence below:\r\n\r\nShe is an United States senator.\r\nShe is a United States senator.\r\nThis holds true with acronyms and initialisms, too: an LCD display, a UK-based company, an HR department, a URL.\r\n\r\nArticle Before an Adjective\r\nSometimes an article modifies a noun that is also modified by an adjective. The usual word order is article + adjective + noun. If the article is indefinite, choose a or an based on the word that immediately follows it. Consider the following examples for reference:\r\n\r\nEliza will bring a small gift to Sophie’s party.\r\nI heard an interesting story yesterday.\r\nIndefinite Articles with Uncountable Nouns\r\nUncountable nouns are nouns that are either difficult or impossible to count. Uncountable nouns include intangible things (e.g., information, air), liquids (e.g., milk, wine), and things that are too large or numerous to count (e.g., equipment, sand, wood). Because these things can’t be counted, you should never use a or an with them—remember, the indefinite article is only for singular nouns. Uncountable nouns can be modified by words like some, however. Consider the examples below for reference:\r\n\r\nPlease give me a water.\r\nWater is an uncountable noun and should not be used with the indefinite article.\r\n\r\nPlease give me some water.\r\nHowever, if you describe the water in terms of countable units (like bottles), you can use the indefinite article.\r\n\r\nPlease give me a bottle of water.\r\nPlease give me an ice.\r\nPlease give me an ice cube.\r\nPlease give me some ice .\r\nNote that depending on the context, some nouns can be countable or uncountable (e.g., hair, noise, time):\r\n\r\nWe need a light in this room.\r\nWe need some light in this room.\r\nUsing Articles with Pronouns\r\nPossessive pronouns can help identify whether you’re talking about specific or nonspecific items. As we’ve seen, articles also indicate specificity. But if you use both a possessive pronoun and an article at the same time, readers will become confused. Possessive pronouns are words like his, my, our, its, her, and their. Articles should not be used with pronouns. Consider the examples below.\r\n\r\nWhy are you reading the my book?\r\nThe and my should not be used together since they are both meant to modify the same noun. Instead, you should use one or the other, depending on the intended meaning:\r\n\r\nWhy are you reading the book?\r\nWhy are you reading my book?\r\nOmission of Articles\r\nOccasionally, articles are omitted altogether before certain nouns. In these cases, the article is implied but not actually present. This implied article is sometimes called a “zero article.” Often, the article is omitted before nouns that refer to abstract ideas. Look at the following examples:\r\n\r\nLet’s go out for a dinner tonight.\r\nLet’s go out for dinner tonight.\r\nThe creativity is a valuable quality in children.\r\nCreativity is a valuable quality in children.\r\nMany languages and nationalities are not preceded by an article. Consider the example below:\r\n\r\nI studied the French in high school for four years.\r\nI studied French in high school for four years.\r\nSports and academic subjects do not require articles. See the sentences below for reference:\r\n\r\nI like to play the baseball.\r\nI like to play baseball .\r\nMy sister was always good at the math .\r\nMy sister was always good at math .\r\n', '2020-12-26 22:11:23'),
(19, 'Paragraph on Apple', '', '', 'It’s a very well-known saying that ‘An apple a day keeps the doctor away’. It is a true saying as well because apple has many good qualities. It has many important vitamins and minerals and it also helps in proper digestion.\r\n\r\nApples are rich in dietary fiber and Vitamin C. Apple comes in variety of colours like red, green and golden. Their tastes also vary as some apples are sweet and some are tangy.\r\n\r\nIn India, Kashmir and Himachal are the main areas which are famous for apple production. Apples are said to be winter fruit but they are always easily available throughout the year.\r\n\r\nAd\r\nApples can be consumed in lots of ways. Mostly it is eaten raw but it is the main ingredient in many other dishes such as apple pie, apple sauce, apple strudel, apple jelly and jam. As children like jellies and jams, they can be given the goodness of apples in these forms.\r\n\r\nAlthough it is always the best to consume apple in its raw form. Though it is advisable to eat an apple each day, nowadays apple is being covered in lots of harmful chemicals. This is being done to extend the life of an apple.\r\n\r\nThe apples outer layer is covered with preservatives and wax to make it look shiny and appealing to the eyes. Therefore before eating an apple, one must wash it thoroughly with warm water and wash away all the wax from its cover.\r\n\r\nWe can also take off the peel and eat an apple. In this way, apple can be enjoyed with all its goodness.', '2020-12-28 01:15:01'),
(20, 'Nature is our mother', '', '', 'Nature is important for all of us. It is the reason why life is there on earth. There are various species in nature. Nature created a balance for animals, microbes, coral reefs, and other living organisms. There is a specific branch in Science for studying the natural environment. In Geological aspects, nature is as deep as we can think. Every element says a different history. The sun, the moon depicts the beauty of nature.\r\n\r\nVarious creations by William Wordsworth and Robert Frost are inspired by nature. We often heard that it is a natural human tendency to react. In sociology, the genetic trait of an organism is defined as naturally drawn traits. Nature is rich in resources. The right way of using resources helps in maintaining ecological balance. Naturally, there are various terrestrial and aquatic animals that are termed as a natural scavenger. Nature has given us options for utilizing it in the best way.\r\n\r\nWe hear bombardments during the attack. It is sad, that some humans are using weapons made from natural elements for their selfish use. There is a special treatment in Yoga, Ayurveda that recommends us to be in nature. Naturopathy is also a branch of medicine. We always encourage being in contact with nature. In school and college-level various awareness campaigns are organized annually for environment and nature preservation.\r\n\r\nIn a recent survey, it is found that glaciers are melting and this is the reason behind the sudden rise in ocean waters. This serious issue is caused by global warming. What if there will be no forests? No Water? Earth will be all barren and Forest Life will roam in human society. What about humans? The time has come to protect our Mother Nature from losing its glory and natural charm.', '2020-12-28 01:16:54'),
(21, 'Love Is In The Air', '', '', 'As the title suggests, love is in the air, and has been for centuries, as indicated in one of the world’s earliest texts, The Old Testament, when Adam first fell for Eve in the Garden of Eden. Poetry has long been used as a tool to tell a story, sometimes for simply capturing the poets thoughts at the time or more often for creating a record of an experience of which they wished to share with others.\r\n\r\nThe poems were sometimes in the form of a letter, or a story, or purely a general reflection of an incident significant to the author.\r\n\r\nThemes were varied from childhood incidents, witnessed events, character studies, important turning points in life, but more often than not, the most popular theme was love.\r\n\r\nLove of a child, love of one’s partner, love of a parent, the bitter sweetness of a first love. Poetry speaks the language of love closest to the human experience.\r\n\r\n“How do I love thee? Let me count the ways.”\r\n\r\nThese words have become infamous throughout history, a phrase that has served generations with complete flexibility.\r\n\r\nElizabeth Barrett Browning captures the true essence of love in her Sonnet 43.\r\n\r\nThis sonnet was the second last in a series of 44 sonnets or love poems written to her husband Robert Browning. She called the series, Sonnets from the Portuguese, because he endearingly referred to her, as my little Portuguese, because of her dark complexion.\r\n\r\nThe subject of the poem was the intense love she felt for her husband, a spiritual passion, which she gave freely and purely.\r\n\r\nThe poem has 14 lines, the first eight lines or octave, sets the theme of the poem or description of how she loves him. She uses comparisons or imagery as a measure of the intensity of her love. That her love is unchanged by night or day, this image created by mention of the sun and candlelight, and that she gives herself willingly and genuinely, as referenced by a man’s alliance to his faith.\r\n\r\nIn the last six lines she reflects sentimentally of her life as a child and the love that she has come to share with him will last an eternity, even after death.\r\n\r\nThe tone of the sonnet is sensitive and relevant to theme of love.\r\n\r\nThe word choice is appropriate with repetition of I love thee in eight lines of the sonnet, which weaves the mood of love throughout, ending with a persuasive I shall love thee, in the final line to build the emotion. The use of personification is significant to express the strength, honesty and beauty of love, whilst she draws on her religious faith as well, showing commitment and passion to her feelings.', '2020-12-28 01:17:52'),
(70, 'Light of hope', '', '', 'enctype=\"multipart/form-data\"', '2021-01-05 11:05:12'),
(71, 'Light of hope', '', '', 'enctype=\"multipart/form-data\"', '2021-01-05 11:05:47'),
(77, 'nice', '', '', 'sss', '2021-01-05 11:14:02'),
(78, 'nice', '', '20180820_152419.jpg', 'sss', '2021-01-05 11:37:36'),
(79, 'lll', '', '20180820_153230.jpg', 'gggg', '2021-01-05 11:37:54'),
(80, 'Image test 1', '', '20180824_172113.jpg', 'new image', '2021-01-05 11:38:38'),
(82, 'new 2', '', '1_sUI4nkPfH0wevBQMb29cnQ.jpeg', '.....', '2021-01-06 12:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `username`, `email`, `password`, `cpassword`, `role`) VALUES
(21, 'Jarin Tasnim', 'jarin1@gmail.com', '$2y$10$c4N8LlJ677Pye5j0R9Pp/OrldowKAb/eL2t8KU4wBlNjNtKdBBRB.', '$2y$10$nPEKOlgjjJBD.79Qulage.VTKQfOpt3Mbc7wZr8sizMJL2DJnpKWG', '');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` int(11) NOT NULL,
  `total_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `total_count`) VALUES
(1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `featured_image` (`featured_image`),
  ADD KEY `featured_image_2` (`featured_image`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
