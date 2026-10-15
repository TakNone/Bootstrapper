# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 229

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
		min_date : 83,
		max_date : 21,
	),
	members : $client->statsAbsValueAndPrev(
		current : -1972551.87890625,
		previous : -987389.7021484375,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -753503.0830078125,
		previous : -671791.4150390625,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : 1028929.4482421875,
		previous : -365114.3642578125,
	),
	posters : $client->statsAbsValueAndPrev(
		current : -874577.9501953125,
		previous : 1049682.1396484375,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'ZjnC7yPb5KYWdXvG',
	),
	members_graph : $client->statsGraphAsync(
		token : 'hYy83uvDpkHiEG29',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'Nq2A1OWLbUloCDhz',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'g4XDwval9BjSb31i',
	),
	messages_graph : $client->statsGraphAsync(
		token : '2ZVfUb89lkeoBHKP',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'LAZQG9WCRnSkHwjl',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'ZADzCe4LMX5dSpwF',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'bPm76I1BXYofRQeO',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 8145040049675471706,
			messages : 66,
			avg_chars : 37,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : -204349664904894265,
			deleted : 71,
			kicked : 11,
			banned : 41,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : 6799575903384475959,
			invitations : 87,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5994078010117136736,
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
			id : 2900202323641149979,
			access_hash : -8766012030325381906,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VmK1xlvYIc0kfPL8',
					reason : 'Frd0RelpsXZAk1Wh',
					text : 'IwrcR42TMSnhqvJg',
				),
			),
			bot_inline_placeholder : 'c59UhE1BbMDmPI3Z',
			lang_code : 'MrgdJ25A9ojVNpQe',
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
				max_id : 76,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -439252109307226649,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : -6041497863425796401,
			),
			bot_active_users : 51,
			bot_verification_icon : 2479790403054893731,
			send_paid_messages_stars : -5225897367941516731,
			linked_community_id : 1609375525032303760,
		),
	),
);
```