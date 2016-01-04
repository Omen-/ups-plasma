-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 04 Janvier 2016 à 15:31
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `master_stp`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_09_192935_create_user_table', 1),
('2015_11_13_115627_create_role_table', 3),
('2015_11_04_141201_create_news_table', 2),
('2015_11_07_111024_add_image_desc_to_news', 3),
('2015_11_12_160131_create_category_table', 3),
('2015_11_13_120500_add_name_and_role_to_user', 3),
('2015_11_13_202621_create_training_table', 4),
('2015_12_05_221045_create_page_table', 5),
('2016_01_04_150333_setup_scenario_pages', 6),
('2016_01_04_150855_setup_scenario_users', 7);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `author_id`, `title`, `image`, `image_desc`, `content`, `created_at`, `updated_at`) VALUES
(23, 1, 'German fusion reactor achieves first plasma', '56819fbed36c7Wendelstein_7-X_-_460_Thorsten_Brauer-IPP.jpg', '', '<p><strong>After more than a year of technical preparations and tests, the Wendelstein 7-X stellarator has produced its first helium plasma.</strong></p>\r\n<table cellpadding="2" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img title="Wendelstein 7-X - 460 (Thorsten Brauer-IPP)" src="http://www.world-nuclear-news.org/uploadedImages/wnn/Images/Wendelstein%207-X%20-%20460%20(Thorsten%20Brauer-IPP).jpg" alt="Wendelstein 7-X - 460 (Thorsten Brauer-IPP)" /></td>\r\n</tr>\r\n<tr>\r\n<td><em><span style="font-size: xx-small;">The Wendelstein 7-X stellarator (Image: Thorsten Brauer/IPP)</span></em></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Assembly of the Wendelstein 7-X - the world''s largest stellarator-type fusion device - at the Max Planck Institute for Plasma Physics (IPP) in Greifswald, Germany, began in April 2005 and was completed in April 2014. The operational preparations have been under way ever since.</p>\r\n<p>Each technical system - the vacuum in the vessels, the cooling system, the superconducting coils and the magnetic field they produce, the control system, as well as the heating devices and measuring systems - has been tested in turn.</p>\r\n<p>On 10 December, the operating team in the control room started up the magnetic field and initiated the computer-operated experiment control system. It fed around one milligram of helium gas into the evacuated plasma vessel and switched on the microwave heating for a short 1.3 MW pulse. The first plasma could be observed by the installed cameras and measuring devices.</p>\r\n<p>The first plasma in the machine had a duration of one-tenth of a second and achieved a temperature of around one million degrees Celsius.</p>\r\n<p>The next task will be to extend the duration of the plasma discharges and to investigate the best method of producing and heating helium plasmas using microwaves.</p>\r\n<p>Project leader Thomas Klinger said, "We''re starting with a plasma produced from the noble gas helium. We''re not changing over to the actual investigation object, a hydrogen plasma, until next year." He added, "This is because it''s easier to achieve the plasma state with helium. In addition, we can clean the surface of the plasma vessel with helium plasmas."</p>\r\n<p>Wendelstein 7-X will allow IPP researchers to study high energy plasma under stable conditions.</p>\r\n<p>Wendelstein is a stellarator fusion reactor - different to a tokamak fusion reactor such as the Joint European Torus in the UK or the Iter device under construction in France. A tokamak is based on a uniform toroid shape, whereas a stellarator twists that shape in a figure-8. This gets around the problems tokamaks face when magnetic coils confining the plasma are necessarily less dense on the outside of the toroidal ring.</p>\r\n<p>Wendelstein 7-X is to operate for two years without active cooling, during which time it will be able to operate for about 50 seconds at 1 MWt, or at 8-10 MW for 5-10 seconds. The machine will then undergo an 18-month shutdown when it will be fitted with an actively cooled divertor for heat fluxes of up to 10 MWt per meter squared. This will bring Wendelstein 7-X to its full steady state capacity.</p>\r\n<p>Some &euro;370 million ($408 million) has been invested in the Wendelstein 7-X project, with funding from federal and state governments and the European Union.</p>', '2015-12-28 19:46:54', '2015-12-28 19:46:54'),
(22, 1, 'A Real Lightsaber? Look to Plasma, Not Lasers', '56819f775d20ereal-lightsaber-670.jpg', '', '<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;"><em><img style="display: block; margin-left: auto; margin-right: auto;" src="http://static.ddmcdn.com/gif/real-lightsaber-670.jpg" alt="" width="499" height="328" />LUCASFILMS, LTD.<br /></em></p>\r\n<p>&nbsp;</p>\r\n<p><em>Don Lincoln is a senior scientist at the U.S. Department of Energy''s Fermilab, the United States'' biggest Large Hadron Collider research institution. He also writes about science for the public, including his recent "</em><a href="http://www.amazon.com/The-Large-Hadron-Collider-Extraordinary/dp/1421413515/?&amp;tag=livescience-20"><em>The Large Hadron Collider: The Extraordinary Story of the Higgs Boson and Other Things That Will Blow Your Mind</em></a><em>."</em></p>\r\n<p>This is the how a lightsaber was introduced to viewers nearly 40 years ago. Trademark weapon of the semi-mystical Jedi, it is said that the glowing blade kept peace for millennia in the Galactic Republic. For those introduced to the weapon in 1977, when the first "Star Wars" movie came out, the characteristic hum of the lightsaber and the epic fight between Darth Vader and Obi-Wan Kenobi is etched in those viewers'' minds.</p>\r\n<p><a href="http://news.discovery.com/tech/alternative-power-sources/star-wars-moisture-farming-tech-wont-save-california-150416.htm">Star Wars'' Moisture Farming Tech Won''t Save California</a></p>\r\n<p>Given the impact the Star Wars franchise has had on society, it''s inevitable that a segment of the public would love to make a lightsaber, and even train with it. But what technology could possibly yield the lightsaber? With that desire, came the first attempts to reverse-engineer the device. Reverse engineering, in this context, is thinking about how to do it&hellip;not actually building one. However, this <a href="http://gizmodo.com/scientists-created-a-new-form-of-matter-and-its-like-a-1387420181/1391676580">research about clumping photons</a> made the rounds a while ago.</p>\r\n<p>If one could explore the device''s performance, perhaps a few engineers could turn the lightsaber into next Christmas'' hot, new "must-have" gift.</p>\r\n<p>At the risk of crushing the dreams of some readers: Remember: "Star Wars" is science fiction. But what do scientists know that could, in theory, reveal how to build a lightsaber?</p>\r\n<p><a href="http://news.discovery.com/human/life/is-new-star-war-movie-or-anything-else-really-new-151102.htm">Is New Star Wars Movie (Or Anything Else) So New?</a></p>\r\n<p>The movies show that lightsabers are glowing blades about 4 feet (1.2 meters) long. They clearly contain a tremendous amount of energy and can quickly melt large amounts of metal. This suggests that these weapons must contain a powerful and compact energy supply. They can cut through flesh without any difficulty, yet their hilts are not so hot as to burn the hand that holds them. Two light sabers will not pass through each other, and there are different colors of scintillating blades.</p>\r\n<p>Given the name and appearances, the first obvious thought is that perhaps lightsabers consist of some kind of laser. However, this hypothesis is easy to rule out. Lasers don''t have a fixed length, as you can determine using a simple laser pointer. Further, unless the light is somehow scattered, a laser is essentially invisible as it passes through the air. Neither of these characteristics describes a lightsaber.</p>', '2015-12-28 19:45:43', '2015-12-28 19:45:43'),
(24, 1, 'New plasma-based method to treat radioactive waste', '5681a0b70fffeNuclear-waste_C_577.jpg', '', '<p>Physicists at the U.S. Department of Energy''s (DOE) Princeton Plasma Physics Laboratory (PPPL) are proposing a new way to process nuclear waste that uses a plasma-based centrifuge. Known as plasma mass filtering, the new mass separation techniques would supplement chemical techniques. &nbsp;It is hoped that this combined approach would reduce both the cost of nuclear waste disposal and the amount of byproducts produced during the process. &nbsp;This work was supported by PPPL''s Laboratory Directed Research and Development Program.</p>\r\n<p>"The safe disposal of nuclear waste is a colossal problem," said Renaud Gueroult, staff physicist at PPPL and lead author of the paper that appeared in the Journal of Hazardous Materials in October. "One solution might be to supplement existing chemical separation techniques with plasma separation techniques, which could be economically attractive, ideally leading to a reevaluation of how nuclear waste is processed."</p>\r\n<p>The immediate motivation for safe disposal is the radioactive waste stored currently at the Hanford Site, a facility in Washington State that produced plutonium for nuclear weapons during the Cold War. The volume of this waste originally totaled 54 million gallons and was stored in 177 underground tanks.</p>\r\n<p><strong>Machinery to encase waste in glass</strong></p>\r\n<p>In 2000, Hanford engineers began building machinery that would encase the radioactive waste in glass. The method, known as "vitrification," had been used at another Cold War-era nuclear production facility since 1996. A multibillion-dollar vitrification plant is currently under construction at the Hanford site.</p>\r\n<p>Since vitrification and disposal in a federal repository of highly radioactive waste is expensive, there is an advantage to first reducing the amount of the highly radioactive waste to be vitrified, with the goal of having to process less volume.&nbsp; The high-level radioactive waste would then be incorporated into the glass matrix.</p>\r\n<p>This vitrified waste is deposited into canisters that measure approximately 10 feet long and two feet in diameter. These canisters would be sent away to a federal repository where the radioactivity dissipates over thousands of years. The low-level waste by-product would be similarly, but less expensively, immobilized in a glass wasteform. This immobilized low-level waste would be disposed of at the Hanford Site.</p>\r\n<p>To reduce the cost of high-level waste vitrification and disposal, it may be advantageous to reduce the number of high-level glass canisters by packing more waste into each glass canister.&nbsp; To reduce the volume to be vitrified, it would be advantageous to separate the nonradioactive waste, like aluminum and iron, out of the waste, leaving less waste to be vitrified.&nbsp; However, in its 2014 report, the DOE Task Force on Technology Development for Environmental Management argued that, "without the development of new technology, it is not clear that the cleanup can be completed satisfactorily or at any reasonable cost."</p>\r\n<p><strong>Plasma-based mass separation techniques</strong></p>\r\n<p>The high-throughput, plasma-based, mass separation techniques advanced at PPPL offer the possibility of reducing the volume of waste that needs to be immobilized in glass. "The interesting thing about our ideas on mass separation is that it is a form of magnetic confinement, so it fits well within the Laboratory''s culture," said physicist Nat Fisch, co-author of the paper and director of the Princeton University Program in Plasma Physics. "To be more precise, it is ''differential magnetic confinement'' in that some species are confined while others are lost quickly, which is what makes it a high-throughput mass filter."</p>\r\n<p>How would a plasma-based mass filter system work? The method begins by atomizing and ionizing the hazardous waste and injecting it into the rotating filter so the individual elements can be influenced by electric and magnetic fields. The filter then separates the lighter elements from the heavier ones by using centrifugal and magnetic forces. The lighter elements are typically less radioactive than the heavier ones and often do not need to be vitrified. Processing of the high-level waste therefore would need fewer high-level glass canisters overall, while the less radioactive material could be immobilized in less costly wasteform (e.g., concrete, bitumen).</p>\r\n<p>The new technique would also be more widely applicable than traditional chemical-based methods since it would depend less on the nuclear waste''s chemical composition.While "the waste''s composition would influence the performance of the plasma mass filter in some ways, the effect would most likely be less than that associated with chemical techniques," said Gueroult.</p>\r\n<p>Gueroult points out why savings by plasma techniques can be important. "For only about $10 a kilogram in energy cost, solid waste can be ionized. In its ionized form, the waste can then be separated into heavy and light components. Because the waste is atomized, the separation proceeds only on the basis of atomic mass, without regard to the chemistry. Since the total cost of chemical-based techniques can be $2,000 per kilogram of the vitrified waste, as explained in the Journal of Hazardous Materials paper, it stands to reason that even if several plasma-based steps are needed to achieve pure enough separation, there is in principle plenty of room to cut the overall costs. That is the point of our recent paper. It is also why we are excited about our plasma-based methods."</p>\r\n<p><strong>Thesis of Abe Fetterman</strong></p>\r\n<p>Fisch notes that "our original ideas grew out of the thesis of Abe Fetterman, who began by considering centrifugal mirror confinement for nuclear fusion, but then realized the potential for mass separation. Now the key role on this project is being played by Renaud, who has developed the concept substantially further."</p>\r\n<p>According to Fisch, the current developments are a variation and refinement of a plasma-based mass separation system first advanced by a private company called Archimedes Technology Group. That company, started by the late Dr. Tihiro Ohkawa, a fusion pioneer, raised private capital to advance a plasma-based centrifuge concept to clean up the legacy waste at Hanford, but ceased operation in 2006 after failing to receive federal funding.</p>\r\n<p>Now an updated understanding of the complexity of the Hanford problem, combined with an increased appreciation of new ideas, has led to renewed federal interest in waste-treatment solutions. Completion of the main waste processing operations, which was in 2002 projected for 2028, has slipped by 20 years over the last 13 years, and the total cleanup cost is now estimated by the Department of Energy to be greater than 250 billion dollars, according to the DOE Office of Inspector General, Office of Audits and Inspections. &nbsp;DOE, which has the responsibility of cleaning up the legacy nuclear waste at Hanford and other sites, conducted a Basic Research Needs Workshop on nuclear waste cleanup in July that both Fisch and Gueroult attended. The report of that workshop, which is expected to highlight new approaches to the cleanup problem, is due out this fall.</p>\r\n<p>PPPL, on Princeton University''s Forrestal Campus in Plainsboro, N.J., is devoted to creating new knowledge about the physics of plasmas &mdash; ultra-hot, charged gases &mdash; and to developing practical solutions for the creation of fusion energy. Results of PPPL research have ranged from a portable nuclear materials detector for anti-terrorist use to universally employed computer codes for analyzing and predicting the outcome of fusion experiments. The Laboratory is managed by the University for the U.S. Department of Energy&rsquo;s Office of Science, which is the largest single supporter of basic research in the physical sciences in the United States, and is working to address some of the most pressing challenges of our time. For more information, please visit <a class="ext" href="http://science.energy.gov/" rel="nofollow">science.energy.gov<span class="ext"><span class="element-invisible">(link is external)</span></span></a>.</p>', '2015-12-28 19:51:03', '2016-01-04 13:34:16'),
(25, 1, 'Offre d''emploi à l''IRT Antoine de Saint Exupéry', '5681a14f0397fnews_default.png', '', '<p><strong>&nbsp;</strong></p>\r\n<ul>\r\n<li><strong>Entreprise :</strong></li>\r\n</ul>\r\n<p>L&rsquo;IRT Antoine de Saint Exup&eacute;ry est l&rsquo;un des huit Instituts de recherche technologiques labellis&eacute;s par l&rsquo;&Eacute;tat dans le cadre des Programmes d&rsquo;Investissements d&rsquo;Avenir (PIA).</p>\r\n<p>Il associe des partenaires publics et priv&eacute;s pour d&eacute;velopper sur un m&ecirc;me site des activit&eacute;s de recherche de classe mondiale adoss&eacute;es &agrave; des plateformes technologiques et des comp&eacute;tences de haut niveau.</p>\r\n<p>Cet environnement collaboratif int&eacute;gr&eacute; permet le d&eacute;veloppement des technologies en phase avec les besoins de l&rsquo;industrie a&eacute;rospatiale et des syst&egrave;mes embarqu&eacute;s.</p>\r\n<p>Il vise &agrave; rendre l&rsquo;industrie plus comp&eacute;titive au niveau mondial en menant des recherches dans trois technologies cl&eacute;s&nbsp;: les mat&eacute;riaux multifonctionnels &agrave; haute performance, les technologies pour l&rsquo;a&eacute;ronef plus &eacute;lectrique et les syst&egrave;mes embarqu&eacute;s.</p>\r\n<p>&nbsp;</p>\r\n<p>Dans le cadre de son d&eacute;veloppement, l&rsquo;IRT ST EXUPERY recherche son&nbsp;:</p>\r\n<p>&nbsp;</p>\r\n<p>RESPONSABLE AXES EQUIPEMENT ET COMPREHENSION DES PHENOMENES PHYSIQUES F/H</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Missions :</strong></li>\r\n</ul>\r\n<p>Votre mission principale est <strong>de piloter les activit&eacute;s &eacute;quipement et compr&eacute;hension des ph&eacute;nom&egrave;nes physiques</strong>. Dans ce cadre, vous serez amen&eacute; &agrave;&nbsp;:</p>\r\n<ul>\r\n<li>Mettre en place, suivre et coordonner la strat&eacute;gie de simulation du domaine</li>\r\n<li>Relire et valider des livrables techniques fournis &agrave; l&rsquo;ANR et aux diff&eacute;rents partenaires industriels</li>\r\n<li>Encadrer, piloter, manager et challenger techniquement les ing&eacute;nieurs de recherche des axes concern&eacute;s</li>\r\n<li>Apporter le support technique aux responsables de domaines</li>\r\n<li>Garantir la qualit&eacute; de la relation avec les partenaires</li>\r\n<li>Assurer une veille technologique</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Pour mener &agrave; bien ces missions, vous devrez &eacute;galement&nbsp;:</p>\r\n<ul>\r\n<li>Garantir la coh&eacute;rence des activit&eacute;s techniques des projets avec la strat&eacute;gie de l&rsquo;IRT</li>\r\n<li>Faire le lien avec les diff&eacute;rentes directions et services</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Profil :</strong></li>\r\n</ul>\r\n<p>Vous avez une <strong>formation d&rsquo;ing&eacute;nieur ou un master </strong>dans le domaine de la physique des plasmas et<strong> 15 ans d&rsquo;exp&eacute;rience minimum en R&amp;D, R&amp;T dans le secteur a&eacute;ronautique ou automobile. </strong>Vous avez d&eacute;pos&eacute; des brevets ou r&eacute;alis&eacute; des publications et particip&eacute; &agrave; des comit&eacute;s de standardisation/normalisation.</p>\r\n<p>Vous &ecirc;tes un <strong>bon manager</strong> et vous avez une <strong>l&eacute;gitimit&eacute; technique</strong> (moteurs et thermique des &eacute;quipements &eacute;lectriques, physique des mat&eacute;riaux et plasmas, logiciels de design &eacute;lectroniques, thermiques, m&eacute;caniques, &eacute;lectromagn&eacute;tiques) et vous&nbsp;<strong>ma&icirc;trisez l&rsquo;anglais</strong>.&nbsp;</p>', '2015-12-27 19:53:35', '2015-12-27 19:59:09');

