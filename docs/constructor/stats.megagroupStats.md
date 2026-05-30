# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 225

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
		min_date : 64,
		max_date : 97,
	),
	members : $client->statsAbsValueAndPrev(
		current : -1938176.9951171875,
		previous : -73831.357421875,
	),
	messages : $client->statsAbsValueAndPrev(
		current : 1487068.0625,
		previous : 238553.470703125,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -335484.3916015625,
		previous : -171546.53125,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 824978.208984375,
		previous : -961557.5166015625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'UxCcbK6opaRrJgZP',
	),
	members_graph : $client->statsGraphAsync(
		token : 'HwEqAKt3UPJ9FvX6',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'e13Lfdkcpsj6XF02',
	),
	languages_graph : $client->statsGraphAsync(
		token : '1VYSB7xzynIbwe9v',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'dOY4EqkuUt8WLVGv',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'e0luxa2QqbB18oWL',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : '9qO0u1in7bMEPlpm',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'uNc8sxzfBZn5yr4O',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -7738412044024958485,
			messages : 65,
			avg_chars : 99,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 7483884959720148364,
			deleted : 11,
			kicked : 25,
			banned : 97,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -2759245777975444238,
			invitations : 81,
		),
	),
	users : array(
		$client->userEmpty(
			id : -879503060264944753,
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
			id : 738125622142074927,
			access_hash : -9013354519387436223,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LYNc5OixW0rdZuGD',
					reason : 'klriShvH8Wcoy629',
					text : 'lp78dWO9MSHbvAmx',
				),
			),
			bot_inline_placeholder : 'taW6xlryATEofOMu',
			lang_code : 'QUMb2GPYzJKpfLcV',
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
				max_id : 79,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 9169295343470225177,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 9068411397435756905,
			),
			bot_active_users : 77,
			bot_verification_icon : 7755205380992760948,
			send_paid_messages_stars : -5984596006521320270,
		),
	),
);
```