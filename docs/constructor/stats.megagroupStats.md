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
		min_date : 93,
		max_date : 44,
	),
	members : $client->statsAbsValueAndPrev(
		current : -571044.4951171875,
		previous : -103978.796875,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -1407190.59765625,
		previous : 1400008.5361328125,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -672387.7626953125,
		previous : 970630.9228515625,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 223522.8740234375,
		previous : -698858.4130859375,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'B3nDZeEluVJqcawy',
	),
	members_graph : $client->statsGraphAsync(
		token : 'EoBtZLgYDCdymMpA',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'VxJMRUNEndgB0OwL',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'wehW2AvFTCjUfcrt',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'gbSoEdNnvtwuD3Wc',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'hntu3kU4evQNFWMS',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'KyE9eOA8M41fD20S',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'y5M0ldbkxtcpD48P',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -4927780114581695339,
			messages : 100,
			avg_chars : 45,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 4073938865814331524,
			deleted : 51,
			kicked : 53,
			banned : 14,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -9090068556050041318,
			invitations : 69,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5235205672962767621,
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
			id : -5348722240636939592,
			access_hash : -5726175872425214355,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fiorBDgGnZewz9J6',
					reason : 'DUFqALxTrRwP3pGE',
					text : 'rl7E8C2uIgnfA9yB',
				),
			),
			bot_inline_placeholder : 'RKtDsxeOkYfdNAPF',
			lang_code : 'Ijz4607dmQytXaei',
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
				max_id : 91,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 646486342982949388,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -7328041185705742334,
			),
			bot_active_users : 6,
			bot_verification_icon : -1774890985893563205,
			send_paid_messages_stars : -7601773594082679066,
		),
	),
);
```