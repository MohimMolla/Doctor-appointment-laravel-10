-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 01:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_appoinment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `speciality_id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor_id`, `speciality_id`, `date`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mohim', 'mohim@gmail.com', '+12345678', 12, 1, '2023-08-25', 'I want to treatment from you.I want to shear my phycial\r\n problem with you', 'approved', '2', '2023-08-23 10:57:37', '2023-08-23 11:15:18'),
(2, 'Ismail', 'Ismail@gmail.com', '+12345678', 3, 1, '2023-08-23', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'Pending', '2', '2023-08-23 11:01:09', '2023-08-23 11:01:09'),
(3, 'Monjurul', 'Monjurul@gmail.com', '+12345678', 12, 1, '2023-09-03', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'approved', '3', '2023-08-23 11:03:39', '2023-08-23 11:15:20'),
(4, 'Monjurul', 'Monjurul@gmail.com', '+12345678', 4, 4, '2023-08-26', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'canceled', '3', '2023-08-23 11:04:48', '2023-08-28 11:19:01'),
(5, 'Ismail', 'Ismail@gmail.com', '+12345678', 2, 1, '2023-09-01', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'approved', '4', '2023-08-23 11:08:09', '2023-08-23 11:15:23'),
(6, 'Ismail', 'Ismail@gmail.com', '+12345678', 5, 5, '2023-09-02', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'approved', '4', '2023-08-23 11:09:31', '2023-08-23 11:15:29'),
(7, 'Sayeed', 'Sayeed@gmail.com', '+12345678', 7, 5, '2023-08-28', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'Pending', '5', '2023-08-23 11:12:25', '2023-08-23 11:12:25'),
(8, 'Sayeed', 'Sayeed@gmail.com', '+12345678', 1, 1, '2023-08-27', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'approved', '5', '2023-08-23 11:14:44', '2023-08-23 11:15:31'),
(9, 'Jalal', 'jalal@gmail.com', '+12345678', 8, 6, '2023-08-28', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'approved', '7', '2023-08-23 12:41:55', '2023-08-23 13:13:40'),
(10, 'Jalal sk', 'jalal@gmail.com', '+12345678', 7, 5, '2023-08-27', 'I want to treatment from you.I want to shear my physical\r\n problem with you', 'approved', '7', '2023-08-23 12:53:50', '2023-08-23 13:13:42'),
(11, 'Mohim', 'mohim@gmail.com', '12346515', 2, 1, '2023-08-31', 'i want to appoinmet with you', 'Pending', '2', '2023-08-29 11:28:04', '2023-08-29 11:28:04'),
(12, 'jalal', 'jalal@gmail.com', '123456', 9, 6, '2023-08-30', 'I want appointment with you as soon as possible.', 'Pending', '2', '2023-08-29 11:34:14', '2023-08-29 11:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `doctor_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '5.0', 'He is a very nice person', '2023-08-23 09:09:57', '2023-08-23 09:09:57'),
(2, 2, 1, '5.0', 'His behaviour is very friendly and he is very honest person', '2023-08-23 10:54:47', '2023-08-23 10:54:47'),
(3, 2, 3, '5.0', 'His behaviour is very friendly and he is very honest person', '2023-08-23 10:58:11', '2023-08-23 10:58:11'),
(4, 3, 12, '5.0', 'His behavior is very friendly and he is very honest person', '2023-08-23 11:02:33', '2023-08-23 11:02:33'),
(5, 3, 4, '4.0', 'His behavior is very friendly and he is very honest person', '2023-08-23 11:04:11', '2023-08-23 11:04:11'),
(6, 4, 2, '5.0', 'His behavior is very friendly and he is very honest person', '2023-08-23 11:07:00', '2023-08-23 11:07:00'),
(7, 4, 5, '5.0', 'His behavior is very friendly and he is very honest person', '2023-08-23 11:08:39', '2023-08-23 11:08:39'),
(8, 5, 6, '5.0', 'His behavior is very friendly and he is very honest person', '2023-08-23 11:11:30', '2023-08-23 11:11:30'),
(9, 5, 1, '4.0', 'His behavior is very friendly and he is very honest person.He take care every patient.', '2023-08-23 11:13:59', '2023-08-23 11:13:59'),
(10, 9, 8, '5.0', 'His behavior is very friendly and he is very honest person', '2023-08-23 12:23:14', '2023-08-23 12:23:14'),
(11, 2, 1, '5.0', 'Nice Doctor', '2023-08-29 10:59:50', '2023-08-29 10:59:50'),
(12, 2, 13, '5.0', 'Skillfull Surgeon', '2023-08-29 13:12:23', '2023-08-29 13:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speciality_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `speciality` text DEFAULT NULL,
  `room_number` varchar(255) DEFAULT NULL,
  `achievement` text DEFAULT NULL,
  `institute` text DEFAULT NULL,
  `doctor_details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `speciality_id`, `name`, `phone`, `speciality`, `room_number`, `achievement`, `institute`, `doctor_details`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dr. Pratik Dewan', '+12345678', 'Internal medicine', 'A - 105', 'Specializes in the diagnosis and treatment of allergies, heart diseases, hormone disorders, blood disorders, infectious diseases, kidney diseases, lung disorders, rheumatology, and arthritis.', 'Dr. Pratik Dewan has the following degrees and diplomas: Sher-E-Bangla Medical College, Bangladesh Diploma in Endocrinology and Metabolism, Bangabandhu Sheikh Mujib Medical University, Bangladesh', 'Specializes in the diagnosis and treatment of allergies, heart diseases, hormone disorders, blood disorders, infectious diseases, kidney diseases, lung disorders, rheumatology, and arthritis.Where is Dr. Pratik Dewan clinic located in ? He works at: Square Hospital located in Panthapath 18/F, Bir Uttam Qazi Nuruzzaman Sarak West, Panthapath, Dhaka 1205, Bangladesh. Click here for the google map location.  What are common reasons for patients to see Dr. Pratik Dewan? Dr. Pratik Dewan frequently sees patients for Adrenal Gland Disorders, Diabetes, Endocrine Disorders, Metabolic Syndromes, and Thyroid Diseases  What is the education and qualifications of Dr. Pratik Dewan ? Dr. Pratik Dewan has the following degrees and diplomas: Sher-E-Bangla Medical College, Bangladesh Diploma in Endocrinology and Metabolism, Bangabandhu Sheikh Mujib Medical University, Bangladesh  Are there any additional charges to book an appointment with a Internal Medicine through HeliumDoc? HeliumDoc bridges the gap between the patient and the doctor. There are no additional charges for booking through HeliumDoc.', '1692802984.png', '2023-08-23 09:03:04', '2023-08-23 09:03:04'),
(2, 1, 'Dr. Raihan Rabbani', '+12345678', 'Internal medicine', 'A - 106', 'Specializes in the diagnosis and treatment of allergies, heart diseases, hormone disorders, blood disorders, infectious diseases, kidney diseases, lung disorders, rheumatology, and arthritis.', 'Doctor of Medicine, Bangladesh College of Physicians and Surgeons, Bangladesh  Dhaka Medical College, Bangladesh', 'Does Dr. Raihan Rabbani accept my insurance? Click here to see a list of insurance plans he accepts.  What languages does Dr. Raihan Rabbani speak? Dr. Raihan Rabbani speaks the following Bengali and English  Where is Dr. Raihan Rabbani clinic located in ? He works at: Square Hospital located in Panthapath 18/F, Bir Uttam Qazi Nuruzzaman Sarak West, Panthapath, Dhaka 1205, Bangladesh. Click here for the google map location.  What are common reasons for patients to see Dr. Raihan Rabbani? Dr. Raihan Rabbani frequently sees patients for Chronic Diseases, Diabetes, Endocrine Disorders, Metabolic Liver, and Metabolic Syndromes  What is the education and qualifications of Dr. Raihan Rabbani ? Dr. Raihan Rabbani has the following degrees and diplomas: Doctor of Medicine, Bangladesh College of Physicians and Surgeons, Bangladesh Dhaka Medical College, Bangladesh  Are there any additional charges to book an appointment with a Internal Medicine through HeliumDoc? HeliumDoc bridges the gap between the patient and the doctor. There are no additional charges for booking through HeliumDoc.', '1692803171.png', '2023-08-23 09:06:11', '2023-08-23 09:06:11'),
(3, 1, 'Dr. Farzana Shumy', '+12345678', 'Internal medicine', 'A - 107', 'Specializes in treating arthritis and diseases affecting the joints, ligaments, muscles, and bones.', 'Mymensingh Medical College, Bangladesh', 'What languages does Dr. Farzana Shumy speak? Dr. Farzana Shumy speaks the following Bengali and English  Where is Dr. Farzana Shumy clinic located in ? She works at: Square Hospital located in Panthapath 18/F, Bir Uttam Qazi Nuruzzaman Sarak West, Panthapath, Dhaka 1205, Bangladesh. Click here for the google map location.  What are common reasons for patients to see Dr. Farzana Shumy? Dr. Farzana Shumy frequently sees patients for Arthritis, Joint Pain, Muscle Diseases, Soft Tissue Injury, Soft Tissue Tumours, and Tendon Repair  What is the education and qualifications of Dr. Farzana Shumy ? Dr. Farzana Shumy has the following degrees and diplomas: Mymensingh Medical College, Bangladesh  Are there any additional charges to book an appointment with a Rheumatologist (Joints) through HeliumDoc? HeliumDoc bridges the gap between the patient and the doctor. There are no additional charges for booking through HeliumDoc.', '1692803294.png', '2023-08-23 09:08:14', '2023-08-23 09:08:14'),
(4, 4, 'Dr. Mahboob Rahman Khan', '+12345678', 'Primary care', 'B - 201', 'Specializes in planning and providing the comprehensive primary health care of all members of a family of all ages and genders, on a continuous basis.', 'Doctor of Medicine, USA  BSMMU, Bangladesh', 'What languages does Dr. Mahboob Rahman Khan speak? Dr. Mahboob Rahman Khan speaks the following Bengali and English  Where is Dr. Mahboob Rahman Khan clinic located in ? He works at: United Hospital located in Gulshan Plot # 15 Rd No 71, Dhaka 1212, Bangladesh. Click here for the google map location.  What are common reasons for patients to see Dr. Mahboob Rahman Khan? Dr. Mahboob Rahman Khan frequently sees patients for Cold & Flu, Cough, Ear Infection, Sports Injuries, and Urinary Tract Infection  What is the education and qualifications of Dr. Mahboob Rahman Khan ? Dr. Mahboob Rahman Khan has the following degrees and diplomas: Doctor of Medicine, USA BSMMU, Bangladesh Diploma in Family Medicine, USTC  Are there any additional charges to book an appointment with a Family Medicine through HeliumDoc? HeliumDoc bridges the gap between the patient and the doctor. There are no additional charges for booking through HeliumDoc.', '1692803747.png', '2023-08-23 09:15:47', '2023-08-23 09:15:47'),
(5, 5, 'Dr. Asif Manwar', '+12345678', 'Cardiology', 'B - 201', 'MBBS, D. Card (London), Msc Cardiology (UK), Fellow, Pediatric Cardiology & Fetal Echocardiography (India)', 'Dr. Asif Manwar, a graduate of Chittagong Medical College, started career as Resident Medical Officer, BIRDEM in 2002 en-route to Ibrahim Cardiac Hospital', 'Dr. Asif Manwar, a graduate of Chittagong Medical College, started career as Resident Medical Officer, BIRDEM in 2002 en-route to Ibrahim Cardiac Hospital.  Dr. Manwar pursued PG Dip Cardiology in 2004 under University of London with Distinction & Sir John Goodwin Prize for academic excellence by Imperial College London. Academic up-gradation in 2006 created an opportunity to serve Apollo Hospital Dhaka as Registrar, Cardiology. To aspire proficiency at masters’ level he completed MSc Cardiology with Distinction once again by Canterbury Christ Church & University College London (UCL) in 2008. To achieve superspeciality, he opted Fellowship in Paediatric Cardiology being registered with Medical Council of India in 2009.             Dr. Manwar is proficient in all facets of non-invasive procedures like 3D-TOE-DSE, Dyssynchrony, Strain Rate, Tissue Doppler Imaging, Contrast & Intra-operative Echo. He got basic training from Hammersmith, Royal Brompton and advanced training from The Heart Hospital London. He obtained hands on training in Grown-Up Congenital, Paediatric, Neonatal & Fetal Echo from AMRITA Kerala & New Delhi India.   Dr. Asif Manwar joined SQUARE Hospital as Specialist Cardiologist, contributing his expertise since then before taking up position of Associate Consultant in 2015 & Coordinator Non-Invasive Lab in 2017.', '1692805972.jpg', '2023-08-23 09:52:52', '2023-08-23 09:52:52'),
(6, 5, 'Dr. S. M. Shahedul Amin Robin', '+12345678', 'Cardiology', 'B - 203', 'Fellowship from Fortis ESCORTS Heart Institute, New Delhi, India and Advanced Echo skills through training from the reputed Echo training institute, JROP, New Delhi, India .', 'Dr. S.M. Shahedul Amin (Robin) completed his graduation from Sher-e-Bangla Medical College, Barisal and completed post graduation in DIP Cardiology from National Institute of Cardiovascular Disease under BSMMU', 'Dr. S.M. Shahedul Amin (Robin) completed his graduation from Sher-e-Bangla Medical College, Barisal and completed post graduation in DIP Cardiology from National Institute of Cardiovascular Disease under BSMMU. He gained fellowship from Fortis ESCORTS Heart Institute, New Delhi, India and achieved advanced Echo skills through training from the reputed Echo training institute, JROP, New Delhi.   His carrier began in Z.H Sikder Medical College Hospital, Dhaka and served there as Cardiac Intensivist. He also worked in CCU of ARAR Central Hospital, KSA. After serving for one year in KSA he joined at Square Hospitals Ltd. and now he is rendering his service as Associate Consultant, Cardiology (Non-Invasive).    Dr. Robin is expertise in non invasive cardiological procedures expand from 2D-3D Echocardiology (Adult & Paediatric), Trans oesophageal Echo (TEE), Dobutamin stress Echo (DSE) and to other stress Echoes. Tissue Doppler imaging, Strain rate, Contrast Echo and intra operative Echo are his area of interest.   During his successful carrier in Cardiology of 19 years, Dr. Robin served in the field of critical care area (CCU) for 13 years and willing to serve many more years in the field of Cardiology.', '1692806075.jpg', '2023-08-23 09:54:35', '2023-08-23 09:54:35'),
(7, 5, 'Dr. Mahbub Mansur', '+12345678', 'Cardiology', 'B - 204', 'MBBS, MD (Cardiology), Fellow, Interventional Cardiology Fellow, Pacing, EP and Device Implantation', 'Dr. Mahbub Mansur passed his MBBS from Chittagong Medical College in 1994. He passed MD in Cardiology from BSMMU in 2002. He attended Fellowship courses in Interventional Cardiology in Aga Khan University Hospital, Karachi and The Erasmus, Rotterdam,', 'Dr. Mahbub Mansur passed his MBBS from Chittagong Medical College in 1994. He passed MD in Cardiology from BSMMU in 2002. He attended Fellowship courses in Interventional Cardiology in Aga Khan University Hospital, Karachi and The Erasmus, Rotterdam, The Netherlands. He had done fellowship programmes in Electrophysiology in Holy Family Hospital, Bandra, Mumbai, India and also did fellowship programmes in Cardiac Device Implantation from Milan, Italy.  He worked as a Consultant and Associate Professor in Ibrahim Cardiac Hospital and Research Institute from 2003 to 2012.  From 2012 to mid-2016 he was the Chief Consultant Cardiologist in Ibn Sina Hospital, Dhanmondi.  He is one of the pioneers of Radial Intervention in Bangladesh and till date has done more than 10,000 radial coronary intervention cases. His special interest is in Device therapies in Heart Failure patients.  He is a life member of Bangladesh Cardiac Society and Bangladesh Society of Cardiac Intervention and a founder member of Bangladesh Heart Rhythm Society.', '1692806186.jpg', '2023-08-23 09:56:26', '2023-08-23 09:56:26'),
(8, 6, 'Dr. Syeda Ishrat Jahan', '+12345678', 'Dermatology', 'B - 205', 'MBBS, DDV (SINGAPORE), MSc In Clinical Dermatology (London), MSSVD (London)', 'ermatology from National University Hospital, Singapore and worked in National Skin Centre, Singapore. She achieved her Post-graduate (MSc.) degree in Clinical Dermatology from the St. John’s Institute under King’s College,', 'Dr. Syeda Ishrat Jahan completed her graduation from Sylhet MAG Osmani Medical College. After completing her internship she received practical training in different globally acclaimed centers abroad mainly in UK & Singapore in her respective field. She obtained Diploma in Dermatology from National University Hospital, Singapore and worked in National Skin Centre, Singapore. She achieved her Post-graduate (MSc.) degree in Clinical Dermatology from the St. John’s Institute under King’s College, University of London, UK and also worked at Queen Elizabeth Hospital London & King’s Hospital, London.  Dr. Ishrat Jahan completed trainings in Dermato-Surgery, Laser and Cutaneous Cosmetic Surgery, Cryosurgery, Chemical Peeling and Phototherapy, dark ground microscopy and pediatric dermatology', '1692806494.png', '2023-08-23 10:01:34', '2023-08-23 10:01:34'),
(9, 6, 'Prof. Dr. Md. Siraj Uddin', '+12345678', 'Dermatology', 'B - 207', 'MBBS, DDV (BSMMU), DD (Bangkok) Fellow - Dermatosurgery & Laser (Bangkok), Fellow - Hair Transplant Surgery, New York University, USA', 'Prof. Dr. Md. Siraj Uddin completed his graduation from Sylhet MAG Osmani Medical College in 1982. After finishing his internship he joined as medical officer under Ministry of Health, Bangladesh. He worked as a Professor & Head of the Department of Dermatology at Sylhet M.A.G. Osmani Medical College till 2008 & then at  Sylhet Women’s Medical College from 2008 to 2016.', 'Prof. Dr. Md. Siraj Uddin completed his graduation from Sylhet MAG Osmani Medical College in 1982. After finishing his internship he joined as medical officer under Ministry of Health, Bangladesh. He worked as a Professor & Head of the Department of Dermatology at Sylhet M.A.G. Osmani Medical College till 2008 & then at  Sylhet Women’s Medical College from 2008 to 2016.  He completed Diploma in Dermatology (DD) from Institute of Dermatology Bangkok, Thailand & then Diploma in Dermatology & Venereology (DDV) from BSMMU, Dhaka. He achieved Fellowship in Laser & Dermatosurgery from Institute of Dermatology & Ramathibody Laser Center, Bangkok, Thailand & Fellowship in Hair Restoration Surgery from Mount Sinai Hospital, New York University, USA.   Prof. Dr. Md Siraj Uddin is skilled & experienced in managing allergy and skin diseases, sexual medicine, cosmetic surgery, vitiligo surgery, laser and hair transplant surgery, slimming and body shaping, Botox & Fillers etc. He received trainings on Laser & Aesthetic Skin Therapy from Harvard Medical School, Boston, USA; Male sexual health from Bangkok; Laser Assisted Liposuction from Milan, Italy; Hair Transplant Surgery from USA, France, Korea & India and participated in many international workshops, seminars & conferences at USA, Switzerland, Australia, France, Canada, Malaysia, India etc. His research articles have been published in many national & international journals. He joined at  Square Hospital as Senior Consultant, Clinical & Aesthetic Dermatology.', '1692806639.jpg', '2023-08-23 10:03:59', '2023-08-23 10:03:59'),
(10, 7, 'Dr. Md. Mazharul Islam', '+12345678', 'Otorhinolaryngology', 'C - 301', 'MBBS, FCPS (Eye) Trained in Phaco, Laser & Medical Retina (BIRDEM Academy)', 'Dr. Md. Mazharul Islam graduated from Rajshahi Medical College. Then he joined BCS (Health) at Sylhet and thereafter BIRDEM Hospital. He obtained his FCPS (Ophthalmology) degree from BCPS & as post graduate Fellow he worked at BIRDEM till December, 2017', 'Dr. Md. Mazharul Islam graduated from Rajshahi Medical College. Then he joined BCS (Health) at Sylhet and thereafter BIRDEM Hospital. He obtained his FCPS (Ophthalmology) degree from BCPS & as post graduate Fellow he worked at BIRDEM till December, 2017. During this period he got intensive training on different aspects of clinical treatment of Ophthalmological diseases.  Dr. Mazhar has a long experience of more than 12 years in the field of Ophthalmology. He has successfully done 2000 over cases of Phaco with PCIOL. He has accomplished other surgeries like Pterygium operation with conjunctival autograft, DCR operation with Intubation, Cyclocryopexy, Corneal injury repair & many more successfully.', '1692808876.png', '2023-08-23 10:41:16', '2023-08-23 10:41:16'),
(11, 7, 'Lt. Col. Dr. Md. Sajedur Rahman', '+12345678', 'Otorhinolaryngology', 'C - 301', 'MBBS, DO, MD, FIRL, Fellow Ratina & Laser (German), Specilized in Laser, Phaco & Vitreo Retinal Surgery', 'Lt. Col. Dr. Md. Sajedur Rahman is a medical graduate from Mymensingh Medical College. He completed D.O. from Dhaka University and MD from Hamburg University, Germany. He obtained Fellowship in the field of Ophthalmology (Retina & Laser Surgery) from University of Eye Clinic, Hamburg, Germany. He also acquired advanced training in Phaco and Retinal Laser from Germany.', 'Lt. Col. Dr. Md. Sajedur Rahman is a medical graduate from Mymensingh Medical College. He completed D.O. from Dhaka University and MD from Hamburg University, Germany. He obtained Fellowship in the field of Ophthalmology (Retina & Laser Surgery) from University of Eye Clinic, Hamburg, Germany. He also acquired advanced training in Phaco and Retinal Laser from Germany.  Lt. Col. Dr. Md. Sajedur Rahman worked in department of Ophthalmology at CMH as Eye Specialist and Retinal Surgeon for 15 years earned necessary expertise in managing general ophthalmic diseases and performing eye surgeries. He is a member of Editorial Board, Ocular Infection and Hygiene, Germany and also member of American Society of Ophthalmology and Ophthalmology Society of Bangladesh (OSB).', '1692809088.jpeg', '2023-08-23 10:44:48', '2023-08-23 10:44:48'),
(12, 1, 'Dr. Tasnova Mahin', '+12345678', 'Internal medicine', 'C - 303', 'MBBS, FCPS (Medicine), MRCP', 'Dr. Tasnova Mahin obtained MBBS from Armed Forces Medical College. Soon after completing internship she joined Dhaka Medical College for her training in medicine. She worked in Dhaka Medical College Hospital and BIRDEM General Hospital as a medical officer gaining experience in the department of internal medicine, nephrology, neurology, ICU & endocrinolog', 'She became a member of Royal College of Physicians of UK (MRCP) early in her career & has also obtained fellowship from Bangladesh College of Physicians & Surgeons (FCPS) in medicine. She has completed cercificate course on diabetology from BIRDEM & has comprehensive knowledge of managing patients with diabetes.    She has spent 9 years in the field of medicine following graduation with a significant experience in nephrology. She performed procedures such as central line and hemodialysis catheter insertion & managed patients of renal failure. She joined Square Hospital in 2017 & worked in the department of nephrology as a specialist for 4 years.  She has publications in renowned journals & often presented cases in different seminars & symposium.  Now she is working at Square Hospital as Associate Consultant, Internal Medicine.', '1692809422.jpg', '2023-08-23 10:50:22', '2023-08-23 10:50:22'),
(13, 9, 'Dr. Mim', '+12345678', 'Surgery', 'C - 306', 'Dr. Mim Shahrin is a Gynecologist in Dhaka. Her qualification is MBBS, MCPS, FCPS (OBGYN). She is a Consultant in the Department of Gynecology & Obstetrics at Kurmitola General Hospital, Dhaka', 'Kurmitola General Hospital, Dhaka', 'Dr. Mim Shahrin is a Gynecologist in Dhaka. Her qualification is MBBS, MCPS, FCPS (OBGYN). She is a Consultant in the Department of Gynecology & Obstetrics at Kurmitola General Hospital, Dhaka. She regularly provides treatment to her patients at Farazy Diagnostic & Hospital, Natun Bazar. Practicing hour of Dr. Mim Shahrin at Farazy Diagnostic & Hospital, Natun Bazar is 5pm to 7pm (Everyday).', '1692817062.jpg', '2023-08-23 12:57:42', '2023-08-23 12:57:42'),
(14, 18, 'Dr. Jalal', '+12345678', 'Psychology', 'D - 405', 'In the initial period of Ophthalmology practice in Comprehensive Ophthalmology including Cataract, Glaucoma, Oculoplastics, and Pediatrics etc. Now working in the field of Cataractand Refractive Surgery (Phaco, LASIK, and Femtosecond Laser Cataract Surgery) and Glaucoma.', 'MBBS, 1981, Dhaka Medical College, Dhaka.', 'Director cum Professor National Institute of Ophthalmology and Hospital. Sher-e-Banglanagar,Dhaka. Line Director, National Eye Care Ministry of Health & Family Welfare. Principal, Khulna Medical College, Khulna. Professor and Head, Department of Cataract National Institute of Ophthalmology and Hospital. Sher-e-Banglanagar,Dhaka. Associate Professor of Ophthalmology in National Institute and Govt.Medical Colleges,Bangladesh. Associate Professor of Ophthalmology in National Institute of Ophthalmology and Hospital. Resident Surgeon (RS), National Institute of Ophthalmology and Hospital. Junior Consultant, Eye in District Hospital & Medical College. Medical Officer /Assistant surgeon in Dhaka Medical College & Hospital. IPGMR (BSMMU present), Upazilla& District Hospitals.', '1692817880.jpg', '2023-08-23 13:11:20', '2023-08-23 13:11:20'),
(15, 8, 'Dr. Fariah Sharmeen', '+12345678', 'Oncology', 'D - 406', 'MBBS, FCPS (Radiotherapy)', 'Dr. Fariah Sharmeen successfully completed her MBBS from Cumilla Medial College, subsequently completed one year internship from BIRDEM Hospital, Dhaka. After completion of internship, she started her post graduation training in Medical Oncology at National Institute of Cancer Research & Hospital.', 'She started her fellowship in Radiotherapy in 2010. She completed 4 years training at National Institute of Cancer Research & Hospital on External Beam Radiotherapy Planning and Brachytherapy .    She achieved FCPS in Radiotherapy from Bangladesh College of Physicians & Surgeons (BCPS) in 2015. She has obtained several hands on trainings on Head - Neck, Lung, Genitourinary and Gynecological cancer treatment decision and advance radiotherapy planning arranged by IAEA. She also obtained training on Brachytherapy.', '1693022464.jpg', '2023-08-25 22:01:04', '2023-08-25 22:01:04'),
(16, 10, 'Dr. A M Rejaus Satter', '+12345678', 'Neurosurgery', 'D - 407', 'MBBS, FCPS (Surgery), MS (Neurosurgery)', 'Dr. A M Rejaus Satter is a physician specializing in Neuro Surgery. At Square Hospital, he has been an active team member who has helped to develop a center excelling at endoscopic pituitary surgery, aneurysm surgery, complex brain tumor surgery, minimally invasive spine surgery and other intricate brain surgeries; in the private sector of Bangladesh within a very short period of time.', 'Completing his MBBS from Mymensingh Medical College, Dr. Reja entered into Post graduation and earned FCPS in General Surgery. Shortly after, he pursued his lifelong dream of becoming a Neuro Surgeon when he entered MS (Neuro surgery) course and obtained Masters Degree. He was trained and supervised by the best Neuro Scientists and Neuro Surgeons of both Bangladesh and India. Today, as Consultant Neuro and Spine surgeon of Square Hospital, he performed thousands of complex Neuro surgery in past years with lowest complication rates compared to the rest of the country and also some other countries.   Dr. Reja has been exposed to all ranges of emergencies starting from trauma to intracerebral hematomas and strokes; entire ranges of emergency spinal decompression, brain tumors, spinal tumors,  trans-sphenoidal surgery, congenital and pediatric neurosurgical disorders; degenerative spine diseases; endoscopic neurosurgical procedures; vascular disorders like aneurysms and AVMs.', '1693022579.jpg', '2023-08-25 22:02:59', '2023-08-25 22:02:59'),
(17, 14, 'Prof. Dr. A. K. M. Anwarul Islam', '+12345678', 'Urology', 'D - 408', 'MBBS, FCPS (Surgery), FRCSI (Ireland), FICS (Urology)', 'Professor A.K.M. Anwarul Islam graduated from Mymensingh Medical College in 1977 and completed FCPS in Surgery from Bangladesh College of Physicians & Surgeons (BCPS) in 1983. Then he served as Junior Consultant of Surgery in district hospitals until 1988, when he joined the Urology department of IPGMR (present BSMMU) as Assistant Professor.', 'Professor Anwarul Islam has a long carrier of over 33 years in Urology. He was one of the active members, who worked together in the early period of development of modern urology and transplantation in Bangladesh. Under WHO Fellowship program, he received training in specific fields in renowned overseas urology centers including NKI, Philippines and CMC, Vellore. He also served as Urologist in KSA for over 3 & ½ years. In 1996, he completed the FRCS examination of Royal College of Ireland. His credentials enabled him to achieve the position of Associate Professor (2000) and then Professor (2005) of Urology in BSMMU. He is experienced in General Urology, Endo-urology, Stone surgery, Pediatric Urology, Reconstructive Urology, Andrology and Kidney Transplantation.    Prof. Islam is a member of several professional urological associations at home and abroad. He was the Past President of Bangladesh Association of Urological Surgeons (BAUS). He conducted operative workshops on Urological procedures and presented scientific papers in many national and international conferences. He was also a Past President of South Asian Society for Sexual Medicine (SASSM). He is now the Director of SASSM School Bangladesh, which organizes regular courses on Sexual Medicine in Bangladesh. He has many publications in national and international journals. He has recently joined Square Hospital as Senior Consultant of Urology.', '1693022723.png', '2023-08-25 22:05:23', '2023-08-25 22:05:23'),
(18, 16, 'Prof. Dr. Shafquat Hussain Khundkar', '+12345678', 'Plastic surgery', 'D - 409', 'MBBS, FCPS, WHO Fellow (Plastic Surgery) Trained in Plastic Surgery(Melbourne, Australia)', 'Prof. Shafquat Hussain Khundkar, the former Professor and Head of Department of Plastic Surgery, Dhaka Medical College having over 30 years of rich experience in Plastic and Reconstructive Surgery has joined Square Hospital.', 'Prof. Shafquat completed his MBBS from Dhaka Medical College and obtained his FCPS in General Surgery from Bangladesh College of Physicians and Surgeons (BCPS). He served as Resident Surgeon of Dhaka Medical College Hospital (1984-86) when he was selected as Assistant Professor of Surgery in IPGM&R (now BSMMU).   After his training in Plastic and Reconstructive Surgery in the late 1980s as a WHO Fellow in Melbourne, Australia he pursued the rest of his career as a Plastic Surgeon. He also obtained training in Microsurgery offered by MD Anderson Cancer Centre and Interplast USA.   He has pioneered the development of the discipline in Bangladesh and is the teacher of teachers in Plastic Surgery in this country. He was awarded the Asir Memorial Gold Medal for performing the first successful free tissue transfer as “Toe to Thumb transfer” in Bangladesh in the mid 90s.  Prof. Shafquat is a very versatile plastic surgeon and operates on the whole range of plastic and reconstructive surgeries from acute and late burns, burn contracture reconstructions, congenital cleft surgery, hand trauma, flap reconstructions, microsurgery, scar revisions, cosmetic breast surgery, abdominoplasty and other cosmetic surgeries.', '1693022854.jpg', '2023-08-25 22:07:34', '2023-08-25 22:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Mohim', 'List of Countries without Coronavirus case', 'Are there Countries Without Coronavirus?\r\nEDIT - as of 17th AUGUST 2022 when North Korea announced its first case of COVID-19, there is only one country left on this list of countries without coronavirus; Turkmenistan. \r\nThis blog has been constantly edited since February 2020 to keep up with countries that had no cases of COVID-19. Starting with 30 countries, there is now only one left, 3 years later into the pandemic.\r\n\r\nWhat a couple of years it has been... \r\n\r\nUPDATED: JANUARY 2022\r\nThe spread of the coronavirus took us all by surprise, and the speed at which it has spread all over the world is alarming. So much so, that it is almost hard to believe that some countries still have no reported cases of the Coronavirus/COVID-19. \r\n\r\nWell, there are in fact countries without coronavirus! \r\n\r\nThe UN officially recognises 193 countries. \r\n\r\nAs of JANUARY 2023, only 1 country has not confirmed any cases of COVID-19. Many of these countries to get COVID last were Pacific Island countries in Oceania.', '1693321729.jpg', '2023-08-29 00:10:55', '2023-08-29 09:08:49'),
(5, 'Mohim', 'What is the impact of eating too much sugar?', 'Impact on your heart\r\nIn a study published in 2014 in JAMA Internal Medicine, Dr. Hu and his colleagues found an association between a high-sugar diet and a greater risk of dying from heart disease. Over the course of the 15-year study, people who got 17% to 21% of their calories from added sugar had a 38% higher risk of dying from cardiovascular disease compared with those who consumed 8% of their calories as added sugar.\r\n\r\n\"Basically, the higher the intake of added sugar, the higher the risk for heart disease,\" says Dr. Hu.\r\n\r\nHow sugar actually affects heart health is not completely understood, but it appears to have several indirect connections. For instance, high amounts of sugar overload the liver. \"Your liver metabolizes sugar the same way as alcohol, and converts dietary carbohydrates to fat,\" says Dr. Hu. Over time, this can lead to a greater accumulation of fat, which may turn into fatty liver disease, a contributor to diabetes, which raises your risk for heart disease.\r\n\r\nConsuming too much added sugar can raise blood pressure and increase chronic inflammation, both of which are pathological pathways to heart disease. Excess consumption of sugar, especially in sugary beverages, also contributes to weight gain by tricking your body into turning off its appetite-control system because liquid calories are not as satisfying as calories from solid foods. This is why it is easier for people to add more calories to their regular diet when consuming sugary beverages.', '1693323742.jpg', '2023-08-29 09:42:22', '2023-08-29 09:42:22'),
(6, 'Mohim', 'Shifting goalposts: Research in the time of the coronavirus', 'Last month, Medical News Today published an interview with Dr. Catherine Oldenburg, an infectious disease epidemiologist and co-lead researcher of a new clinical trial investigating a potential treatment for COVID-19.\r\n\r\nIn the interview, Dr. Oldenburg commented on some unexpected ways in which the pandemic has affected how scientists conduct their research.\r\n\r\nItems that were readily available before the pandemic, such as laboratory or clinical trial supplies, have become more difficult to get hold of due to restrictions on international movement.\r\n\r\n“It’s interesting how many things we took for granted before COVID-19 — you know, [like the] moving of supplies,” Dr. Oldenburg remarked in the interview.\r\n\r\nWhat else has changed in the landscape of research as a result of the COVID-19 pandemic?\r\n\r\nIn this Special Feature, MNT “takes the pulse” of the research community to see where it now stands.', '1693323836.jpg', '2023-08-29 09:43:56', '2023-08-29 09:43:56'),
(7, 'Mohim', 'What are the nonmedical factors most closely linked to death risk?', 'Analyzing the data\r\nA recent estimate of U.S. life expectancy stood at 78.6 years, while 11 other industrialized nations averaged about 82.3 years. This represented a gain of just 4.9 years for the U.S. between 1980 and 2017, while other nations added an average of 7.8 years.\r\n\r\nBiological and medical factors are likely part of the reason, and advances in medicine that aim to address these factors continue. The roles of social, psychological, economic, and behavioral factors in life expectancy are less well understood, and researchers often study them in isolation.\r\n\r\nThis means that it is unclear which of these nonmedical factors are the strongest predictors of mortality risk — a knowledge gap the new study hoped to fill.\r\n\r\nThe study, which Eli Puterman of UBC led, included the data of 13,611 adults who took part in the U.S. Health and Retirement Study. This was a nationally representative sample of U.S. adults aged 52–104. The average age was 69.3. Scientists collected these data between 1992 and 2008 and analyzed them in relation to deaths that occurred between 2008 and 2014.\r\n\r\nThe original data did not capture all potential psychosocial factors that might be linked to mortality. For example, the researchers tracked neither food insecurity nor domestic abuse.\r\n\r\nOf the results, Puterman says, “It shows that a lifespan approach is needed to really understand health and mortality.”', '1693324108.jpg', '2023-08-29 09:48:28', '2023-08-29 09:48:28'),
(8, 'Mohim', 'Do gut bacteria contribute to ethnic health disparities', 'Our gut feels different when we are nervous, sad, or have a busy day. The gut–brain axis or brain-gut axis (sometimes used interchangeably) is the biological link between the physiology and these emotions. It is described as a bidirectional communication system between the central nervous system (the brain and spinal cord) and the enteric nervous system [1]. In other words, it is the link between the brain’s emotional and rational parts and our intestines’ physiology and metabolism. Abnormal gut–brain axis activity has shown an association with physical and psychological illnesses. In the last decade, seminal work has demonstrated the importance of the gut microbiome and its influence on the system’s functionality [1,2,3,4,5].\r\nThe collective genome content of the microbiota, the collection of microbial communities inhabiting the human body, was coined the microbiome [6]. The host–microbiome supraorganism has co-evolved, shaping the physiological phenotypes that lead to either health or disease [7,8,9]. The gut microbiota impacts diverse physiological processes ranging from metabolism [10,11], obesity [12,13], immune modulation [14], and even behavior [15,16,17,18]. In each case, the mechanistic ties of gut microbes and the host phenotypic responses are still unresolved, and much more research is needed. Ethnical changes associated with the microbiota are becoming more evident, suggesting that the microbiome may contribute to ethnic health disparities. Factors such as diet and lifestyle behaviors are the most important variables that influence health outcomes and simultaneously impact the human microbiome. Changes in these factors (i.e., nutrition and/or lifestyle) impact the microbiome and affect the host’s metabolic functions, which may underly all health inequities [19].\r\nA multi-ethnic community study in Malaysia showed that ethnicity significantly impacted gut microbiota diversity. People from different ethnicities have different proportions of some types of bacteria due to the fact of diet, medication use, and hygiene [20]. Similarly, significant differences in gut microbiota have been found among peoples of different ethnicities in the US. The gut microbiota of Caucasians compared to Asian, Pacific Islanders, and Hispanics have significant differences at the family level including in Christensenellacea distinguishing Asian–Pacific islanders [21]. Another study conducted in Canada showed a higher abundance of lactic acid bacteria in children from South Asians when compared to Caucasians. The differences in bacterial abundance were associated with ethnicity and breastfeeding. These two main factors independently influenced infant gut microbiome at one year of age [22].\r\nIn addition, psychological illnesses are linked with altered intestinal functions, microbiota composition, and diversity [23]. In 2019, among systematic reviews, there were fewer than ten investigations that explored the connection between major depressive disorder (MDD) or bipolar disorder with human gut microbiota [4,24]. Some reported a significant difference in bacterial diversity in MDD patients versus control groups, while others failed to find any difference.', '1693324194.jpg', '2023-08-29 09:49:54', '2023-08-29 09:49:54'),
(9, 'Mohim', 'The Recovery Room: News beyond the pandemic', 'The coronavirus pandemic has dominated the headlines and our daily lives for more than a year. Medical News Today has covered this fast-moving, complex story with live updates on the latest news, interviews with experts, and an ongoing investigation into the deep racial disparities that COVID-19 has helped unmask.In this final edition of the Recovery Room, we begin with the third edition in our series of articles that seeks to find out what’s exciting cancer researchers. Together, these articles provide an essential insight into emerging treatments and diagnostic techniques. You’ll find links to all three below.\r\n\r\nWe also look at food addiction, one of the most controversial topics in nutrition. Some people claim to be “addicted” to coffee, but, as another of our recent articles shows, this may not be a bad thing, as drinking any type of coffee reduces the risk of a range of liver diseases.', '1693324547.jpeg', '2023-08-29 09:55:47', '2023-08-29 09:55:47'),
(10, 'Diet of ultra-processed foods', 'Diet of ultra-processed foods linked to higher depression risk long term', 'According to a new study from Australia, whose results appear in the Journal of Affective Disorders, people who consume a diet high in ultra-processed foods are more likely to experience depression as much as a decade later.\r\n\r\nImplicating diet as a source of depression, one of the world’s most common mental health conditions, suggests that changing one’s diet is potentially a pathway to better mental health, though further research is necessary.\r\n\r\nAustralia is a country with one of the highest rates of consumption of ultra-processed foods, with residents getting, on average, over 40% of their daily calories from highly processed sources.\r\n\r\nUltra-processed foods are manufactured foods typically containing five or more ingredients. They are optimized for flavor and an extended shelf life rather than for nutrition. As a result, they often contain sweeteners, preservatives, emulsifiers, artificial colors and artificial flavors.', '1693334967.jpeg', '2023-08-29 12:49:27', '2023-08-29 12:49:27'),
(11, 'Could time-restricted eating', 'Could time-restricted eating help manage Alzheimer\'s symptoms?', 'A recent study in a mouse model suggests that intermittent fasting, or time-restricted eating, may benefit those experiencing symptoms of Alzheimer’s disease.\r\n\r\nAlzheimer’s disease — a progressive and ultimately fatal neurodegenerative condition — is the most common form of dementia.\r\n\r\nCurrent treatmentsTrusted Source can help to alleviate symptoms, such as memory loss, sleep issues, and behavioral problems.\r\n\r\nNewer monoclonal antibody drugs — donanemabTrusted Source, aducanumab, and lecanemab — that clear amyloid plaquesTrusted Source perform well in trials. However, these are not yet widely available as research is ongoing.\r\n\r\nAnother approach to alleviating Alzheimer’s disease symptoms relies on lifestyle modifications.\r\n\r\nA laboratory study has found that time-restricted feeding corrects the circadian disruptionsTrusted Source of Alzheimer’s disease, improves memory, and reduces the accumulation of amyloidTrusted Source — a protein tied to dementia progression — in the brain.\r\n\r\nIf these effects in mice can be replicated in people, it could be a simple way to help manage Alzheimer’s disease.\r\n\r\nThe study, from the University of California San Diego School of Medicine, is published in Cell Metabolism.\r\n\r\nDr. Percy Griffin, Ph.D., Alzheimer’s Association director of scientific engagement, not involved in the research, commented:\r\n\r\n“The authors noted that one limitation of the study was the model used. The mouse model only displayed amyloid deposition, which is one of the hallmarks of Alzheimer’s. The model did not display other hallmarks including tau tangle formation [which is another marker of dementia] or brain cell loss. While this is interesting work, we need more research in other models for confirmation.”', '1693335022.jpeg', '2023-08-29 12:50:22', '2023-08-29 12:50:22'),
(12, 'Foods Good for Liver', 'Foods Good for Liver 7 foods that are good for the liver', 'Incorporating these foods into a balanced and healthy diet can help support liver function and promote overall well-being. However, it\'s essential to remember that a holistic approach to liver health includes a balanced diet, regular exercise, and avoiding excessive alcohol consumption and harmful substances. If you have any specific health concerns or liver conditions, it\'s best to consult with a healthcare professional for personalized advice.\r\n\r\nConclusion\r\nIn conclusion, our journey through the world of \"Foods Good for Liver Health\" has unveiled a treasure trove of delicious and nutrient-rich options to support our liver\'s well-being. The liver, a remarkable organ, plays a vital role in keeping our bodies functioning optimally. By making conscious choices and incorporating liver-loving foods into our diets, we empower this resilient organ to carry out its detoxifying and metabolic functions with efficiency.\r\n\r\nFrom the vibrant greens of leafy vegetables to the golden hues of turmeric and the wholesome goodness of fatty fish and nuts, these foods offer a symphony of flavors and benefits for our liver\'s nourishment. With each meal, we have the opportunity to show our liver the care and respect it deserves.\r\n\r\nHowever, let us not forget that a holistic approach to liver health extends beyond just what we eat. Maintaining a balanced lifestyle, regular exercise, staying hydrated, and avoiding harmful substances are essential aspects of liver care.\r\n\r\nSo, let us embrace this newfound knowledge and embark on a journey of nourishment, making conscious choices that not only delight our taste buds but also nurture our liver and, by extension, our overall well-being. Empowered with these insights, we can savor life\'s flavors while ensuring our liver thrives, fostering a healthier and happier future for ourselves.', '1693336156.jpeg', '2023-08-29 13:09:16', '2023-08-29 13:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_06_183525_create_specialities_table', 1),
(7, '2023_08_06_183822_create_doctors_table', 1),
(8, '2023_08_06_184802_create_appoinments_table', 1),
(9, '2023_08_15_052813_create_patients_table', 1),
(10, '2023_08_22_033436_create_comments_table', 1),
(11, '2023_08_22_115314_create_replies_table', 1),
(13, '2023_08_28_173515_create_events_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `speciality_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `advice` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `appointment_id`, `doctor_id`, `speciality_id`, `image`, `advice`, `comments`, `created_at`, `updated_at`) VALUES
(1, 6, 5, 5, '1692817158.jpeg', 'no advice', 'after 7days', '2023-08-23 11:15:35', '2023-08-23 12:59:18'),
(2, 8, 1, 1, '1692817515.jpeg', 'no advice avialable', 'after  10 days', '2023-08-23 11:15:36', '2023-08-23 13:05:15'),
(3, 6, 5, 5, '1692817587.jpeg', 'no advice', 'after 7days', '2023-08-23 11:15:40', '2023-08-23 13:06:27'),
(4, 7, 7, 5, 'img', 'no advice', 'after 7days', '2023-08-23 11:15:43', '2023-08-23 11:15:43'),
(5, 8, 1, 1, 'img', 'no advice', 'after 7days', '2023-08-23 11:15:45', '2023-08-23 11:15:45'),
(6, 1, 12, 1, 'img', 'no advice', 'after 7days', '2023-08-23 11:15:48', '2023-08-23 11:15:48'),
(7, 2, 3, 1, 'img', 'no advice', 'after 7days', '2023-08-23 11:15:50', '2023-08-23 11:15:50'),
(8, 5, 2, 1, 'img', 'no advice', 'after 7days', '2023-08-23 11:15:53', '2023-08-23 11:15:53'),
(9, 10, 7, 5, 'Defualt Image', '', '', '2023-08-23 13:13:46', '2023-08-23 13:13:46'),
(10, 9, 8, 6, 'Defualt Image', '', '', '2023-08-23 13:13:47', '2023-08-23 13:13:47'),
(11, 9, 8, 6, 'Defualt Image', '', '', '2023-08-23 13:13:49', '2023-08-23 13:13:49'),
(12, 8, 1, 1, 'Defualt Image', '', '', '2023-08-23 13:13:51', '2023-08-23 13:13:51'),
(13, 7, 7, 5, 'Defualt Image', '', '', '2023-08-23 13:13:52', '2023-08-23 13:13:52'),
(14, 6, 5, 5, 'Defualt Image', '', '', '2023-08-23 13:13:54', '2023-08-23 13:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `reply` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `user_id`, `doctor_id`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 2, 'Right', '2023-08-23 11:17:35', '2023-08-23 11:17:35'),
(2, 6, 5, 2, 'It\'s truth', '2023-08-23 11:18:08', '2023-08-23 11:18:08'),
(3, 10, 7, 8, 'Right', '2023-08-23 12:25:00', '2023-08-23 12:25:00'),
(4, 11, 2, 1, 'Right', '2023-08-29 11:00:00', '2023-08-29 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Internal medicine', '2023-08-23 08:49:28', '2023-08-23 08:49:28'),
(4, 'Primary care', '2023-08-23 08:50:08', '2023-08-23 08:50:08'),
(5, 'Cardiology', '2023-08-23 08:50:18', '2023-08-23 08:50:18'),
(6, 'Dermatology', '2023-08-23 08:50:55', '2023-08-23 08:50:55'),
(7, 'ENT, HEAD & NECK SURGERY', '2023-08-23 08:51:06', '2023-08-28 09:18:05'),
(8, 'Oncology', '2023-08-23 08:51:19', '2023-08-23 08:51:19'),
(9, 'Surgery', '2023-08-23 08:51:29', '2023-08-23 08:51:29'),
(10, 'Neurosurgery', '2023-08-23 08:51:39', '2023-08-23 08:51:39'),
(14, 'Urology', '2023-08-23 08:52:31', '2023-08-23 08:52:31'),
(16, 'Plastic surgery', '2023-08-23 08:53:21', '2023-08-23 08:53:21'),
(18, 'Psychology', '2023-08-23 08:53:55', '2023-08-23 08:53:55'),
(24, 'admin', '2023-08-28 23:13:37', '2023-08-28 23:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohim Molla', 'mohim@gmail.com', NULL, '$2y$10$C7MSOpq2IykAMUvSS22lM.DOnfS2B9cAuF/37LZ6WvHQ1zs5Z7.76', NULL, NULL, NULL, 1, NULL, '2023-08-23 08:48:38', '2023-08-29 08:41:21'),
(2, 'Mohim', 'mohim1@gmail.com', NULL, '$2y$10$7RpjKE2vAcwzjFxNo1zsq.3tCVX6v1/FNeMhl40UMW8mpjqg/Y21e', NULL, NULL, NULL, 2, NULL, '2023-08-23 09:09:33', '2023-08-23 09:09:33'),
(3, 'Monjurul', 'Monjurul@gmail.com', NULL, '$2y$10$HMCbaozJP5xDywg9C3A7vuwrqdT2GwbnBYAFMKRHDPwzAbYEjxcv.', NULL, NULL, NULL, 2, NULL, '2023-08-23 11:01:49', '2023-08-23 11:01:49'),
(4, 'Ismail', 'Ismail@gmail.com', NULL, '$2y$10$WUrBfZprB.pqCCnIvM2y3Oj68i7FvKDdv5uOriwvr6xPJGiJ2CX6e', NULL, NULL, NULL, 2, NULL, '2023-08-23 11:06:31', '2023-08-23 11:06:31'),
(5, 'Sayeed', 'Sayeed@gmail.com', NULL, '$2y$10$VrXZuXBVVspW1D3531EK..v0aZidWc8HJWQb43g3Oe1R9Kjl/otZC', NULL, NULL, NULL, 2, NULL, '2023-08-23 11:10:59', '2023-08-23 11:10:59'),
(6, 'Jalal', 'jalal@gmail.com', NULL, '$2y$10$SLhplpf0hTOMbr0R5sIJk.Aaz09cVL3GDnjk4t5xVUIY.qaOruknK', NULL, NULL, NULL, 1, NULL, '2023-08-23 11:43:22', '2023-08-23 11:44:38'),
(7, 'Jalal', 'jalal1@gmail.com', NULL, '$2y$10$CgPoMS9se/vx3jeJl5Ot.ujAgtapvjx6Wf/108XwDbJhJxKIyijGi', NULL, NULL, NULL, 2, NULL, '2023-08-23 11:44:06', '2023-08-23 11:44:06'),
(8, 'admin', 'admin@gmail.com', NULL, '$2y$10$HZnuSUvXpx773tHvbUeL7.AF5lGpjKWI9lbjODvFYDQK.vZzxLEZW', NULL, NULL, NULL, 1, NULL, '2023-08-23 11:46:29', '2023-08-23 11:47:41'),
(9, 'user', 'user@gmail.com', NULL, '$2y$10$2ct/kAD4S3rmPJS/LvFVJOZh05csJp4n4uA50jg5c9tz36h/MoR9C', NULL, NULL, NULL, 2, NULL, '2023-08-23 11:47:03', '2023-08-23 11:47:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointments_speciality_id_foreign` (`speciality_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_speciality_id_foreign` (`speciality_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_appointment_id_foreign` (`appointment_id`),
  ADD KEY `patients_doctor_id_foreign` (`doctor_id`),
  ADD KEY `patients_speciality_id_foreign` (`speciality_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_comment_id_foreign` (`comment_id`),
  ADD KEY `replies_user_id_foreign` (`user_id`),
  ADD KEY `replies_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `specialities_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_speciality_id_foreign` FOREIGN KEY (`speciality_id`) REFERENCES `specialities` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_speciality_id_foreign` FOREIGN KEY (`speciality_id`) REFERENCES `specialities` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patients_speciality_id_foreign` FOREIGN KEY (`speciality_id`) REFERENCES `specialities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
