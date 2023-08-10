-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 10:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xeledute1_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `SchoolName` varchar(400) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `UserName`, `SchoolName`, `Password`) VALUES
(1, 'admin@gmail.com', 'leads public school', 'Admin@1');

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `id` int(11) NOT NULL,
  `class_name` text NOT NULL,
  `class_section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `question` varchar(3000) NOT NULL,
  `qimage` varchar(1000) DEFAULT NULL,
  `choice1` varchar(1000) NOT NULL,
  `choice2` varchar(1000) NOT NULL,
  `choice3` varchar(1000) NOT NULL,
  `choice4` varchar(1000) NOT NULL,
  `correct_ans` varchar(1000) NOT NULL,
  `descriptions` varchar(5000) NOT NULL,
  `subjects` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `question`, `qimage`, `choice1`, `choice2`, `choice3`, `choice4`, `correct_ans`, `descriptions`, `subjects`) VALUES
(1, 'arithmetic', 'The least number to be multiplied for 25 to make it perfect cube', NULL, '2', '3', '5', '10', '5', '', 'Mathematics'),
(2, 'arithmetic', 'If √3 = 1.73 then the value of √12 is', NULL, '3.46', '0.463', '6.92', '0.173', '3.46', '', 'Mathematics'),
(3, 'arithmetic', 'The product of √121 x √64', NULL, '22', '44', '33', '14', '44', '', 'Mathematics'),
(4, 'arithmetic', 'The cost price of a pen is Rs. 20 it is sold for Rs. 25 then the percentage of profit is', NULL, '5%', '20%', '25%', '50%', '25%', '', 'Mathematics'),
(5, 'arithmetic', 'The formula used to calulate amount in compound.', NULL, 'A = P (1 + r/100)<sup>n</sup>', 'A = P + I', 'A = PI', 'A = I/P', 'A = P (1 + r/100)n', '', 'Mathematics'),
(6, 'arithmetic', 'The inverse ratio of a : b', NULL, 'b + a', 'b : a', 'a/b', 'a - 2b', 'b : a', '', 'Mathematics'),
(7, 'arithmetic', 'The upperlimit of the class interval 13 -17 is', NULL, '17.5', '13', '13.5', '12.5', '17.5', '', 'Mathematics'),
(8, 'arithmetic', 'The median for the following scores is 3, 7, 14, 15, 19, 23, 27, 31', NULL, '15', '19', '17', '11', '17', '', 'Mathematics'),
(9, 'algebra', 'The H.C.F. of x²-  - 4 then the value of x²-  + 1/x² is', NULL, 'x - 2', 'x + 2', '(x²  - 2x + 4)', '(x²  + 2x + 4)', 'x + 2', '', 'Mathematics'),
(10, 'algebra', 'If x + 1/x = 7 then the value of x²  + 1x²  is ', NULL, '49', '14', '28', '47', '47', '', 'Mathematics'),
(11, 'algebra', 'What should be added for - 19x to get 29x', NULL, '+ 10x', '- 10x', '+ 38x', '- 38x', '+ 38x', '', 'Mathematics'),
(12, 'algebra', ' If 3<sup>x</sup>  = 343 then the value of x is', NULL, '3', ' 4', '5', '2', '5', '', 'Mathematics'),
(13, 'algebra', '√3 / √5  when denominator is rationalised weget', NULL, '√15 / √3', '√15 / √5', '√15 / 5√3', '√3 / √5 ', '√15 / √5', '', 'Mathematics'),
(14, 'algebra', 'if  T = 2⫪ √l/g  then solve forg', NULL, '2⫪ L/T', '4⫪² L/T', '<math display=\'block\'>  <mrow>   <mfrac>    <mrow>     <mtext>4</mtext><mi>Π</mi><msup>      <mtext>x</mtext>      <mn>2</mn>     </msup>     <mi>l</mi></mrow>    <mn>2</mn>   </mfrac>   </mrow> </math>', 'T²/4⫪²L', '              4Π      x      2          l    2       ', '', 'Mathematics'),
(15, 'algebra', 'The product 2<sup>5</sup>  x 3<sup>2</sup>  x 6<sup>0</sup>  is', NULL, '280', '288', '1440', '144', '288', '', 'Mathematics'),
(16, 'algebra', 'The sum of a number and its reciprocal is 37/6 the original number is', NULL, '7', '6', '1/7', '1/8', '6', '', 'Mathematics'),
(17, 'Trigonometry', 'The simple regular polygon is', NULL, 'Right angled triangle', 'Isosceles triangle', 'Scalene triangle', 'Equilateral triangle', 'Equilateral triangle', '', 'Mathematics'),
(18, 'Trigonometry', ' Each interangle of a regular Hexagones', NULL, '30°', '60°', '135°', '120°', '120°', '', 'Mathematics'),
(19, 'Trigonometry', 'An Equlateral and Equiangular Quadralateral is', NULL, 'Rhombes', 'Rectangle', 'Square', 'Trapezium', 'Square', '', 'Mathematics'),
(20, 'Trigonometry', ' In the adjoing figure the value of X is', 'https://www.online.xeledutech.in/student/q-img/q1.png', '60°', '50°', '70°', '100°', '70°', '', 'Mathematics'),
(55, 'Biology', 'The cell organelle responsible for digestion (intracellular) is:', '', 'nucleu', 'lysosome', 'svacuole', 'golgi body', 'lysosome', 'Lysosomes are the type of cell organelles that contain various types of enzymes which can break down (digest) the cellular components of the cell and thus cause cell death.', 'Science'),
(56, 'Biology', 'Find the odd one', '', 'Bast fibre', ' Companion', 'Sieve tube', 'Trachea', 'Trachea', 'Phloem helps in transporting food materials from leaves to other plant parts. Phloem is composed of sieve tube elements, companion cells, phloem parenchyma and phloem fibres', 'Science'),
(59, 'Biology', 'Carbon becomes available to crop plants in the form of:', '', 'bicarbonates', 'carbonates', 'carbondioxide', 'disaccharides', 'carbondioxide', 'Plants directly absorbs carbon dioxide from the atmosphere and converts it to carbohydrates with help of water and sunlight.', 'Science'),
(60, 'Biology', 'Pea plants grow poorly in completely sterilized sand because', '', 'nitrogen fixing bacteria are killed during sterilization', 'sand particles cause friction and injure roots', 'sand contains large amounts of carbon dioxide', 'their roots do not get sufficient oxygen', 'nitrogen fixing bacteria are killed during sterilization', 'If two different types of organisms live and work together for their mutual benefit, their relationship is called symbiosis or symbiotic relationship', 'Science'),
(62, 'Biology', 'Which of the following is rich in inorganic nutrients?', '', 'Vegetable waste', 'Fertilizers', 'Oil cakes', 'Cattle Dung', 'Fertilizers', 'Plasmolysis is the process in which cells lose water when they are placed in a hypertonic solution (higher salt concentration solution). It causes contraction or shrinking of the plasma membrane away from the cell wall causing cell death', 'Science'),
(64, 'Biology', 'The living together of two organisms for mutual benefit is', '', 'autotrophic', 'symbiotic', 'parasitic', 'saprotrophic', 'symbiotic', 'Chemotrophs obtain the energy required for metabolism from the oxidation of reduced inorganic compounds such as (hydrogen, ammonia, nitrite, sulfide, hydrogen and ferrous ions)', 'Science'),
(65, 'Chemistry', 'The solubility of a solute :', '', 'increases with decrease in temperature', 'depends on the nature of solute and solvent', 'increases with temperature', 'both A & B', 'both A & B', 'The solubility of the solute depends upon these factors\r\na) Temperature. Basically, solubility increases with temperature. \r\nb) Polarity (nature). In most cases solutes dissolve in solvents that have a similar polarity. \r\nc) Pressure.\r\nd) Molecular size. ...\r\ne) Stirring increases the speed of dissolving.\r\n', 'Science'),
(66, 'Chemistry', 'The process of coating Zn on the surface of iron is called:', '', 'anodization', 'galvanization', 'electroplating', 'all of the above', 'galvanization', 'Galvanization. Iron surface generally corrode (rust) in presence of moisture and oxygen. Zinc metal is used for the process of galvanization because the corrosion of zinc is very slow, which gives it an extended life while it protects the base metal.', 'Science'),
(68, 'Chemistry', 'The metal which combines with oxygen and forms a protective layer on itself is :', '', 'Pt', 'Al', 'Az', 'Au', 'Al', 'Aluminium reacts with oxygen present in the air to form aluminium oxide. Aluminium oxide is a protective layer formed on the aluminium body which prevents further oxidation of aluminium.', 'Science'),
(69, 'Chemistry', 'The digestion of food in our body indicates :', '', 'displacemiple', 'decomposition', 'combination', 'none of the above', 'decomposition', 'Digestion in our body indicates decomposition as the complex substances breaks down to simple substances.', 'Science'),
(70, 'Chemistry', 'In the following reaction Zn + CuSO<sub>4</sub> -> ZnSO<sub>4</sub> + Cu.&nbsp;Zn is a/an ?', '', 'oxidising agent', 'bleaching agent', 'reducing agent', 'none of the above', 'reducing agent', 'A reducing agent is the one which reduces other substances (by removal of oxygen or addition of hydrogen) and itself gets oxidized (addition of oxygen or removal of hydrogen).  Here zn has oxidized by reducing the cuso4', 'Science'),
(71, 'Chemistry', '____+6 NaOH -> 2Al(OH)<sub>3</sub>, + 3Na<sub>2</sub>,SO<sub>4</sub>', '', 'Al<sub>2</sub>O<sub>3</sub>', 'Al<sub>2</sub>(SO<sub>4</sub>)<sub>3</sub>', 'Al', 'None of the them', 'AL,(SO)', 'Aluminium sulphate reacts with sodium hydroxide to from a precipitate of aluminium hydroxide while the solution after the reaction is found to contain sodium sulphate.\nAl2(SO4)3+NaOH⟶2Al(OH)3+3Na2SO4\n', 'Science'),
(72, 'Chemistry', 'The formation of H, and O, from water is a/an', '', 'electrolytic decomposition', 'thermal decomposition', 'combination', 'decomposition', 'electrolytic decomposition', 'The chemical reaction of passing an electric current through water to decompose hydrogen and oxygen gases is known as the electrolysis of water, so it is electrolytic decomposition.', 'Science'),
(74, 'Physics', 'A ray enters one medium along the normal and passes into the other medium. The angle of refraction will be:', '', 'equal to its critical angle', 'depends on the nature of the media', '90°', '0°', '0°', 'Because it passes without bending when the light ray is passing along the normal.', 'Science'),
(75, 'Physics', 'The deviation produced by an equilateral prism, when a ray of light is incident on it, does not depend on the :', '', 'size of the prism', 'angle of incidence', 'material of the prism', 'colour of the light used', 'size of the prism', 'The deviation produced when a light ray incident on it depends on incidence angle, colour of light indirectly the wavelength and on the material used in making prism while it doesn’t depend on the size of equilateral prism.', 'Science'),
(76, 'Physics', 'Which of the following statements is wrong ?', '', 'A converging lens may not have a negative focal length', 'A converging lens may not have a positive focal length', 'A converging lens can have one plane surface', 'A converging lens can have one concave surface', 'A converging lens may not have a positive focal length', 'Option D is the right answer. Converging lens which is convex lens either has two convex surface or one plane and one convex surface but no concave surface.', 'Science'),
(77, 'Physics', 'In the case of a convex lens of thin glass the focal length is:', '', 'longer for blue than red', 'independent of the colour of light used', 'same for all colours', 'shorter for green than for yellow', 'shorter for green than for yellow', 'Focal length green is shorter than yellow for convex lens. Maximum focal length is for red and minimum focal length is for blue', 'Science'),
(78, 'Physics', 'Magnetic lines of force', '', 'never intersect', 'intersect at neutral points', 'intersect near the north pole', 'intersect near the south pole', 'never intersect', 'As magnetic compass kept at the intersection of two lines cannot show two different direction which is practically not possible therefore two magnetic lines never intersects.', 'Science'),
(79, 'Physics', ' A red rose with a green leaf is seen through a yellow filter. How will the rose & the leaf appear to be ?', '', 'yellow, yellow', 'red, green', 'red, black', 'black, black', 'red, green', 'When yellow light is incident on red object, the object absorbs yellow and reflects nil( no colour). It therefore appears black. The green leaf and the yellow light will reflect the color green.', 'Science'),
(80, 'Physics', 'Two convergent rays A and B are entering a box and leaving as parallel rays A & B. The appropriate optical device to be used in the box would be:', 'https://quantuminfotech.in/Quiz%20Application%20with%20Timer/q-img/PhysicsQ.jpeg', 'concave lens', 'lens', 'convex lens', 'a prism', 'concave lens', 'The ray of light appearing to meet at the principal focus of a concave lens, after refraction, will emerge parallel to the principal axis.', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_answer` text DEFAULT NULL,
  `questions` text NOT NULL,
  `correct` text NOT NULL,
  `description` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `topic` varchar(400) NOT NULL,
  `q_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `student_id`, `student_answer`, `questions`, `correct`, `description`, `subject`, `topic`, `q_number`) VALUES
(2262, '1', '10', 'The least number to be multiplied for 25 to make it perfect cube', '5', '', 'Mathematics', 'arithmetic', '1'),
(2263, '1', '0.173', 'If √3 = 1.73 then the value of √12 is', '3.46', '', 'Mathematics', 'arithmetic', '2'),
(2264, '1', '14', 'The product of √121 x √64', '44', '', 'Mathematics', 'arithmetic', '3'),
(2265, '1', '50%', 'The cost price of a pen is Rs. 20 it is sold for Rs. 25 then the percentage of profit is', '25%', '', 'Mathematics', 'arithmetic', '4'),
(2266, '1', 'A = P + I', 'The formula used to calulate amount in compound.', 'A = P (1 + r/100)n', '', 'Mathematics', 'arithmetic', '5'),
(2267, '1', 'a - 2b', 'The inverse ratio of a : b', 'b : a', '', 'Mathematics', 'arithmetic', '6'),
(2268, '1', '12.5', 'The upperlimit of the class interval 13 -17 is', '17.5', '', 'Mathematics', 'arithmetic', '7'),
(2269, '1', '11', 'The median for the following scores is 3, 7, 14, 15, 19, 23, 27, 31', '17', '', 'Mathematics', 'arithmetic', '8'),
(2270, '1', '(x²  + 2x + 4)', 'The H.C.F. of x²-  - 4 then the value of x²-  + 1/x² is', 'x + 2', '', 'Mathematics', 'algebra', '9'),
(2271, '1', '47', 'If x + 1/x = 7 then the value of x²  + 1x²  is ', '47', '', 'Mathematics', 'algebra', '10'),
(2272, '1', '- 38x', 'What should be added for - 19x to get 29x', '+ 38x', '', 'Mathematics', 'algebra', '11'),
(2273, '1', '2', ' If 3<sup>x</sup>  = 343 then the value of x is', '5', '', 'Mathematics', 'algebra', '12'),
(2274, '1', '√3 / √5 ', '√3 / √5  when denominator is rationalised weget', '√15 / √5', '', 'Mathematics', 'algebra', '13'),
(2275, '1', 'T²/4⫪²L', 'if  T = 2⫪ √l/g  then solve forg', '              4Π      x      2          l    2       ', '', 'Mathematics', 'algebra', '14'),
(2276, '1', '144', 'The product 2<sup>5</sup>  x 3<sup>2</sup>  x 6<sup>0</sup>  is', '288', '', 'Mathematics', 'algebra', '15'),
(2277, '1', '1/8', 'The sum of a number and its reciprocal is 37/6 the original number is', '6', '', 'Mathematics', 'algebra', '16'),
(2278, '1', 'Equilateral triangle', 'The simple regular polygon is', 'Equilateral triangle', '', 'Mathematics', 'Trigonometry', '17'),
(2279, '1', '120°', ' Each interangle of a regular Hexagones', '120°', '', 'Mathematics', 'Trigonometry', '18'),
(2280, '1', 'Trapezium', 'An Equlateral and Equiangular Quadralateral is', 'Square', '', 'Mathematics', 'Trigonometry', '19'),
(2281, '1', '70°', ' In the adjoing figure the value of X is', '70°', '', 'Mathematics', 'Trigonometry', '20');

-- --------------------------------------------------------

--
-- Table structure for table `schools_details`
--

CREATE TABLE `schools_details` (
  `id` int(11) NOT NULL,
  `School_name` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schools_details`
