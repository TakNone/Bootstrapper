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
		min_date : 70,
		max_date : 14,
	),
	members : $client->statsAbsValueAndPrev(
		current : 578986.55078125,
		previous : 75373.244140625,
	),
	messages : $client->statsAbsValueAndPrev(
		current : 961695.525390625,
		previous : 1247922.5576171875,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -1689711.943359375,
		previous : -97191.46875,
	),
	posters : $client->statsAbsValueAndPrev(
		current : -1185406.482421875,
		previous : -1932082.291015625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'd8pnDiP1RebQBUhM',
	),
	members_graph : $client->statsGraphAsync(
		token : 'qkFaEBJtW5cHwIUV',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : '2hj9UV7QcMDYGWlF',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'NUDty1GCPJ7oVl2S',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'KlzjWxdX5BoeStci',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'ERxGsJq3N5ezTQiX',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'uBCEQhyxjkrZXi5H',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'ELRZsNeSKfP8Yqkr',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 1643690136307141479,
			messages : 18,
			avg_chars : 34,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : -1653096368816829535,
			deleted : 96,
			kicked : 62,
			banned : 8,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -1765982157033613704,
			invitations : 55,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8757866166268903517,
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
			id : 6441763737816899691,
			access_hash : 4629860547230858964,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eCqKWDQJVyZ6IaY1',
					reason : 'xY4cLsD68nXSKobM',
					text : 'P2Ak38mqGuYnB0DI',
				),
			),
			bot_inline_placeholder : 'UuVc613IJB2qSWPl',
			lang_code : 'T1f2sULoPx37gwFM',
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
				max_id : 53,
			),
			color : $client->peerColor(
				color : 19,
				background_emoji_id : 4010111443207709987,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : 7705785845156252574,
			),
			bot_active_users : 80,
			bot_verification_icon : 8409757187810599365,
			send_paid_messages_stars : -150244595314883483,
		),
	),
);
```