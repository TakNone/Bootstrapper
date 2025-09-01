# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 214

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
		min_date : 35,
		max_date : 26,
	),
	members : $client->statsAbsValueAndPrev(
		current : -128707.654296875,
		previous : -198197.1259765625,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -629002.1552734375,
		previous : 214171.701171875,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -357148.4560546875,
		previous : -1654868.4501953125,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 601695.74609375,
		previous : -172976.1923828125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'aT5CbneEmKB937Gg',
	),
	members_graph : $client->statsGraphAsync(
		token : 'fQvLd7IpqAWCEu9i',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'jp3FYdc6nBt7wJLy',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'kpSxhZ6PbY5N3gFG',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'QdYZcJP7VqwELOuK',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'K6a23N0Ab1rcfy4s',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'FoMeApyvECX305S8',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'Bxzbr130LRtT9uHo',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 3155948860527062356,
			messages : 86,
			avg_chars : 92,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 2701272137123251962,
			deleted : 70,
			kicked : 68,
			banned : 25,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -4545454066397787955,
			invitations : 8,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8376150968396252996,
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
			id : -1996876372116595417,
			access_hash : -4611312649707374946,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7Pp4ry0zjxU9bdGH',
					reason : 'Ugtzrf4GYwme2ZLu',
					text : '3xNh4oI1XbJP9M6g',
				),
			),
			bot_inline_placeholder : 'nCvAiX3HMRcsV1O7',
			lang_code : '5j38KJezmIE0tByG',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 72,
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 6756714693910291812,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : 6771353533247761763,
			),
			bot_active_users : 60,
			bot_verification_icon : 1036938170825391791,
			send_paid_messages_stars : -3403730221525053091,
		),
	),
);
```