-- --------------------------------------------------------

--
-- Structure de la table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `news_category`
--

INSERT INTO `news_category` (`id`, `title`, `color`) VALUES
(1, 'news', 'primary'),
(2, 'aa', ''),
(3, 'Bbbcc', ''),
(4, 'Stage', '');

-- --------------------------------------------------------

--
-- Structure de la table `news_category_rel`
--

CREATE TABLE `news_category_rel` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `news_category_rel`
--

INSERT INTO `news_category_rel` (`news_id`, `category_id`) VALUES
(24, 1),
(25, 4),
(22, 1),
(23, 1);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Plasma ?', '', '2016-01-04 14:08:25', '2016-01-04 14:08:25'),
(2, 'Applications et Débouchés ?', '', '2016-01-04 14:08:25', '2016-01-04 14:08:25'),
(3, 'Parcours international', '', '2016-01-04 14:08:25', '2016-01-04 14:08:25'),
(4, 'Parcours local', '', '2016-01-04 14:08:25', '2016-01-04 14:08:25');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `training`
--

CREATE TABLE `training` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `training`
--

INSERT INTO `training` (`id`, `title`, `calendar_id`) VALUES
(1, 'Master KBB', 'bpn4j6n6jl02gptuusuhu7v8e0@group.calendar.google.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arthur', 'Bellal', 'bellal.arthur@gmail.com', '$2y$10$eObT6jLCQQMhVnoPSAZrauSfUql1IdyoPpK53qRufc44dtua.8UQi', 'yXw6JQqGJPx0xV3pPhfwS83EUqCWevlX0P1MXECATnkyMYTSJmtNZYYQyB1v', '2015-10-10 18:39:26', '2016-01-04 14:24:53'),
(2, 'Admin', 'Test', 'admin@test.com', '$2y$10$qrmy7TE8smfs1D3FCFKGDOeoKC0eVmVwpW8QflClvrkHFAnSOwRYi', NULL, '2016-01-04 14:21:42', '2016-01-04 14:21:42'),
(3, 'Anne', 'Onyme', 'student@test.com', '$2y$10$8AgkXCqMSb3dWAm/oFvFj.ARKsSB4B4vcX18ThT76JjksEr/ZIKHa', NULL, '2016-01-04 14:21:42', '2016-01-04 14:21:42');

