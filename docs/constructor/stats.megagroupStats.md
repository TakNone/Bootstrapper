# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 233

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
		min_date : 22,
		max_date : 15,
	),
	members : $client->statsAbsValueAndPrev(
		current : 1337631.716796875,
		previous : 1753132.673828125,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -1345620.9150390625,
		previous : -850954.61328125,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -1753437.755859375,
		previous : 1146138.052734375,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 519188.947265625,
		previous : -195787.9619140625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'gcNEwajCxQY6S3y0',
	),
	members_graph : $client->statsGraphAsync(
		token : 'ZqSbXUOmy4JovEWg',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'rS80aeIZzLHdNtJx',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'sLjvqeBN2rFEdK0o',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'yGoZBC3qLxmaTdN0',
	),
	actions_graph : $client->statsGraphAsync(
		token : '68tOwefalkEo1mhd',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'myTnaRp1SVqU34XG',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'Z0FevWrOmHxo9dYG',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 6490697416785185477,
			messages : 68,
			avg_chars : 25,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 3253811174953749159,
			deleted : 100,
			kicked : 10,
			banned : 18,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -9213307670484481598,
			invitations : 41,
		),
	),
	users : array(
		$client->userEmpty(
			id : 9100862842579445691,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			bot_forum_sidebar : true,
			id : -4645015241117508019,
			access_hash : 1470822188241480699,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1KLXjr7lZpJs02q9',
					reason : 'couFeLV5MA4vSCwK',
					text : 'GTrjfSgIeEbHlnUY',
				),
			),
			bot_inline_placeholder : 'yN6u0Yr9dsqQ7Op2',
			lang_code : 'brY97ueAZP5oLXhE',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 16,
			),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -5560275560593357149,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : -3589887705453513247,
			),
			bot_active_users : 95,
			bot_verification_icon : -5745867729433371841,
			send_paid_messages_stars : -9211663196582431656,
			linked_community_id : -347890332999239693,
		),
	),
);
```