# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 227

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
		min_date : 57,
		max_date : 18,
	),
	members : $client->statsAbsValueAndPrev(
		current : 219127.0009765625,
		previous : -1829439.1083984375,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -1251778.6533203125,
		previous : -327263.5234375,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -2053524.2080078125,
		previous : 1737996.94921875,
	),
	posters : $client->statsAbsValueAndPrev(
		current : -1948700.53515625,
		previous : 165444.4619140625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'X9ZhaeGk2nBMExWJ',
	),
	members_graph : $client->statsGraphAsync(
		token : 'LwARiYpJXP3x2e9q',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'en60UgFMQ1ctkPH3',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'qz8DOuSd1v9BUCVe',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'mfDVXhU87BxyWbFH',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'Yz6DGuhCX8Ac5EyM',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'sRzYZjJ1rwP3ynUq',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : '2b3C8BuIYzS6FrMQ',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -1017883779231956665,
			messages : 1,
			avg_chars : 19,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : -8567851740585647562,
			deleted : 89,
			kicked : 21,
			banned : 17,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : 8901846684166200824,
			invitations : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1321885402482368125,
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
			id : -4001841036971004500,
			access_hash : -7553682812934189376,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8T2z3PRLKXW7NGxt',
					reason : '4z9qjn6Tv0dXBkxf',
					text : 'lyEs7iugvQP5cOXh',
				),
			),
			bot_inline_placeholder : 'ZxbgDJBrim8R7zK1',
			lang_code : 'Qx1epK2CWIuw4DvG',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -2555648195262341469,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 7345034647928635277,
			),
			bot_active_users : 35,
			bot_verification_icon : -6641322236489087004,
			send_paid_messages_stars : 8263950978043317324,
		),
	),
);
```