--

INSERT INTO `schools_details` (`id`, `School_name`, `status`) VALUES
(1, 'lions sevaniketan school', 'active'),
(2, 'harividyalaya school', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `SchoolName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentName`, `student_id`, `SchoolName`, `password`) VALUES
(26, 'A S Adarsh Bhat', '1', 'lions sevaniketan school', 'lions'),
(27, 'Adithi R Moray', '2', 'lions sevaniketan school', 'lions'),
(28, 'Ajan J', '3', 'lions sevaniketan school', 'lions'),
(29, 'Charita S Acharya', '4', 'lions sevaniketan school', 'lions'),
(30, 'Chinmay Gururaj', '5', 'lions sevaniketan school', 'lions'),
(31, 'Chinmayi P S', '6', 'lions sevaniketan school', 'lions'),
(32, 'Deekshitha V', '7', 'lions sevaniketan school', 'lions'),
(33, 'Dhanya M Naik', '8', 'lions sevaniketan school', 'lions'),
(34, 'G S Bharath', '9', 'lions sevaniketan school', 'lions'),
(35, 'Gagan Deep M S', '10', 'lions sevaniketan school', 'lions'),
(36, 'Gahanashree H', '11', 'lions sevaniketan school', 'lions'),
(37, 'Hamsini Ramesh', '12', 'lions sevaniketan school', 'lions'),
(38, 'Harshavardhan', '13', 'lions sevaniketan school', 'lions'),
(39, 'Hemthesh S Gowda', '14', 'lions sevaniketan school', 'lions'),
(40, 'Himani B M', '15', 'lions sevaniketan school', 'lions'),
(41, 'Hitesh B K Gowda', '16', 'lions sevaniketan school', 'lions'),
(42, 'Inchara Jayanth', '17', 'lions sevaniketan school', 'lions'),
(43, 'Keerthana C', '18', 'lions sevaniketan school', 'lions'),
(44, 'Khushi Dejamma M S', '19', 'lions sevaniketan school', 'lions'),
(45, 'Nikitha Sarika Prakash', '20', 'lions sevaniketan school', 'lions'),
(46, 'Nirbheek H D', '21', 'lions sevaniketan school', 'lions'),
(47, 'Nisarga Kumar K', '22', 'lions sevaniketan school', 'lions'),
(48, 'Nitya Sarika Prakash', '23', 'lions sevaniketan school', 'lions'),
(49, 'Poorva M B', '24', 'lions sevaniketan school', 'lions'),
(50, 'Pravalika J', '25', 'lions sevaniketan school', 'lions'),
(51, 'Pushpa Janet', '26', 'lions sevaniketan school', 'lions'),
(52, 'Rakshitha R', '27', 'lions sevaniketan school', 'lions'),
(53, 'Rishika K', '28', 'lions sevaniketan school', 'lions'),
(54, 'Ruchir C', '29', 'lions sevaniketan school', 'lions'),
(55, 'Saadhvi K', '30', 'lions sevaniketan school', 'lions'),
(56, 'Shashivardhan T', '31', 'lions sevaniketan school', 'lions'),
(57, 'Sumukh M Vallabha', '32', 'lions sevaniketan school', 'lions'),
(58, 'Surabhi G M', '33', 'lions sevaniketan school', 'lions'),
(59, 'Thanvitha K', '34', 'lions sevaniketan school', 'lions'),
(60, 'Thejavini K', '35', 'lions sevaniketan school', 'lions'),
(61, 'Virshank A', '36', 'lions sevaniketan school', 'lions'),
(62, 'Pranav A', '37', 'lions sevaniketan school', 'lions'),
(63, 'Akanksha Singh', '38', 'lions sevaniketan school', 'lions'),
(64, 'Anagha Patil', '39', 'lions sevaniketan school', 'lions'),
(65, 'Anushka R Choudhari', '40', 'lions sevaniketan school', 'lions'),
(66, 'Bhavani M R', '41', 'lions sevaniketan school', 'lions'),
(67, 'Bhuvan B Gowda', '42', 'lions sevaniketan school', 'lions'),
(68, 'Darshan K V', '43', 'lions sevaniketan school', 'lions'),
(69, 'Deekshitha N', '44', 'lions sevaniketan school', 'lions'),
(70, 'Dhanyashree H', '45', 'lions sevaniketan school', 'lions'),
(71, 'Gagan Deeep D V', '46', 'lions sevaniketan school', 'lions'),
(72, 'Hasmukh V', '47', 'lions sevaniketan school', 'lions'),
(73, 'Hitesh K', '48', 'lions sevaniketan school', 'lions'),
(74, 'Inchara A', '49', 'lions sevaniketan school', 'lions'),
(75, 'Jayanth R', '50', 'lions sevaniketan school', 'lions'),
(76, 'Jeevan Gowda S', '51', 'lions sevaniketan school', 'lions'),
(77, 'Abhigna K', '52', 'lions sevaniketan school', 'lions'),
(78, 'Lekha D', '53', 'lions sevaniketan school', 'lions'),
(79, 'Lekhana M S', '54', 'lions sevaniketan school', 'lions'),
(80, 'Likhith V', '55', 'lions sevaniketan school', 'lions'),
(81, 'Manvitha B Gowda', '56', 'lions sevaniketan school', 'lions'),
(82, 'Manya K', '57', 'lions sevaniketan school', 'lions'),
(83, 'Milan Christie V', '58', 'lions sevaniketan school', 'lions'),
(84, 'Neha S', '59', 'lions sevaniketan school', 'lions'),
(85, 'Nityashree P', '60', 'lions sevaniketan school', 'lions'),
(86, 'Pathanjali K S', '61', 'lions sevaniketan school', 'lions'),
(87, 'Phalgun G Koundinya', '62', 'lions sevaniketan school', 'lions'),
(88, 'Poorvika R', '63', 'lions sevaniketan school', 'lions'),
(89, 'Pranav Bhat', '64', 'lions sevaniketan school', 'lions'),
(90, 'Preetham Jevoor', '65', 'lions sevaniketan school', 'lions'),
(91, 'Sharanya G Bhat', '66', 'lions sevaniketan school', 'lions'),
(92, 'Sheethal M S', '67', 'lions sevaniketan school', 'lions'),
(93, 'Shivika P C', '68', 'lions sevaniketan school', 'lions'),
(94, 'Siddhartha A', '69', 'lions sevaniketan school', 'lions'),
(95, 'Sinchana S Bhat', '70', 'lions sevaniketan school', 'lions'),
(96, 'Suprith S', '71', 'lions sevaniketan school', 'lions'),
(97, 'Tamanna Sharma', '72', 'lions sevaniketan school', 'lions'),
(98, 'Vaishnav R', '73', 'lions sevaniketan school', 'lions'),
(99, 'Yashu Gowda H M', '74', 'lions sevaniketan school', 'lions'),
(144, 'test', '101010', 'harividyalaya school', 'test'),
(181, 'Aayush Ananda urs', '101', 'harividyalaya school', 'hari'),
(182, 'Adwika R K', '102', 'harividyalaya school', 'hari'),
(183, 'Avipsa Nag', '103', 'harividyalaya school', 'hari'),
(184, 'Bhallana  M R', '104', 'harividyalaya school', 'hari'),
(185, 'Dhanush, S.P', '105', 'harividyalaya school', 'hari'),
(186, 'Dhanyatha V', '106', 'harividyalaya school', 'hari'),
(187, 'Diganth m', '107', 'harividyalaya school', 'hari'),
(188, 'Gururaja P N', '108', 'harividyalaya school', 'hari'),
(189, 'Hemanth Kumar', '109', 'harividyalaya school', 'hari'),
(190, 'Hemanth Suresh', '110', 'harividyalaya school', 'hari'),
(191, 'Jeevan L', '111', 'harividyalaya school', 'hari'),
(192, 'Khushwanth Singh L', '112', 'harividyalaya school', 'hari'),
(193, 'Meghashree', '113', 'harividyalaya school', 'hari'),
(194, 'Poowik T A', '114', 'harividyalaya school', 'hari'),
(195, 'Prajwal S', '115', 'harividyalaya school', 'hari'),
(196, 'Pramila H R', '116', 'harividyalaya school', 'hari'),
(197, 'Prasanna Ragothaman', '117', 'harividyalaya school', 'hari'),
(198, 'Raksha', '118', 'harividyalaya school', 'hari'),
(199, 'Rakshitha J', '119', 'harividyalaya school', 'hari'),
(200, 'Ruthwik P V', '120', 'harividyalaya school', 'hari'),
(201, 'Sharath P', '121', 'harividyalaya school', 'hari'),
(202, 'Shrawani B Goutham', '122', 'harividyalaya school', 'hari'),
(203, 'Shravana S Gowda', '123', 'harividyalaya school', 'hari'),
(204, 'Shreya S Bhat', '124', 'harividyalaya school', 'hari'),
(205, 'Sudhanua Sudeendra', '125', 'harividyalaya school', 'hari'),
(206, 'Suhas M D', '126', 'harividyalaya school', 'hari'),
(207, 'Sumith vasista R', '127', 'harividyalaya school', 'hari'),
(208, 'Sumukh Byndoor', '128', 'harividyalaya school', 'hari'),
(209, 'Tanmay', '129', 'harividyalaya school', 'hari'),
(210, 'Tejas Ajay Tilak', '130', 'harividyalaya school', 'hari'),
(211, 'ullas I', '131', 'harividyalaya school', 'hari'),
(212, 'Vadeesh B Adoni', '132', 'harividyalaya school', 'hari'),
(213, 'Vaishnan P', '133', 'harividyalaya school', 'hari'),
(214, ' Vidhathri C', '134', 'harividyalaya school', 'hari'),
(215, 'Vishal Kumar Gowda', '135', 'harividyalaya school', 'hari'),
(216, 'Yashwitha R Gowda', '136', 'harividyalaya school', 'hari'),
(217, 'test1', '101020', 'harividyalaya school', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subjectsName` varchar(400) NOT NULL,
  `className` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectsName`, `className`) VALUES
