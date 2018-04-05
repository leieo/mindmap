-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 05 Avril 2018 à 17:48
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mindmap`
--

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

CREATE TABLE `element` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `user_id`, `title`, `created_at`) VALUES
(6, 65, 'test', '2018-04-02 15:51:11'),
(7, 65, 'test', '2018-04-02 15:52:30'),
(8, 65, 'test', '2018-04-02 15:53:24'),
(9, 65, 'vfzs', '2018-04-02 16:26:28'),
(10, 65, 'nouveau projet', '2018-04-02 16:33:01'),
(11, 65, 'nouvel essai', '2018-04-02 16:35:33'),
(12, 65, 'encore un test', '2018-04-02 16:36:09'),
(13, 65, 'youpi', '2018-04-02 16:40:54'),
(14, 65, 'test 1', '2018-04-04 08:08:39'),
(15, 65, 'test 2', '2018-04-04 08:15:34'),
(16, 72, 'test 3', '2018-04-04 08:15:59'),
(17, 65, 'test4', '2018-04-04 08:19:08'),
(18, 65, 'test 5', '2018-04-04 08:24:14'),
(19, 65, 'test 6', '2018-04-04 08:25:46'),
(20, 65, 'test 7', '2018-04-04 08:45:15'),
(21, 65, 'test 1', '2018-04-04 09:00:43'),
(22, 65, 'test 1', '2018-04-04 09:01:08'),
(23, 65, 'test ', '2018-04-04 09:08:12'),
(24, 65, 'Mon projet super génial ', '2018-04-04 10:13:11'),
(25, 72, 'hello', '2018-04-05 14:57:21'),
(26, 72, 'hello', '2018-04-05 15:14:06'),
(27, 72, 'hello', '2018-04-05 15:14:09');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(65, 'leieo', 'leieo@lei.eo', '06d79a27b3fe327f7fd598f2f9093646c0e41abb', '2018-03-26 15:26:46'),
(66, 'simplonco', 'simplonco@simplon.co', '45e8155fa36ee3e00012513450ff46e142c08874', '2018-03-26 15:27:23'),
(67, 'laura', 'laura@lau.ra', '94745df4bd94de756ea5436584fec066fc7898d5', '2018-03-27 12:35:05'),
(68, 'johanna', 'johanna@johan.na', 'ae0e073d93536a06c697b55dfc51bcc043b16a67', '2018-03-27 12:42:26'),
(69, 'victor', 'victor@vict.or', '88fa846e5f8aa198848be76e1abdcb7d7a42d292', '2018-03-27 12:46:10'),
(70, 'new', 'new@n.ew', 'c2a6b03f190dfb2b4aa91f8af8d477a9bc3401dc', '2018-03-28 11:58:38'),
(71, 'mvc', 'mvc@m.vc', '484c7e7e748dd6c6f6fbf66b8ffa8e7c6c3a403a', '2018-03-28 11:59:48'),
(72, 'leila', 'leila@lei.la', '2ae0dd78e94b7ab461bfd91e25d042b174717c6c', '2018-03-28 13:26:48'),
(73, 'yes', 'yes@y.es', 'fb360f9c09ac8c5edb2f18be5de4e80ea4c430d0', '2018-03-28 13:41:55'),
(74, 'erqg', 'gra@grqezg.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '2018-03-28 15:13:14'),
(75, 'dayend', 'dayend@daye.nd', 'afc194a3abe669a8dce2fd9c34877166431922a1', '2018-03-28 16:24:56'),
(76, 'zaina', 'zaina@zai.na', 'ef8dd720258f3174d44403a9b25205420929cf81', '2018-03-30 10:35:43'),
(77, 'lucas', 'lucas@luc.as', '10c25665e49274c39b8e8f7ad6e2a3d0b0bc5052', '2018-03-30 10:38:45'),
(78, 'romain', 'romain@roma.in', 'b8aabb4b95c817d9df69b6be95b2b94d6b1efe17', '2018-03-30 11:51:46'),
(80, 'anna', 'anna@an.na', '7a914bfa4a05c4a9c2906e92648859fc7c2049a7', '2018-04-04 10:35:27'),
(81, 'margot', 'margot@marg.ot', '593923c30b64de6317edf86f0044d145ada2d269', '2018-04-04 10:38:33'),
(101, 'you', 'you@y.ou', '8af56de68279cb6f5ed022f31af18b9fcdcc2e92', '2018-04-04 14:47:43'),
(105, 'ali', 'ali@a.li', 'b42a6d93d796915222f6ffb2ffdd6137d93c1cdb', '2018-04-04 15:37:18'),
(106, 'aurélia', 'aurelia@aurel.ia', '3cd1217f22d52905d2cd7013dcce7905737043da', '2018-04-04 15:40:16'),
(107, 'paul', 'paul@pa.ul', 'a027184a55211cd23e3f3094f1fdc728df5e0500', '2018-04-05 13:43:10');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id`),
  ADD KEY `element_by` (`user_id`) USING BTREE;

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_by` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `element`
--
ALTER TABLE `element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `element`
--
ALTER TABLE `element`
  ADD CONSTRAINT `element_by` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_by` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
