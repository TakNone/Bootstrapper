# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 216

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
		min_date : 1,
		max_date : 7,
	),
	members : $client->statsAbsValueAndPrev(
		current : -1655280.4697265625,
		previous : 1386264.1611328125,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -1296399.47265625,
		previous : -1131817.0126953125,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -1233658.6728515625,
		previous : -1370651.181640625,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 1494251.9443359375,
		previous : -808820.23046875,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'rC0B4LhOgxJ3VqMU',
	),
	members_graph : $client->statsGraphAsync(
		token : '94SqsBFyIW8vnErM',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'gQVpzWlLBCHjEcui',
	),
	languages_graph : $client->statsGraphAsync(
		token : '1OixWDBjlIQG86S3',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'fvhrm4KDkAHFoUec',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'sOVjZQxhWv9Hcp6w',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'hYV85O7gJEbpW0k2',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'HAeaGIjStDRuMF6L',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -3202602767955483981,
			messages : 64,
			avg_chars : 14,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 988299347444002712,
			deleted : 32,
			kicked : 99,
			banned : 37,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -3491322266393907166,
			invitations : 25,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5961238505583867753,
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
			id : -1938750973352014122,
			access_hash : 8032824597680194865,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NF3YOvrQfmheKozB',
					reason : 'RVzFnceXBAQ9sIZx',
					text : '0XVN4uYWrz9ypCSH',
				),
			),
			bot_inline_placeholder : '738FqSXiMY2uygwp',
			lang_code : 'ErO04PRopc9hjZ3J',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 26,
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 7587807663927603172,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -7289257131974964900,
			),
			bot_active_users : 41,
			bot_verification_icon : -4088931322599704992,
			send_paid_messages_stars : 7936670027144438112,
		),
	),
);
```