-- --------------------------------------------------------

--
-- Structure de la table `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users_roles`
--

INSERT INTO `users_roles` (`id`, `title`) VALUES
(1, 'admin'),
(2, 'student'),
(3, 'redactor');

-- --------------------------------------------------------

--
-- Structure de la table `users_roles_rel`
--

CREATE TABLE `users_roles_rel` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users_roles_rel`
--

INSERT INTO `users_roles_rel` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users_training_rel`
--

CREATE TABLE `users_training_rel` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `training_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users_training_rel`
--

INSERT INTO `users_training_rel` (`user_id`, `training_id`) VALUES
(1, 1),
(3, 1),
(2, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_author_id_foreign` (`author_id`);

--
-- Index pour la table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news_category_rel`
--
ALTER TABLE `news_category_rel`
  ADD KEY `news_category_rel_news_id_foreign` (`news_id`),
  ADD KEY `news_category_rel_category_id_foreign` (`category_id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_roles_rel`
--
ALTER TABLE `users_roles_rel`
  ADD KEY `users_roles_rel_user_id_foreign` (`user_id`),
  ADD KEY `users_roles_rel_role_id_foreign` (`role_id`);

--
-- Index pour la table `users_training_rel`
--
ALTER TABLE `users_training_rel`
  ADD KEY `users_training_rel_user_id_foreign` (`user_id`),
  ADD KEY `users_training_rel_training_id_foreign` (`training_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
