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
		min_date : 29,
		max_date : 2,
	),
	members : $client->statsAbsValueAndPrev(
		current : -810755.3720703125,
		previous : 1290850.2451171875,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -1805237.9013671875,
		previous : 1183239.8046875,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : 309303.1103515625,
		previous : 691217.826171875,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 291771.1123046875,
		previous : -1130600.2802734375,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'cdQ7AKeRf5120NwO',
	),
	members_graph : $client->statsGraphAsync(
		token : 'pfOmov6DAehsTnWF',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'PkRrAVB4D6dIw0oZ',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'EkLGlWYgfNo105i9',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'ljWUANHcJ5qBZ0dI',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'Mg6tjLVdYqwIUpry',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : '5WdOUDxJA8seik02',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'vs56toqrAu02ljB3',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 7538265245015668981,
			messages : 83,
			avg_chars : 77,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : -7247840071695368522,
			deleted : 7,
			kicked : 45,
			banned : 57,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : 6615236650065509161,
			invitations : 4,
		),
	),
	users : array(
		$client->userEmpty(
			id : -582974420923634623,
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
			id : -621976420071106190,
			access_hash : -868696367550759731,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'aUfb0rHDgzlwm5RP',
					reason : '0M742zDF8naRTGLK',
					text : '0mbNOWlhTxsBLZ6k',
				),
			),
			bot_inline_placeholder : 's0SAhwKLHcb9Mk12',
			lang_code : 'RdwEHP8Iegpm5v9l',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 88,
			color : $client->peerColor(
				color : 79,
				background_emoji_id : -7487579038538111826,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : 3707994263159200081,
			),
			bot_active_users : 100,
			bot_verification_icon : -751258835926619470,
			send_paid_messages_stars : 6739216317865353981,
		),
	),
);
```