--
-- Database: `akgim-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin123', '120afd1b435c2b5131a497bb341cef0d');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `see_rollno` varchar(30) NOT NULL,
  `gen_rank` varchar(30) NOT NULL,
  `category_rank` varchar(30) NOT NULL,
  `cat_mat_cmat` varchar(30) NOT NULL,
  `percentile` varchar(30) NOT NULL,
  `month_year` varchar(180) NOT NULL,
  `other_exam_name` varchar(50) NOT NULL,
  `other_exam_percentile` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `state_of_domicile` varchar(100) NOT NULL,
  `parentNo` varchar(50) NOT NULL,
  `candidateNo` varchar(50) NOT NULL,
  `permanent_add` varchar(200) NOT NULL,
  `pincode_perm` varchar(10) NOT NULL,
  `correspondence_add` varchar(200) NOT NULL,
  `pincode_corr` varchar(10) NOT NULL,
  `local_add` varchar(200) NOT NULL,
  `pincode_loc` varchar(10) NOT NULL,
  `10_school_name` varchar(200) NOT NULL,
  `10_board` varchar(200) NOT NULL,
  `10_passingyear` varchar(10) NOT NULL,
  `10_percentage` varchar(10) NOT NULL,
  `12_school_name` varchar(200) NOT NULL,
  `12_board` varchar(200) NOT NULL,
  `12_passingyear` varchar(10) NOT NULL,
  `12_percentage` varchar(10) NOT NULL,
  `graduation_course` varchar(200) NOT NULL,
  `graduation_college` varchar(200) NOT NULL,
  `graduation_university` varchar(200) NOT NULL,
  `graduation_passingyear` varchar(10) NOT NULL,
  `graduation_percentage` varchar(10) NOT NULL,
  `postgraduation_course` varchar(200) NOT NULL,
  `postgraduation_college` varchar(200) NOT NULL,
  `postgraduation_university` varchar(200) NOT NULL,
  `postgraduation_passingyear` varchar(10) NOT NULL,
  `postgraduation_percentage` varchar(10) NOT NULL,
  `other_course` varchar(200) NOT NULL,
  `other_college` varchar(200) NOT NULL,
  `other_university` varchar(200) NOT NULL,
  `other_passingyear` varchar(10) NOT NULL,
  `other_percentage` varchar(10) NOT NULL,
  `experience_duration` varchar(30) NOT NULL,
  `exp_organisation_name` varchar(200) NOT NULL,
  `hostel_req` varchar(20) NOT NULL,
  `verified` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
