# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 218

```tl
stats.megagroupStats#ef7ff916 period:StatsDateRangeDays members:StatsAbsValueAndPrev messages:StatsAbsValueAndPrev viewers:StatsAbsValueAndPrev posters:StatsAbsValueAndPrev growth_graph:StatsGraph members_graph:StatsGraph new_members_by_source_graph:StatsGraph languages_graph:StatsGraph messages_graph:StatsGraph actions_graph:StatsGraph top_hours_graph:StatsGraph weekdays_graph:StatsGraph top_posters:Vector<StatsGroupTopPoster> top_admins:Vector<StatsGroupTopAdmin> top_inviters:Vector<StatsGroupTopInviter> users:Vector<User> = stats.MegagroupStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>period</mark> | [`StatsDateRangeDays`](type/StatsDateRangeDays) | Period in consideration |
| <mark>members</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | Member count change for period in consideration |
| <mark>messages</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | Message number change for period in consideration |
| <mark>viewers</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | Number of users that viewed messages, for range in consideration |
| <mark>posters</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | Number of users that posted messages, for range in consideration |
| <mark>growth_graph</mark> | [`StatsGraph`](type/StatsGraph) | Supergroup growth graph (absolute subscriber count) |
| <mark>members_graph</mark> | [`StatsGraph`](type/StatsGraph) | Members growth (relative subscriber count) |
| <mark>new_members_by_source_graph</mark> | [`StatsGraph`](type/StatsGraph) | New members by source graph |
| <mark>languages_graph</mark> | [`StatsGraph`](type/StatsGraph) | Subscriber language graph (pie chart) |
| <mark>messages_graph</mark> | [`StatsGraph`](type/StatsGraph) | Message activity graph (stacked bar graph, message type) |
| <mark>actions_graph</mark> | [`StatsGraph`](type/StatsGraph) | Group activity graph (deleted, modified messages, blocked users) |
| <mark>top_hours_graph</mark> | [`StatsGraph`](type/StatsGraph) | Activity per hour graph (absolute) |
| <mark>weekdays_graph</mark> | [`StatsGraph`](type/StatsGraph) | Activity per day of week graph (absolute) |
| <mark>top_posters</mark> | [`Vector<StatsGroupTopPoster>`](type/StatsGroupTopPoster) | Info about most active group members |
| <mark>top_admins</mark> | [`Vector<StatsGroupTopAdmin>`](type/StatsGroupTopAdmin) | Info about most active group admins |
| <mark>top_inviters</mark> | [`Vector<StatsGroupTopInviter>`](type/StatsGroupTopInviter) | Info about most active group inviters |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users mentioned in statistics |

---

## Type

[stats.MegagroupStats](type/stats.MegagroupStats)

---

## Example

```php
$statsMegagroupStats = $client->stats->megagroupStats(
	period : $client->statsDateRangeDays(
		min_date : 14,
		max_date : 75,
	),
	members : $client->statsAbsValueAndPrev(
		current : -1485383.533203125,
		previous : 1185681.3818359375,
	),
	messages : $client->statsAbsValueAndPrev(
		current : 523626.7509765625,
		previous : -1616842.6162109375,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -240764.326171875,
		previous : -724296,
	),
	posters : $client->statsAbsValueAndPrev(
		current : -1352158.0908203125,
		previous : -286345.86328125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'imy51X3nAb4okKFT',
	),
	members_graph : $client->statsGraphAsync(
		token : 'Z1IjHg3toKYOLRl5',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'OcRFmXTjz0M9uCEb',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'xldJyih6YPr0Lszf',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'I1zjv8XO3CMbQDrc',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'QwdFSIuhBY4sv53U',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'u0rEcGBTI5YoV9jg',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'q6cfiFjQP5OWRmBC',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -6759016757875633732,
			messages : 44,
			avg_chars : 71,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 8524834501184259520,
			deleted : 42,
			kicked : 90,
			banned : 3,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -8191929911237192186,
			invitations : 71,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7111704094015615866,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 8287219550501131223,
			access_hash : -8948951787540500062,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 's4HXZUxY8Q1zD6gm',
					reason : 'PxELhInu2TeUsrHw',
					text : 'fND7dkUAQJpXlF1W',
				),
			),
			bot_inline_placeholder : 'PN1eQwlH4SxJuAGT',
			lang_code : 'Vs4IRXig5EWOofAN',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 43,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 1279429039178800785,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 8130524746406523921,
			),
			bot_active_users : 73,
			bot_verification_icon : 813495003011539109,
			send_paid_messages_stars : 4552206174570583594,
		),
	),
);
```