(11, 'Mathematics', 'All'),
(12, 'Science', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacherName` varchar(250) NOT NULL,
  `teacher_id` varchar(200) NOT NULL,
  `TeacherSchoolName` varchar(400) NOT NULL,
  `password` varchar(250) NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacherName`, `teacher_id`, `TeacherSchoolName`, `password`, `class`) VALUES
(1, 'teacher', '654321', 'lions sevaniketan school', 'teacher', ''),
(2, 'teacher1', '123123', 'harividyalaya school', 'teacher', '');

-- --------------------------------------------------------

--
-- Table structure for table `test_attented`
--

CREATE TABLE `test_attented` (
  `id` int(11) NOT NULL,
  `student_id` text NOT NULL,
  `Test` text NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_attented`
--

INSERT INTO `test_attented` (`id`, `student_id`, `Test`, `subject`) VALUES
(18, '123456', 'attentd', 'Mathematics'),
(19, '58', 'attentd', 'Mathematics'),
(20, '37', 'attentd', 'Mathematics'),
(21, '46', 'attentd', 'Mathematics'),
(22, '47', 'attentd', 'Mathematics'),
(23, '55', 'attentd', 'Mathematics'),
(24, '71', 'attentd', 'Mathematics'),
(25, '44', 'attentd', 'Mathematics'),
(26, '69', 'attentd', 'Mathematics'),
(27, '65', 'attentd', 'Mathematics'),
(28, '53', 'attentd', 'Mathematics'),
(29, '50', 'attentd', 'Mathematics'),
(30, '64', 'attentd', 'Mathematics'),
(31, '38', 'attentd', 'Mathematics'),
(32, '59', 'attentd', 'Mathematics'),
(33, '70', 'attentd', 'Mathematics'),
(34, '63', 'attentd', 'Mathematics'),
(35, '39', 'attentd', 'Mathematics'),
(36, '42', 'attentd', 'Mathematics'),
(37, '66', 'attentd', 'Mathematics'),
(38, '48', 'attentd', 'Mathematics'),
(39, '40', 'attentd', 'Mathematics'),
(40, '56', 'attentd', 'Mathematics'),
(41, '56', 'attentd', 'Mathematics'),
(42, '51', 'attentd', 'Mathematics'),
(43, '57', 'attentd', 'Mathematics'),
(44, '73', 'attentd', 'Mathematics'),
(45, '61', 'attentd', 'Mathematics'),
(46, '49', 'attentd', 'Mathematics'),
(47, '67', 'attentd', 'Mathematics'),
(48, '49', 'attentd', 'Mathematics'),
(49, '49', 'attentd', 'Mathematics'),
(50, '49', 'attentd', 'Mathematics'),
(51, '49', 'attentd', 'Mathematics'),
(52, '49', 'attentd', 'Mathematics'),
(53, '49', 'attentd', 'Mathematics'),
(54, '49', 'attentd', 'Mathematics'),
(55, '49', 'attentd', 'Mathematics'),
(56, '49', 'attentd', 'Mathematics'),
(57, '49', 'attentd', 'Mathematics'),
(58, '49', 'attentd', 'Mathematics'),
(59, '49', 'attentd', 'Mathematics'),
(60, '49', 'attentd', 'Mathematics'),
(61, '49', 'attentd', 'Mathematics'),
(62, '49', 'attentd', 'Mathematics'),
(63, '49', 'attentd', 'Mathematics'),
(64, '49', 'attentd', 'Mathematics'),
(65, '41', 'attentd', 'Mathematics'),
(66, '74', 'attentd', 'Mathematics'),
(67, '72', 'attentd', 'Mathematics'),
(68, '45', 'attentd', 'Mathematics'),
(69, '60', 'attentd', 'Mathematics'),
(70, '54', 'attentd', 'Mathematics'),
(71, '62', 'attentd', 'Mathematics'),
(72, '68', 'attentd', 'Mathematics'),
(73, '52', 'attentd', 'Mathematics'),
(74, '5', 'attentd', 'Mathematics'),
(75, '4', 'attentd', 'Mathematics'),
(76, '16', 'attentd', 'Mathematics'),
(77, '7', 'attentd', 'Mathematics'),
(78, '6', 'attentd', 'Mathematics'),
(79, '9', 'attentd', 'Mathematics'),
(80, '30', 'attentd', 'Mathematics'),
(81, '26', 'attentd', 'Mathematics'),
(82, '10', 'attentd', 'Mathematics'),
(83, '20', 'attentd', 'Mathematics'),
(84, '8', 'attentd', 'Mathematics'),
(85, '33', 'attentd', 'Mathematics'),
(86, '2', 'attentd', 'Mathematics'),
(87, '21', 'attentd', 'Mathematics'),
(88, '29', 'attentd', 'Mathematics'),
(89, '23', 'attentd', 'Mathematics'),
(90, '16', 'attentd', 'Mathematics'),
(91, '15', 'attentd', 'Mathematics'),
(92, '14', 'attentd', 'Mathematics'),
(93, '31', 'attentd', 'Mathematics'),
(94, '11', 'attentd', 'Mathematics'),
(95, '1', 'attentd', 'Mathematics'),
(96, '13', 'attentd', 'Mathematics'),
(97, '28', 'attentd', 'Mathematics'),
(98, '22', 'attentd', 'Mathematics'),
(99, '31', 'attentd', 'Mathematics'),
(100, '12', 'attentd', 'Mathematics'),
(101, '34', 'attentd', 'Mathematics'),
(102, '25', 'attentd', 'Mathematics'),
(103, '19', 'attentd', 'Mathematics'),
(104, '36', 'attentd', 'Mathematics'),
(105, '18', 'attentd', 'Mathematics'),
(106, '32', 'attentd', 'Mathematics'),
(107, '17', 'attentd', 'Mathematics'),
(108, '27', 'attentd', 'Mathematics'),
(109, '123456', 'attentd', 'Mathematics'),
(110, '010101', 'attentd', 'Mathematics'),
(111, '101010', 'attentd', 'Mathematics'),
(112, '101010', 'attentd', 'Mathematics'),
(113, '101020', 'attentd', 'Mathematics'),
(114, '101020', 'attentd', 'Mathematics'),
(115, '101020', 'attentd', 'Mathematics'),
(116, '101020', 'attentd', 'Mathematics'),
(117, '1', 'attentd', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `test_details`
--

CREATE TABLE `test_details` (
  `id` int(11) NOT NULL,
  `testName` text NOT NULL,
  `test_start_date` date NOT NULL,
  `test_end_date` date NOT NULL,
  `subject` text NOT NULL,
  `test_attempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `class_details`
--
ALTER TABLE `class_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects` (`subjects`(768));

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `test_attented`
--
ALTER TABLE `test_attented`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_details`
--
ALTER TABLE `test_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class_details`
--
ALTER TABLE `class_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000026;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2282;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_attented`
--
ALTER TABLE `test_attented`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `test_details`
--
ALTER TABLE `test_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
