-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 08:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `s_no` int(255) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`s_no`, `user_id`, `email`, `password`) VALUES
(1, 'newswebsite123', 'newwebsite@gmail.com', 'news123'),
(2, 'helloweb', 'helloweb@gmail.com', 'hellow123'),
(3, '1243255464', '124235436@gmail.com', '2354365'),
(4, 'Newspage.com', 'newspage123@gmail.com', 'news@123'),
(5, 'as', 'newspage123@gmail.com', 'sdgfdhgf');

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `s_no` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `posting_data` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`s_no`, `category`, `description`, `posting_data`) VALUES
(11, 'Politics', 'Politics  is the set of activities that are associated with making decisions in groups,', '2023-07-09 05:42:28.24757'),
(12, 'movies', 'Bollywood traditional movies in India. ', '2023-07-11 02:37:10.19435'),
(13, 'business', 'Corporations, in contrast with sole proprietors and partnerships, are a separate legal entity and provide limited liability for their owners/members, as well as being subject to corporate tax rates. A corporation is more complicated and expensive to set up, but offers more protection and benefits for the owners/members.', '2023-07-11 04:24:01.28920'),
(16, 'Cricket', 'Cricket is a bat-and-ball game played between two teams of eleven players on a field at the Centre of which is a 22-yard (20-metre) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at one of the wickets with the bat and then running between the wickets, while the bowling and fielding side tries to prevent this (by preventing the ball from leaving the field, and getting the ball to either wicket) and dismiss each batter (so they are \"out\"). Means of dismissal include being bowled, when the ball hits the stumps and dislodges the bails, and by the fielding side either catching the ball after it is hit by the bat, but before it hits the ground, or hitting a wicket with the ball before a batter can cross the crease in front of the wicket. When ten batters have been dismissed, the innings ends and the teams swap roles. The game is adjoin', '2023-07-11 04:29:25.38757'),
(17, 'World', 'In its most general sense, the term \"world\" refers to the totality of entities, to the whole of reality or to everything that is. ', '2023-07-14 04:54:54.23416'),
(18, 'Politices', 'the set of activities that are associated with making decisions in groups, or other forms of power relations among individuals, such as the distribution of resources or status', '2023-07-16 15:57:43.86572'),
(19, 'Movies', 'The site was home to the award-winning webshow Statler and Waldorf: From the Balcony, a bi-weekly movie preview webcast starring the Muppets. Another webshow featured late Brandon Schantz and a movie spoof called The DiCaprio Code, parodying The Da Vinci Code.', '2023-07-16 15:59:06.06086'),
(20, 'india', 'India, officially the Republic of India (Hindi: Bhārat Gaṇarājya), is a country in', '2023-07-22 03:18:30.10211'),
(22, 'Politices', 'polity system, i.e. federal in nature, that consists of the central authority at the centre and states at the periphery. The Constitution defines the organizational powers and limitations of both central and state governments; it is well recognised, fluid (Preamble of the Constitution being rigid and to dictate further amendments to the Constitution) and considered supreme, i.e. the laws of the nation must conform to it.', '2023-07-20 03:15:50.33124'),
(23, 'Bihar', 'education in bihar', '2023-07-22 06:45:33.39066');

-- --------------------------------------------------------

--
-- Table structure for table `add_post`
--

