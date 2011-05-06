DROP TABLE `jos_comprofiler`;
--
-- Table structure for table `jos_comprofiler`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler` (
  `id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `firstname` varchar(100) default NULL,
  `middlename` varchar(100) default NULL,
  `lastname` varchar(100) default NULL,
  `hits` int(11) NOT NULL default '0',
  `message_last_sent` datetime NOT NULL default '0000-00-00 00:00:00',
  `message_number_sent` int(11) NOT NULL default '0',
  `avatar` varchar(255) default NULL,
  `avatarapproved` tinyint(4) NOT NULL default '1',
  `approved` tinyint(4) NOT NULL default '1',
  `confirmed` tinyint(4) NOT NULL default '1',
  `lastupdatedate` datetime NOT NULL default '0000-00-00 00:00:00',
  `registeripaddr` varchar(50) NOT NULL default '',
  `cbactivation` varchar(50) NOT NULL default '',
  `banned` tinyint(4) NOT NULL default '0',
  `banneddate` datetime default NULL,
  `unbanneddate` datetime default NULL,
  `bannedby` int(11) default NULL,
  `unbannedby` int(11) default NULL,
  `bannedreason` mediumtext,
  `acceptedterms` tinyint(1) NOT NULL default '0',
  `website` varchar(255) default NULL,
  `location` varchar(255) default NULL,
  `occupation` varchar(255) default NULL,
  `interests` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `city` varchar(255) default NULL,
  `state` varchar(255) default NULL,
  `zipcode` varchar(255) default NULL,
  `country` varchar(255) default NULL,
  `phone` varchar(255) default NULL,
  `fax` varchar(255) default NULL,
  `cb_divisions` mediumtext NOT NULL,
  `cb_status` varchar(255) default NULL,
  `cb_rank` varchar(255) default NULL,
  `cb_sgsstatus` varchar(255) default NULL,
  `cb_courses` mediumtext,
  `cb_researchinterests` mediumtext,
  `cb_degree` varchar(255) default NULL,
  `cb_degreeinstitution` varchar(255) default NULL,
  `cb_degreesince` varchar(255) default NULL,
  `cb_cosupervise` tinyint(3) unsigned default NULL,
  `cb_otheremail` varchar(255) default NULL,
  `cb_currentresearch` mediumtext,
  `cb_publications` mediumtext,
  `cb_affiliations` mediumtext,
  `cb_awards` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `apprconfbanid` (`approved`,`confirmed`,`banned`,`id`),
  KEY `avatappr_apr_conf_ban_avatar` (`avatarapproved`,`approved`,`confirmed`,`banned`,`avatar`),
  KEY `lastupdatedate` (`lastupdatedate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jos_comprofiler`
--

INSERT INTO `jos_comprofiler` (`id`, `user_id`, `firstname`, `middlename`, `lastname`, `hits`, `message_last_sent`, `message_number_sent`, `avatar`, `avatarapproved`, `approved`, `confirmed`, `lastupdatedate`, `registeripaddr`, `cbactivation`, `banned`, `banneddate`, `unbanneddate`, `bannedby`, `unbannedby`, `bannedreason`, `acceptedterms`, `website`, `location`, `occupation`, `interests`, `address`, `city`, `state`, `zipcode`, `country`, `phone`, `fax`, `cb_divisions`, `cb_status`, `cb_rank`, `cb_sgsstatus`, `cb_courses`, `cb_researchinterests`, `cb_degree`, `cb_degreeinstitution`, `cb_degreesince`, `cb_cosupervise`, `cb_otheremail`, `cb_currentresearch`, `cb_publications`, `cb_affiliations`, `cb_awards`) VALUES
(62, 62, NULL, NULL, NULL, 0, '0000-00-00 00:00:00', 0, NULL, 1, 1, 1, '0000-00-00 00:00:00', '', '', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 63, 'Test', 'D.', 'Meembehr', 9, '0000-00-00 00:00:00', 0, '63_4dc0205758f5a.jpg', 1, 1, 1, '2011-05-03 16:33:43', '', '', 0, NULL, NULL, NULL, NULL, NULL, 0, 'ben.smithlea.ca/:)|*|Be Smiley', '', '', '', '1 King''s College Circle', 'Toronto', 'On', 'M6J 2T4', 'Canada', '416 346 0722', '416 999 999999999', 'Biostatistics|*|Global Health|*|Occupational and Environmental Health', 'On Leave', 'Professor', 'Emeritus', '<ul>\r\n<li>Course 14567 With a very <strong>bold</strong> name</li>\r\n<li>Course 87724 <em>Use of Italics on Web Forms</em></li>\r\n<li>Course 093450<sup>4</sup> A Course To the Power of Four</li>\r\n</ul>', '<ul>\r\n<li>Epidemiology of socioeconomic health inequalities across the life course</li>\r\n<li>work environments, labour market experiences and health</li>\r\n<li>the distributional equity of publicly funded health and health care programs in Canada</li>\r\n<li>methodologic issues in the application of secondary administrative records in population health research</li>\r\n<li>measurement validity in health interview surveys</li>\r\n<li>methods in survey sample design and the analysis of complex sample designs</li>\r\n</ul>', 'PhD', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Identification and analysis of critical trends in the New Zealand Accident Compensation Scheme. Mustard C (Principal Investigator). July 2008 – February 2009. Accident Compensation Corporation: $99,700</li>\r\n<li>Work, health, economic security and disability. Mustard C (Principal Investigator). May 2008 to September 2008. Ontario Ministry of Health and Long-Term Care: $70,000</li>\r\n<li>A randomized controlled study of targeted occupational health & safety education, training and consultation in Ontario workplaces. Hogg-Johnson S (Principal Investigator), Robson L, Cole DC, Amick BC, Smith P, Bigelow P, Tompa E, Mustard CA (Co-Investigators). July 2008 to August 2010. Ontario WSIB Research Advisory Council: $59,700</li>\r\n<li>Examining trends in the incidence and cost of workers’ compensation claims in the Ontario and British Columbia long term care sectors 1998-2007. Mustard C (Principal Investigator), Tompa E, Smith P, Koehoorn M, McLeod C (Co-Investigators). July 15, 2008 – July 15, 2010. WorkSafeBC: $327,500</li>\r\n<li>Bridging the safety gap for vulnerable young workers using employment centres. Breslin C(Principal Investigator) Wood M, Mustard CA (Co-Investigators). December 2007 – December 2008. Ontario WSIB Research Advisory Council: $60,000</li>\r\n<li>Mortality by Occupation in Canada: A ten year follow-up of a 15% sample of the 1991 census. Mustard CA (Principal Investigator), Aronson K, Amick BC (Co-Investigators). October 2007 – September 2009. Ontario WSIB Research Advisory Council: $224,300</li>\r\n<li>A systematic review of the effectiveness and cost-effectiveness of social marketing campaigns in occupational injury prevention. Cam Mustard (Principal Investigator). March 2006 – February 2007. Work Safe BC: $92,000 </li>\r\n<li>OPLES: Over-head Patient Lift Evaluation Study. Cam Mustard, Mickey Kerr (Co-Principal Investigators) Phil Bigelow, Geoff Fernie, Mardon Fraser, Peter Keir, Heather Laschinger. December 2004 - May 2007. Ontario Ministry of Health and Long Term Care: $1,028,000</li>\r\n<li>Canadian trends in socioeconomic inequality in avoidable mortality: 1985-2003. Cam Mustard (Principal Investigator), Emile Tompa, Doug Manuel, William Gnam (Co-investigators) March 2005 to June 2007. Canadian Institutes of Health Research: $255,228</li>\r\n<li>Predictors of the incidence of disability income insurance among Ontario labour force participants, 1994-2004. Cam Mustard (Principal Investigator). October 2004 to December 2006. Ontario WSIB Research Advisory Council: $161,000</li>\r\n<li>Adequacy and equity of workers’ compensation benefits. Emile Tompa (Principal Applicant), Cameron Mustard, Mieke Koehoorn (Co-applicants). November 01, 2006 – October 31, 2008. Workers’ Compensation Board of British Columbia: $163,200</li>\r\n</ul>', '<ul>\r\n<li>Smith P, Frank JW, Mustard CA. The monitoring and surveillance of the psychosocial work environment in Canada: a forgotten determinant of health. Can J Public Health 2008;99(6):475-477.</li>\r\n<li>Wilkins R, Tjepkema M, Mustard CA, Choinere R. Profile of the Canadian census mortality follow-up study. Health Reports 19(3); 2008: 25-43.</li>\r\n<li>Hurley J, Pasic D, Culyer T, Gnam W, Lavis J, Mustard CA. Parallel lines do intersect: Interactions between the workers’ compensation and provincially financed healthcare systems in Canada. Healthcare Policy 3(4) 2008: 100-112.</li>\r\n<li>Smith P, Frank J, Mustard CA, Bondy S. Do changes in job control predict differences in health status? Results from a longitudinal national survey of Canadians. Psychosomatic Medicine 2008; 70(1):85-91.</li>\r\n<li>Brown JA, Shannon HS, Mustard CA, McDonough P. Social and economic consequences of workplace injury: A population-based study of workers in British Columbia, Canada. Am J Ind Med 2007 Sept; 50(9):633-645.</li>\r\n<li>Boyle M, Georgiades K, Racine Y, Mustard CA. Neighborhood and Family Influences on Educational Attainment: Results from the Ontario Child Health Study Follow-up 2001. Child Development. 2007;78(1):168-189.</li>\r\n<li>Breslin FC, Tompa E, Mustard CA, Zhao R, Smith P, Hogg-Johnson S,. Association Between the Decline in Workers’ Compensation Claims and Workforce Composition and Job Characteristics in Ontario, Canada. Am J Pub Health. 2007;97(3):453-455.</li>\r\n<li>Breslin FC, Gnam W, Franche R-L, Mustard CA, Lin E. Depression and activity limitations: examining gender differences in the general population. Soc Psychiatry Psychiatr Epidemiol. 2006;41(8):648-655.</li>\r\n<li>Manuel DG, Kwong K, Tanuseputro P, Lim J, Mustard CA, Anderson GM, Ardal S, Alter DA, Laupacis. Effectiveness and efficiency of different guidelines on statin treatment for preventing deaths from coronary heart disease: modeling study. BMJ. 2006 Jun 17;332(7555):1419.Epub 2006 May 31 .</li>\r\n<li>Anderson G, Bronskill SE, Mustard CA, Culyer A, Alter D, Manuel DG. Both clinical epidemiology and population health perspectives can define health care in reducing health disparities. Journal of Clinical Epidemiology 2005;58:757-762. </li>\r\n</ul>', '<ul>\r\n<li>My first affilication</li>\r\n<li>My second other affiliation. International Institute for Excellence in Spelling</li>\r\n</ul>', NULL),
(64, 64, 'Roberta', '', 'Ference', 13, '2011-04-15 17:04:48', 1, '64_4dc004a18d177.jpg', 1, 1, 1, '2011-05-03 14:35:29', '142.150.126.86', '', 0, NULL, NULL, NULL, NULL, NULL, 0, 'slashdot.org', 'My Location', 'My Occupation', 'My Interests', '33 Russell St.', 'Toronto', 'ON', 'M5S 2S1', 'Canada', '416.535.8501 x4482', '', '', NULL, '', 'Full Member', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------
DROP TABLE `jos_comprofiler_field_values`;
--
-- Table structure for table `jos_comprofiler_field_values`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_field_values` (
  `fieldvalueid` int(11) NOT NULL auto_increment,
  `fieldid` int(11) NOT NULL default '0',
  `fieldtitle` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `sys` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`fieldvalueid`),
  KEY `fieldid_ordering` (`fieldid`,`ordering`),
  KEY `fieldtitle_id` (`fieldtitle`,`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `jos_comprofiler_field_values`
--

INSERT INTO `jos_comprofiler_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `ordering`, `sys`) VALUES
(65, 54, 'Biostatistics', 1, 0),
(66, 54, 'Epidemiology', 2, 0),
(67, 54, 'Global Health', 3, 0),
(68, 54, 'Interdisciplinary', 4, 0),
(69, 54, 'Occupational and Environmental Health', 5, 0),
(70, 54, 'Social and Behavioural Health Science', 6, 0),
(71, 54, 'Public Health Policy', 7, 0),
(37, 57, 'Adjunct', 1, 0),
(38, 57, 'Contract', 2, 0),
(39, 57, 'Cross Appointment', 3, 0),
(40, 57, 'Emeritus', 4, 0),
(41, 57, 'None', 5, 0),
(42, 57, 'On Leave', 6, 0),
(43, 57, 'Other', 7, 0),
(44, 57, 'Status Only', 8, 0),
(45, 57, 'Tenure Stream', 9, 0),
(46, 57, 'Tenured', 10, 0),
(47, 57, 'Terminated', 11, 0),
(76, 58, 'Professor Emeritus', 5, 0),
(75, 58, 'Lecturer', 4, 0),
(74, 58, 'Assistant Professor', 3, 0),
(73, 58, 'Associate Professor', 2, 0),
(72, 58, 'Professor', 1, 0),
(80, 59, 'Associate Member', 3, 0),
(79, 59, 'Emeritus', 2, 0),
(78, 59, 'Full Member', 1, 0),
(77, 58, 'Visiting Professor', 6, 0),
(81, 59, 'Non Member', 4, 0);

-- --------------------------------------------------------
DROP TABLE `jos_comprofiler_fields`;
--
-- Table structure for table `jos_comprofiler_fields`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_fields` (
  `fieldid` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `tablecolumns` text NOT NULL,
  `table` varchar(50) NOT NULL default '#__comprofiler',
  `title` varchar(255) NOT NULL default '',
  `description` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL default '',
  `maxlength` int(11) default NULL,
  `size` int(11) default NULL,
  `required` tinyint(4) default '0',
  `tabid` int(11) default NULL,
  `ordering` int(11) default NULL,
  `cols` int(11) default NULL,
  `rows` int(11) default NULL,
  `value` varchar(50) default NULL,
  `default` mediumtext,
  `published` tinyint(1) NOT NULL default '1',
  `registration` tinyint(1) NOT NULL default '0',
  `profile` tinyint(1) NOT NULL default '1',
  `displaytitle` tinyint(1) NOT NULL default '1',
  `readonly` tinyint(1) NOT NULL default '0',
  `searchable` tinyint(1) NOT NULL default '0',
  `calculated` tinyint(1) NOT NULL default '0',
  `sys` tinyint(4) NOT NULL default '0',
  `pluginid` int(11) NOT NULL default '0',
  `params` mediumtext,
  PRIMARY KEY  (`fieldid`),
  KEY `tabid_pub_prof_order` (`tabid`,`published`,`profile`,`ordering`),
  KEY `readonly_published_tabid` (`readonly`,`published`,`tabid`),
  KEY `registration_published_order` (`registration`,`published`,`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `jos_comprofiler_fields`
--

INSERT INTO `jos_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `profile`, `displaytitle`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `params`) VALUES
(41, 'name', 'name', '#__users', '_UE_NAME', '_UE_REGWARN_NAME', 'predefined', NULL, NULL, 0, 11, -51, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, 0, 1, 1, 1, NULL),
(26, 'onlinestatus', '', '#__comprofiler', '_UE_ONLINESTATUS', '', 'status', NULL, NULL, 0, 21, -21, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, 1, NULL),
(27, 'lastvisitDate', 'lastvisitDate', '#__users', '_UE_LASTONLINE', '', 'datetime', NULL, NULL, 0, 21, -19, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 1, 'field_display_by=2'),
(28, 'registerDate', 'registerDate', '#__users', '_UE_MEMBERSINCE', '', 'datetime', NULL, NULL, 0, 21, -20, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 1, 'field_display_by=2'),
(29, 'avatar', 'avatar,avatarapproved', '#__comprofiler', '_UE_IMAGE', '', 'image', NULL, NULL, 0, 20, 1, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 0, 0, 1, 1, 1, NULL),
(42, 'username', 'username', '#__users', '_UE_UNAME', '_UE_VALID_UNAME', 'predefined', NULL, NULL, 1, 11, -50, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 1, 1, 1, 1, NULL),
(45, 'formatname', '', '#__comprofiler', '_UE_FORMATNAME', '', 'formatname', NULL, NULL, 0, 11, -52, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 1, 0, 1, 1, 1, NULL),
(46, 'firstname', 'firstname', '#__comprofiler', 'Given Name(s)', '_UE_REGWARN_FNAME', 'predefined', 0, 0, 1, 11, -48, 0, 0, NULL, '', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'fieldMinLength=\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\npregexperror=Not a valid input'),
(47, 'middlename', 'middlename', '#__comprofiler', '_UE_YOUR_MNAME', '_UE_REGWARN_MNAME', 'predefined', NULL, NULL, 0, 11, -47, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, 1, NULL),
(48, 'lastname', 'lastname', '#__comprofiler', 'Family Name', '_UE_REGWARN_LNAME', 'predefined', 0, 0, 1, 11, -46, 0, 0, NULL, '', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'fieldMinLength=\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\npregexperror=Not a valid input'),
(49, 'lastupdatedate', 'lastupdatedate', '#__comprofiler', '_UE_LASTUPDATEDON', '', 'datetime', NULL, NULL, 0, 21, -18, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 1, 'field_display_by=2'),
(50, 'email', 'email', '#__users', '_UE_EMAIL', '_UE_REGWARN_MAIL', 'primaryemailaddress', 0, 0, 1, 11, 6, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 1, 1, 1, 'fieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\npregexperror=Not a valid input'),
(25, 'hits', 'hits', '#__comprofiler', '_UE_HITS', '_UE_HITS_DESC', 'counter', NULL, NULL, 0, 21, -22, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 1, NULL),
(51, 'password', 'password', '#__users', '_UE_PASS', '_UE_VALID_PASS', 'password', 50, NULL, 1, 11, -49, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, 1, NULL),
(52, 'params', 'params', '#__users', '_UE_USERPARAMS', '', 'userparams', 0, 0, 0, 2, 4, 0, 0, NULL, '', 1, 0, 0, 1, 0, 0, 1, 1, 1, NULL),
(24, 'connections', '', '#__comprofiler', '_UE_CONNECTION', '', 'connections', NULL, NULL, 0, 21, -17, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 1, NULL),
(23, 'forumrank', '', '#__comprofiler', '_UE_FORUM_FORUMRANKING', '', 'forumstats', NULL, NULL, 0, 21, -16, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 4, NULL),
(22, 'forumposts', '', '#__comprofiler', '_UE_FORUM_TOTALPOSTS', '', 'forumstats', NULL, NULL, 0, 21, -15, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 4, NULL),
(21, 'forumkarma', '', '#__comprofiler', '_UE_FORUM_KARMA', '', 'forumstats', NULL, NULL, 0, 21, -14, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 0, 1, 1, 4, NULL),
(20, 'forumsignature', '', '#__comprofiler', '_UE_FB_SIGNATURE', '', 'forumsettings', NULL, NULL, 0, 13, 3, 60, 5, NULL, NULL, 1, 0, 0, 1, 0, 0, 0, 1, 4, NULL),
(19, 'forumview', '', '#__comprofiler', '_UE_FB_VIEWTYPE_TITLE', '', 'forumsettings', NULL, NULL, 1, 13, 2, NULL, NULL, NULL, 'flat', 1, 0, 0, 1, 0, 0, 0, 1, 4, NULL),
(18, 'forumorder', '', '#__comprofiler', '_UE_FB_ORDERING_TITLE', '', 'forumsettings', NULL, NULL, 1, 13, 1, NULL, NULL, NULL, '0', 1, 0, 0, 1, 0, 0, 0, 1, 4, NULL),
(30, 'website', 'website', '#__comprofiler', '_UE_Website', '', 'webaddress', 250, 0, 0, 11, 7, 0, 2, NULL, '', 1, 0, 1, 0, 0, 0, 0, 0, 1, 'fieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\npregexperror=Not a valid input'),
(31, 'location', 'location', '#__comprofiler', 'Office 1', '', 'text', 150, 0, 0, 11, -28, 0, 0, NULL, '', 1, 0, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(32, 'occupation', 'occupation', '#__comprofiler', '_UE_Occupation', '', 'text', 0, 0, 0, 2, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, 0, 0, 0, 0, 1, NULL),
(33, 'interests', 'interests', '#__comprofiler', '_UE_Interests', '', 'text', 0, 0, 0, 2, 1, 0, 0, NULL, NULL, 1, 0, 1, 1, 0, 0, 0, 0, 1, NULL),
(35, 'city', 'city', '#__comprofiler', '_UE_City', '', 'text', 0, 0, 0, 11, 0, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(36, 'state', 'state', '#__comprofiler', 'Province', '', 'text', 50, 4, 0, 11, 1, 0, 0, NULL, 'ON', 0, 0, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(37, 'zipcode', 'zipcode', '#__comprofiler', 'Postal Code', '', 'text', 7, 0, 0, 11, 3, 0, 0, NULL, '', 0, 0, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(38, 'country', 'country', '#__comprofiler', '_UE_Country', '', 'text', 0, 0, 1, 11, 2, 0, 0, NULL, '', 1, 1, 0, 1, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit='),
(40, 'address', 'address', '#__comprofiler', 'Address', '', 'text', 0, 0, 0, 11, -27, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(43, 'phone', 'phone', '#__comprofiler', '_UE_PHONE', '<p>Primary phone</p>', 'text', 25, 0, 0, 11, 4, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(44, 'fax', 'fax', '#__comprofiler', '_UE_FAX', 'Primary fax number', 'text', 25, 0, 0, 11, 5, 0, 0, NULL, '', 1, 1, 0, 1, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(54, 'cb_divisions', 'cb_divisions', '#__comprofiler', 'Division', '', 'multicheckbox', 0, 0, 0, 11, -29, 1, 7, NULL, '', 1, 1, 2, 1, 0, 1, 0, 0, 1, 'field_display_style=1\nfield_display_class='),
(63, 'cb_courses', 'cb_courses', '#__comprofiler', 'Primary Teaching Responsibilities', '', 'editorta', 0, 0, 0, 32, 1, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0'),
(80, 'cb_awards', 'cb_awards', '#__comprofiler', 'Honours and Awards', 'List your honours and awards received', 'text', 0, 0, 0, 35, 1, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(57, 'cb_status', 'cb_status', '#__comprofiler', 'Status', '', 'select', 0, 0, 0, 2, 2, 0, 0, NULL, '', 1, 1, 1, 1, 0, 0, 0, 0, 1, ''),
(58, 'cb_rank', 'cb_rank', '#__comprofiler', 'University Rank', '', 'select', 0, 0, 1, 11, -30, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, ''),
(59, 'cb_sgsstatus', 'cb_sgsstatus', '#__comprofiler', 'SGS Status', '<p>Your status with the School of Graduate Studies, University of Toronto</p>', 'select', 0, 0, 1, 29, 1, 0, 0, NULL, 'Non Member', 1, 1, 1, 0, 0, 0, 0, 0, 1, ''),
(79, 'cb_affiliations', 'cb_affiliations', '#__comprofiler', 'Other Affiliations', '', 'editorta', 65535, 0, 0, 30, 1, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0'),
(64, 'cb_researchinterests', 'cb_researchinterests', '#__comprofiler', 'Research Interests', '', 'editorta', 0, 0, 0, 31, 1, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0'),
(65, 'cb_degree', 'cb_degree', '#__comprofiler', 'Degree', '', 'text', 255, 0, 0, 11, -31, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(66, 'cb_degreeinstitution', 'cb_degreeinstitution', '#__comprofiler', 'Where', '', 'text', 1000, 0, 0, 2, 5, 0, 0, NULL, '', 1, 1, 0, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(67, 'cb_degreesince', 'cb_degreesince', '#__comprofiler', 'Since', '', 'text', 50, 0, 0, 2, 6, 0, 0, NULL, '', 1, 1, 0, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(68, 'cb_cosupervise', 'cb_cosupervise', '#__comprofiler', 'Co-Supervise', '', 'checkbox', 0, 0, 0, 2, 3, 0, 0, NULL, '', 1, 1, 0, 1, 0, 0, 0, 0, 1, ''),
(75, 'cb_otheremail', 'cb_otheremail', '#__comprofiler', 'Other Emails', 'List other email addresses here.', 'text', 250, 0, 0, 2, 7, 0, 0, NULL, '', 1, 1, 0, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input'),
(77, 'cb_currentresearch', 'cb_currentresearch', '#__comprofiler', 'Current Research Projects', '', 'editorta', 65535, 0, 0, 33, 1, 0, 0, NULL, '', 1, 1, 2, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0'),
(78, 'cb_publications', 'cb_publications', '#__comprofiler', 'Representative Publications', '', 'editorta', 65535, 0, 0, 34, 1, 0, 0, NULL, '', 1, 1, 1, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0');

-- --------------------------------------------------------
DROP TABLE `jos_comprofiler_lists`;
--
-- Table structure for table `jos_comprofiler_lists`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_lists` (
  `listid` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `description` mediumtext,
  `published` tinyint(1) NOT NULL default '0',
  `default` tinyint(1) NOT NULL default '0',
  `usergroupids` varchar(255) default NULL,
  `useraccessgroupid` int(9) NOT NULL default '18',
  `sortfields` varchar(255) default NULL,
  `filterfields` mediumtext,
  `ordering` int(11) NOT NULL default '0',
  `col1title` varchar(255) default NULL,
  `col1enabled` tinyint(1) NOT NULL default '0',
  `col1fields` mediumtext,
  `col2title` varchar(255) default NULL,
  `col2enabled` tinyint(1) NOT NULL default '0',
  `col1captions` tinyint(1) NOT NULL default '0',
  `col2fields` mediumtext,
  `col2captions` tinyint(1) NOT NULL default '0',
  `col3title` varchar(255) default NULL,
  `col3enabled` tinyint(1) NOT NULL default '0',
  `col3fields` mediumtext,
  `col3captions` tinyint(1) NOT NULL default '0',
  `col4title` varchar(255) default NULL,
  `col4enabled` tinyint(1) NOT NULL default '0',
  `col4fields` mediumtext,
  `col4captions` tinyint(1) NOT NULL default '0',
  `params` mediumtext,
  PRIMARY KEY  (`listid`),
  KEY `pub_ordering` (`published`,`ordering`),
  KEY `default_published` (`default`,`published`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jos_comprofiler_lists`
--

INSERT INTO `jos_comprofiler_lists` (`listid`, `title`, `description`, `published`, `default`, `usergroupids`, `useraccessgroupid`, `sortfields`, `filterfields`, `ordering`, `col1title`, `col1enabled`, `col1fields`, `col2title`, `col2enabled`, `col1captions`, `col2fields`, `col2captions`, `col3title`, `col3enabled`, `col3fields`, `col3captions`, `col4title`, `col4enabled`, `col4fields`, `col4captions`, `params`) VALUES
(2, 'Members List', '<p>The Dalla Lana School of Public Health is the proud academic home to             approximately 300 faculty members.</p>', 1, 1, '18', -2, '`lastname` ASC, `firstname` ASC', '', 0, 'Family Name', 1, '48', 'Given Name', 1, 0, '46', 0, 'Other', 0, NULL, 0, '', 0, NULL, 0, 'list_search=1\nlist_compare_types=0\nlist_limit=\nlist_paging=1\nhotlink_protection=0');

-- --------------------------------------------------------
drop table `jos_comprofiler_members`;
--
-- Table structure for table `jos_comprofiler_members`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_members` (
  `referenceid` int(11) NOT NULL default '0',
  `memberid` int(11) NOT NULL default '0',
  `accepted` tinyint(1) NOT NULL default '1',
  `pending` tinyint(1) NOT NULL default '0',
  `membersince` date NOT NULL default '0000-00-00',
  `reason` mediumtext,
  `description` varchar(255) default NULL,
  `type` mediumtext,
  PRIMARY KEY  (`referenceid`,`memberid`),
  KEY `pamr` (`pending`,`accepted`,`memberid`,`referenceid`),
  KEY `aprm` (`accepted`,`pending`,`referenceid`,`memberid`),
  KEY `membrefid` (`memberid`,`referenceid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jos_comprofiler_members`
--


-- --------------------------------------------------------
drop table `jos_comprofiler_plugin`;
--
-- Table structure for table `jos_comprofiler_plugin`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_plugin` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `element` varchar(100) NOT NULL default '',
  `type` varchar(100) default '',
  `folder` varchar(100) default '',
  `backend_menu` varchar(255) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_folder` (`published`,`client_id`,`access`,`folder`),
  KEY `type_pub_order` (`type`,`published`,`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=505 ;

--
-- Dumping data for table `jos_comprofiler_plugin`
--

INSERT INTO `jos_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `backend_menu`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
(1, 'CB Core', 'cb.core', 'user', 'plug_cbcore', '', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(2, 'CB Connections', 'cb.connections', 'user', 'plug_cbconnections', '', 0, 5, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(3, 'Content Author', 'cb.authortab', 'user', 'plug_cbmamboauthortab', '', 0, 6, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(4, 'Forum integration', 'cb.simpleboardtab', 'user', 'plug_cbsimpleboardtab', '', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(5, 'Mamblog Blog', 'cb.mamblogtab', 'user', 'plug_cbmamblogtab', '', 0, 8, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(6, 'YaNC Newsletters', 'yanc', 'user', 'plug_yancintegration', '', 0, 9, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(7, 'Default', 'default', 'templates', 'default', '', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(8, 'WinClassic', 'winclassic', 'templates', 'winclassic', '', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(9, 'WebFX', 'webfx', 'templates', 'webfx', '', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(10, 'OSX', 'osx', 'templates', 'osx', '', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(11, 'Luna', 'luna', 'templates', 'luna', '', 0, 5, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(12, 'Dark', 'dark', 'templates', 'dark', '', 0, 6, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(13, 'Default language (English)', 'default_language', 'language', 'default_language', '', 0, -1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(14, 'CB Menu', 'cb.menu', 'user', 'plug_cbmenu', '', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', 'menuFormat=menuBar\nstatusFormat=menuList'),
(15, 'Private Message System', 'pms.mypmspro', 'user', 'plug_pms_mypmspro', '', 0, 10, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(500, 'CB MySQL Field', 'cb.mysqlfield', 'user', 'plug_cbmysqlfield', '', 0, 2, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(504, 'CB Hello World', 'helloworld', 'user', 'plug_cbhelloworld', '', 0, 1, 0, 0, 0, 0, '0000-00-00 00:00:00', 'hwPlugEnabled=1');

-- --------------------------------------------------------
drop table `jos_comprofiler_sessions`;

--
-- Table structure for table `jos_comprofiler_sessions`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_sessions` (
  `username` varchar(50) NOT NULL default '',
  `userid` int(11) unsigned NOT NULL default '0',
  `ui` tinyint(4) NOT NULL default '0',
  `incoming_ip` varchar(39) NOT NULL default '',
  `client_ip` varchar(39) NOT NULL default '',
  `session_id` varchar(33) NOT NULL default '',
  `session_data` mediumtext NOT NULL,
  `expiry_time` int(14) unsigned NOT NULL default '0',
  PRIMARY KEY  (`session_id`),
  KEY `expiry_time` (`expiry_time`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jos_comprofiler_sessions`
--


-- --------------------------------------------------------
drop table `jos_comprofiler_tabs`;
--
-- Table structure for table `jos_comprofiler_tabs`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_tabs` (
  `tabid` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `description` text,
  `ordering` int(11) NOT NULL default '0',
  `ordering_register` int(11) NOT NULL default '10',
  `width` varchar(10) NOT NULL default '.5',
  `enabled` tinyint(1) NOT NULL default '1',
  `pluginclass` varchar(255) default NULL,
  `pluginid` int(11) default NULL,
  `fields` tinyint(1) NOT NULL default '1',
  `params` mediumtext,
  `sys` tinyint(4) NOT NULL default '0',
  `displaytype` varchar(255) NOT NULL default '',
  `position` varchar(255) NOT NULL default '',
  `useraccessgroupid` int(9) NOT NULL default '-2',
  PRIMARY KEY  (`tabid`),
  KEY `enabled_position_ordering` (`enabled`,`position`,`ordering`),
  KEY `orderreg_enabled_pos_order` (`enabled`,`ordering_register`,`position`,`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `jos_comprofiler_tabs`
--

INSERT INTO `jos_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `useraccessgroupid`) VALUES
(11, '_UE_CONTACT_INFO_HEADER', '', -4, 10, '1', 1, 'getContactTab', 1, 1, '', 2, 'html', 'cb_right', -2),
(12, '_UE_AUTHORTAB', '', -3, 10, '1', 0, 'getAuthorTab', 3, 0, NULL, 1, 'tab', 'cb_tabmain', -2),
(13, '_UE_FORUMTAB', '', -2, 10, '1', 0, 'getForumTab', 4, 1, NULL, 1, 'tab', 'cb_tabmain', -2),
(14, '_UE_BLOGTAB', '', -1, 10, '1', 0, 'getBlogTab', 5, 0, NULL, 1, 'tab', 'cb_tabmain', -2),
(15, '_UE_CONNECTION', '', 99, 10, '1', 0, 'getConnectionTab', 2, 0, NULL, 1, 'tab', 'cb_tabmain', -2),
(16, '_UE_NEWSLETTER_HEADER', '_UE_NEWSLETTER_INTRODCUTION', 99, 10, '1', 0, 'getNewslettersTab', 6, 0, NULL, 1, 'tab', 'cb_tabmain', -2),
(17, '_UE_MENU', '', -10, 10, '1', 1, 'getMenuTab', 14, 0, 'firstMenuName=_UE_MENU_CB\nfirstSubMenuName=\nfirstSubMenuHref=index.php?option=com_comprofiler&task=teamCredits\nsecondSubMenuName=\nsecondSubMenuHref=', 1, 'html', 'cb_head', -2),
(18, '_UE_CONNECTIONPATHS', '', -9, 10, '1', 0, 'getConnectionPathsTab', 2, 0, NULL, 1, 'html', 'cb_head', -2),
(19, '_UE_PROFILE_PAGE_TITLE', '', -8, 10, '1', 1, 'getPageTitleTab', 1, 0, NULL, 1, 'html', 'cb_head', -2),
(20, '_UE_PORTRAIT', '', -7, 10, '1', 1, 'getPortraitTab', 1, 1, NULL, 1, 'html', 'cb_middle', -2),
(21, '_UE_USER_STATUS', '', -6, 10, '.5', 1, 'getStatusTab', 14, 1, NULL, 1, 'html', 'cb_right', -2),
(22, '_UE_PMSTAB', '', -5, 10, '.5', 0, 'getmypmsproTab', 15, 0, NULL, 1, 'html', 'cb_right', -2),
(2, '_UE_ADDITIONAL_INFO_HEADER', '', 1, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', 24),
(28, 'Hello World', 'This tab is just a basic hello world type project to demonstrate a simple CB API application. Altered by Ben', 103, 10, '.5', 1, 'gethelloworldTab', 504, 0, 'hwTabMessage=foo bar Baz!', 0, 'rounddiv', 'cb_tabmain', -2),
(29, 'Current Academic Appointments', '', 104, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', -2),
(35, 'Honours and Awards', '', 108, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', -2),
(30, 'Other Affiliations', '', 105, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', -2),
(31, 'Research Interests', '', 106, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', -2),
(32, 'Primary Teaching Responsibilities', '', 107, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', -2),
(33, 'Current Research Projects', '', 109, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', -2),
(34, 'Representative Publications', '', 110, 10, '.5', 1, NULL, NULL, 1, '', 0, 'div', 'cb_tabmain', -2);

-- --------------------------------------------------------
drop table `jos_comprofiler_userreports`;

--
-- Table structure for table `jos_comprofiler_userreports`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_userreports` (
  `reportid` int(11) NOT NULL auto_increment,
  `reporteduser` int(11) NOT NULL default '0',
  `reportedbyuser` int(11) NOT NULL default '0',
  `reportedondate` date NOT NULL default '0000-00-00',
  `reportexplaination` text NOT NULL,
  `reportedstatus` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`reportid`),
  KEY `status_user_date` (`reportedstatus`,`reporteduser`,`reportedondate`),
  KEY `reportedbyuser_ondate` (`reportedbyuser`,`reportedondate`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jos_comprofiler_userreports`
--


-- --------------------------------------------------------
drop table `jos_comprofiler_views`;

--
-- Table structure for table `jos_comprofiler_views`
--

CREATE TABLE IF NOT EXISTS `jos_comprofiler_views` (
  `viewer_id` int(11) NOT NULL default '0',
  `profile_id` int(11) NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '',
  `lastview` datetime NOT NULL default '0000-00-00 00:00:00',
  `viewscount` int(11) NOT NULL default '0',
  `vote` tinyint(3) default NULL,
  `lastvote` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`viewer_id`,`profile_id`,`lastip`),
  KEY `lastview` (`lastview`),
  KEY `profile_id_lastview` (`profile_id`,`lastview`,`viewer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jos_comprofiler_views`
--

INSERT INTO `jos_comprofiler_views` (`viewer_id`, `profile_id`, `lastip`, `lastview`, `viewscount`, `vote`, `lastvote`) VALUES
(0, 63, '142.150.126.86', '2011-05-03 09:24:15', 4, NULL, '0000-00-00 00:00:00'),
(0, 64, '142.150.126.86', '2011-05-03 09:24:32', 5, NULL, '0000-00-00 00:00:00'),
(64, 63, '142.150.126.86', '2011-04-15 17:03:47', 1, NULL, '0000-00-00 00:00:00'),
(0, 64, '174.116.190.94', '2011-04-15 17:40:53', 1, NULL, '0000-00-00 00:00:00'),
(0, 64, '74.198.65.30', '2011-04-15 18:06:12', 1, NULL, '0000-00-00 00:00:00'),
(0, 64, '174.113.251.133', '2011-04-15 23:15:31', 1, NULL, '0000-00-00 00:00:00'),
(63, 64, '142.150.126.86', '2011-04-20 18:45:09', 5, NULL, '0000-00-00 00:00:00'),
(0, 63, '142.150.126.47', '2011-04-19 19:15:41', 3, NULL, '0000-00-00 00:00:00'),
(0, 63, '128.100.113.95', '2011-05-03 11:05:11', 1, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------
