# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 211

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
		max_date : 61,
	),
	members : $client->statsAbsValueAndPrev(
		current : -1861720.7529296875,
		previous : 1514316.9921875,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -983767.544921875,
		previous : 1369073.4453125,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : 794360.6220703125,
		previous : -703794.0185546875,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 732289.55859375,
		previous : 1168235.923828125,
	),
	growth_graph : $client->statsGraphAsync(
		token : '5VhBJonITeAljwXM',
	),
	members_graph : $client->statsGraphAsync(
		token : 'RDSVY2do1MTzgas6',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'PMcIHwBC2QgxjpUe',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'BRSVFiu4KjfoxHWE',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'EXgWdliBwrMGHxAK',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'NjQ6fPTsMqrxwlyE',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'gcSENj3WCHaur1fy',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'JBCNs57VOgIiRoZn',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -1565454103562951281,
			messages : 75,
			avg_chars : 65,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : -8647688835589653839,
			deleted : 38,
			kicked : 36,
			banned : 36,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -2931325341865497124,
			invitations : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8733570016244337835,
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
			id : -8349944246560507870,
			access_hash : -8349503853551870892,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BcFIq86KHfYrpjAy',
					reason : 'j9ruHEIU8pW0KP7m',
					text : '6ZTybKQrwOC4qI7U',
				),
			),
			bot_inline_placeholder : 'tKhe8SivadEZYz5c',
			lang_code : 'g5yscnoSfaIh10d2',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 2,
			color : $client->peerColor(
				color : 63,
				background_emoji_id : -7006743496188232785,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : 6086678672063079506,
			),
			bot_active_users : 68,
			bot_verification_icon : 1334779759646904370,
			send_paid_messages_stars : -8206401740463449195,
		),
	),
);
```