CREATE TABLE `add_post` (
  `s_no` int(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `post_subcategory` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_descrition` longblob NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_post`
--

INSERT INTO `add_post` (`s_no`, `post_title`, `post_category`, `post_subcategory`, `post_image`, `post_descrition`, `posting_date`) VALUES
(17, 'Most Famous Politacal leader', 'Politics', 'political leader', 'post_news/modi.jpg', 0x496e6469612c206f6e65206f662074686520776f726c64e2809973206c6172676573742064656d6f6372616369657320686173207365656e2032303020706f6c69746963616c2070617274696573206265696e6720666f726d65642c2073696e63652069742061747461696e656420496e646570656e64656e6365206f6e2041756775737420313520313934372e20436f6d706172656420746f206f746865722064656d6f637261636965732c20496e646961206861732061206c61726765206e756d626572206f6620706f6c69746963616c207061727469657320616e6420736f6d65206f66207468656d2061726520776f76656e2061726f756e64207468656972206c6561646572732e205468652074776f206d61696e207061727469657320696e20496e646961206172652074686520436f6e677265737320616e6420424a502c20776869636820646f6d696e617465206e6174696f6e616c20706f6c69746963732e204a6177616861726c616c204e656872752c20496e646961e2809973206669727374205072696d65204d696e697374657220686173206265656e20612063656e7472616c2066696775726520696e20496e6469616e20706f6c697469637320616e6420686520697320636f6e7369646572656420746f2062652074686520617263686974656374206f66206d6f6465726e20496e6469612e204869732064617567687465722c20496e646972612047616e646869206372656174656420686973746f72792c207768656e207368652077656e74206f6e20746f206265636f6d6520496e646961e280997320666972737420776f6d616e205072696d65204d696e69737465722e205768696c652074686520496e6469616e20706f6c69746963616c207363656e652077617320646f6d696e617465642062792074686520436f6e677265737320666f72206c6f6e672c20746865206c61737420636f75706c65206f6620796561727320686173207365656e2074686520726573757267656e6365206f662074686520424a5020756e646572206c656164657273206c696b65204174616c204269686172692056616a706179656520616e64204e6172656e647261204d6f64692e, '2023-07-22 14:32:39'),
(18, 'Indian politalcal leader', 'Politics', 'political leader', 'post_news/apj_abdual kalam.jpg', 0x496e646961206861732061206c61726765206e756d626572206f6620706f6c69746963616c20706172746965733b20697420697320657374696d617465642074686174206f766572203230302070617274696573207765726520666f726d656420616674657220496e64696120626563616d6520696e646570656e64656e7420696e20313934372e204a6177616861726c616c204e656872752c20612063656e7472616c2066696775726520696e20496e6469616e20706f6c6974696373206265666f726520616e6420616674657220696e646570656e64656e636520626563616d6520746865206669727374205072696d65204d696e6973746572206f6620496e6469612e20486520697320636f6e7369646572656420746f2062652074686520617263686974656374206f6620746865206d6f6465726e20496e6469616e206e6174696f6e2d73746174652e2052616a656e647261205072617361642c20612066726565646f6d206669676874657220647572696e672074686520496e6469616e20696e646570656e64656e6365206d6f76656d656e74207761732074686520666972737420507265736964656e74206f6620696e646570656e64656e7420496e6469612c20616e6420616c736f20746865206c6f6e676573742d73657276696e6720707265736964656e742c20666f722031322079656172732e2050726f6d696e656e74207068696c6f736f7068657220616e642077726974657220536172766570616c6c692052616468616b726973686e616e2077617320616c736f2061206d756368206163636c61696d656420706f6c69746963616c206c65616465722077686f207365727665642061732074686520707265736964656e74206f6620496e6469612066726f6d203139363220746f20313936372e204c616c204261686164757220536861737472692c206f662074686520496e6469616e204e6174696f6e616c20436f6e67726573732c2077617320746865207072696d65206d696e697374657220647572696e6720612070617274206f662052616468616b726973686e616ee28099732074656e7572652e20, '2023-07-22 14:39:41'),
(19, 'Mahendra Singh Dhoni', 'Cricket', 'Entertenment', 'post_news/dhoni.webp', 0x2020202020204d6168656e6472612053696e67682044686f6e69202020202020626f726e2037204a756c7920313938312920697320616e20496e6469616e2070726f66657373696f6e616c20637269636b657465722e20486520776173206361707461696e206f662074686520496e6469616e206e6174696f6e616c207465616d20696e206c696d697465642d6f7665727320666f726d6174732066726f6d203230303720746f203230313720616e6420696e205465737420637269636b65742066726f6d203230303820746f20323031342e2044686f6e6920697320776964656c7920636f6e73696465726564206f6e65206f662074686520677265617465737420637269636b6574, '2023-07-23 05:47:58'),
(20, 'Health level of bihari', 'Bihar', 'Health leavel in bihar', 'post_news/health.jpg', 0x496e207465726d73206f66206f766572616c6c206865616c746820706572666f726d616e636520616d6f6e67206c61726765207374617465732c2042696861722072616e6b732031387468206f7574206f6620313920737461746573207769746820612073636f7265206f662033312e30302e204f6e20746865206f746865722068616e642c204b6572616c612069732072616e6b656420666972737420776974682038322e32302c2054616d696c204e616475206973207365636f6e6420776974682037322e343220616e642054656c616e67616e6120697320746869726420776974682036392e39362e, '2023-07-23 05:55:12'),
(21, '[value-2]', '[value-3]', '[value-4]', '[value-5]', 0x5b76616c75652d365d, '2023-07-22 03:08:05'),
(22, '[value-2]', '[value-3]', '[value-4]', '[value-5]', 0x5b76616c75652d365d, '2023-07-22 03:08:05'),
(25, 'Stock Marketing', 'india', 'Entertenment', 'post_news/stock market.jpg', 0x412073746f636b206d61726b65742c20657175697479206d61726b65742c206f72207368617265206d61726b657420697320746865206167677265676174696f6e206f662062757965727320616e642073656c6c657273206f662073746f636b732028616c736f2063616c6c656420736861726573292c20776869636820726570726573656e74206f776e65727368697020636c61696d73206f6e20627573696e65737365733b207468657365206d617920696e636c7564652073656375726974696573206c6973746564206f6e2061207075626c69632073746f636b2065786368616e67652c2061732077656c6c2061732073746f636b2074686174206973206f6e6c792074726164656420707269766174656c792c207375636820617320736861726573206f66207072697661746520636f6d70616e6965732077686963682061726520736f6c6420746f20696e766573746f7273207468726f756768206571756974792063726f776466756e64696e6720706c6174666f726d732e20, '2023-07-22 06:37:07'),
(26, 'Indian Bike', 'india', 'super bike', 'post_news/bike2018.webp', 0x5468657265206172652031352073757065722062696b65732063757272656e746c79206f6e2073616c652066726f6d20766172696f7573206d616e75666163747572657273207374617274696e672066726f6d2031322e3132204c616b682e20546865206d6f737420706f70756c61722070726f647563747320756e646572207468697320627261636b65742061726520746865204b61776173616b69204e696e6a61205a582d313052202852732e2031372e3836204c616b68292c2053757a756b69204861796162757361202852732e2031382e3836204c616b682920616e6420424d5720532031303030205252202852732e2032322e3835204c616b68292028616c6c20707269636573206f6e2d726f6164292e54686520746f70206272616e64732074686174206d616e75666163747572652073757065722062696b657320617265204b61776173616b692c2053757a756b692c20424d572e20546f206b6e6f77206d6f72652061626f757420746865206c617465737420707269636573206f662053757065722042696b657320696e20796f757220636974792c20646f776e6c6f61642042696b6544656b686f204170702026206765742064657461696c73206f6e206f66666572732c2076617269616e74732c2073706563696669636174696f6e732c2070696374757265732c206d696c656167652c207265766965777320616e64206f746865722064657461696c732c20706c656173652073656c65637420796f757220646573697265642062696b652066726f6d20746865206c6973742062656c6f772e, '2023-07-22 06:40:55'),
(27, 'most profitable business', 'business', 'most profitable business', 'post_news/profitable-business.jpeg', 0x596f752077616e7420796f75722074696d6520746f206265207573656420776973656c79207768656e20796f7520737461727420796f7572206f776e20627573696e6573732e2054686174206d65616e7320796f752073686f756c64206b6e6f7720746865206d6f73742070726f66697461626c6520627573696e657373657320746f2073746172742e20576974686f7574206b6e6f77696e6720746865206d6f73742070726f66697461626c652069646561732c20686f772077696c6c20796f7520726561702074686520726577617264733f0d0a57686174e280997320636f6e7369646572656420e2809870726f66697461626c65e2809920697320616c77617973206368616e67696e672c206f6620636f757273652c20616e642074686174e28099732077687920776520636f6e74696e75616c6c7920757064617465206f75722072616e6b696e67732e204576657279207965617220746865206d6f73742070726f66697461626c6520627573696e65737365732077696c6c206368616e676520736c696768746c79206173206f75722065636f6e6f6d792065766f6c7665732c2070726f6475637473206265636f6d65206f62736f6c6574652c20616e6420746563686e6f6c6f677920616476616e6365732e20, '2023-07-22 06:43:45'),
(28, 'Education in bihar', 'Bihar', 'education', 'post_news/school_biha.jpg', 0x42696861722069732061206c616e64206f6620776973646f6d2e20546865204465706172746d656e74206f6620456475636174696f6e202c20426968617220697320726573706f6e7369626c6520666f722070726573657276696e672074686520676c6f72696f757320686973746f7279206f6620746865207374617465206173207573656420746f20626520696e2074686520676f6c64656e20657261206f66204e616c616e646120556e697665727369747920616e642056696b72616d7368696c6120556e69766572736974792e20546865206465706172746d656e7420697320636f6e6365726e656420776974682070726f766964696e6720656475636174696f6e20616e642073657474696e672075702072656c61746564206672616d657320616e6420696e667261737472756374757265206163726f7373207468652073746174652e20576974682066697665206469726563746f726174657320616e64207365766572616c206170657820626f646965732c20746865206465706172746d656e7420686173206265656e20776f726b696e6720746f2063726561746520666163696c6974617469766520656e7669726f6e6d656e7420696e20776869636820796f7574682c20776f6d656e20616e64206f746865727320776f756c64206578706c6f7265207468656972206b6e6f776c6564676520616e6420736b696c6c73206279207075727375696e67207072696d6172792c207365636f6e646172792c2068696768657220616e64206d61737320656475636174696f6e2e, '2023-07-22 06:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `s_no` int(255) NOT NULL,
  `category1` varchar(50) NOT NULL,
  `sub_category1` varchar(50) NOT NULL,
  `description1` longtext NOT NULL,
  `posting_data1` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`s_no`, `category1`, `sub_category1`, `description1`, `posting_data1`) VALUES
(2, 'Politices', 'political leader', 'leader are most need for any country. ', '0000-00-00 00:00:00'),
(3, 'Bihar', 'History of Bihar  ', 'Bihar is the birth place of Buddhism because it is the place where the divine light of enlightenment was showered on Gautama Buddha.', '2023-07-11 02:41:16'),
(8, 'Bollywood', 'Entertenment', 'Some moves are very flop in 2023.', '2023-06-29 15:28:56'),
(10, 'Most power full leader', 'Indian Poltiacal Leader', 'In modern nation states, people often form political parties to represent their ideas. Members of a party often agree to take the same position on many issues and agree to support the same changes to law and the same leaders. ', '2023-07-18 03:47:29'),
(11, 'Bihar', 'Very Poor state', '3,683.37 billion. By sectors, its composition is 22% agriculture, 5% industry and 73%', '2023-07-05 05:32:22'),
(12, 'World', 'Moder technology ', 'In its most general sense, the term \"world\" refers to the totality of entities, to the whole of reality or to everything that is The nature of the world has been conceptualized differently in different fields. Some conceptions see the world as unique while others talk of a \"plurality of worlds\". ', '2023-07-12 05:03:07'),
(13, 'Bihar', 'Smart city of bihar', 'Bihar, this state is known for its dense population and amazing history. In ancient period this state was a home to some greatest rulers and dynasties. Haryanka dynasty, Shishunaga dynasty, Nanda dynasty used to rule here until Maurya Empire came in. Mauryan king Ashoka is regarded as one of the greatest in the world’s history. The Mauryan Empire and Buddhism arose in the region that are part of modern Bihar till date. ', '2023-07-16 08:52:20'),
(14, 'india', 'Bike lover', 'India, officially the Republic of India  is a country in South Asia', '2023-07-17 12:21:53'),
(15, 'india', 'super bike', 'India, officially the Republic of India (Hindi: Bhārat Gaṇarājya), is a ', '2023-07-17 12:22:15'),
(16, 'india', 'tourism india', 'The town is famous for the unique terracotta temples made from the locally available laterite stones.', '2023-07-17 15:37:33'),
(17, 'business', 'most profitable business', 'most profitable business', '2023-07-18 03:55:24'),
(18, 'World', 'world biggest population', 'This list includes both countries and dependent territories. Data based on the latest United Nations Population Division estimates.\r\nClick on the name of the country or dependency for current estimates (live population clock), historical data, and projected figures.\r\nSee also', '2023-07-20 03:37:54'),
(19, 'Bihar', 'education', 'education level of bihar', '2023-07-22 06:46:11'),
(20, 'Bihar', 'Health leavel in bihar', 'Health leavel in Bihari', '2023-07-23 05:49:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `add_post`
--
ALTER TABLE `add_post`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `s_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `add_post`
--
ALTER TABLE `add_post`
  MODIFY `s_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `s_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
