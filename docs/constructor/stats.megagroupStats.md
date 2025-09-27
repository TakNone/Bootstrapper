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
		min_date : 79,
		max_date : 59,
	),
	members : $client->statsAbsValueAndPrev(
		current : 1789677.822265625,
		previous : -605889.8134765625,
	),
	messages : $client->statsAbsValueAndPrev(
		current : 696852.4912109375,
		previous : -860283.81640625,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : 835628.08984375,
		previous : 1293176.44140625,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 1333337.2607421875,
		previous : -1453099.3251953125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'm3T0ck2LsJpeaZ1d',
	),
	members_graph : $client->statsGraphAsync(
		token : 'rClc6XTMyE3U5Sg1',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : '8Pqha0DMeWTwBjIZ',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'SBhZdX2zcxPKmaDC',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'lbDa5OsWyiNh6w9n',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'PcQ3Owa2bC7KLlXJ',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'q7I6gL3ctJFuyo4O',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'qjaRcOs8L2kmdZJW',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -7713119538120706868,
			messages : 29,
			avg_chars : 4,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : -3338740436461050640,
			deleted : 16,
			kicked : 57,
			banned : 41,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : 5313158037134500846,
			invitations : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2591893243839699776,
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
			id : 6499541252235912894,
			access_hash : 2400312855956781032,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oAF8rMZHNs3RcQdE',
					reason : 'Ugp39H6FucLqOAIj',
					text : 'jk7fosLYyHO53xtn',
				),
			),
			bot_inline_placeholder : 'ZezgI5CXirN7lDyj',
			lang_code : 'AMLFJVtDlmPK0dR2',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 6,
			color : $client->peerColor(
				color : 86,
				background_emoji_id : 1676581323639559689,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : -6539139046948111504,
			),
			bot_active_users : 52,
			bot_verification_icon : 8771400607411826196,
			send_paid_messages_stars : -5987918711498490724,
		),
	),
);
```