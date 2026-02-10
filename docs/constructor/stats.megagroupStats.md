# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 222

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
		min_date : 73,
		max_date : 9,
	),
	members : $client->statsAbsValueAndPrev(
		current : -1673281.3837890625,
		previous : -1010544.9462890625,
	),
	messages : $client->statsAbsValueAndPrev(
		current : 685381.4677734375,
		previous : -1834572.4716796875,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : 2091778.087890625,
		previous : 1842435.9931640625,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 1346213.70703125,
		previous : -1634664.185546875,
	),
	growth_graph : $client->statsGraphAsync(
		token : '0JsNOGzAqtfBdLMI',
	),
	members_graph : $client->statsGraphAsync(
		token : 'u6XsPerVFzlMGd1A',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'J5NA2ojv3KtIL6b9',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'lsTeVurkNm1XUI8M',
	),
	messages_graph : $client->statsGraphAsync(
		token : '2Ikp5lHf1jcXVYia',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'ZO7c6bnyLgVNe8oM',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'VxkpbPYiljTn4WFg',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'AF974tS0QPYBU6nz',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 6489125351831917203,
			messages : 41,
			avg_chars : 76,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : -104915978546257614,
			deleted : 69,
			kicked : 76,
			banned : 19,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -3843697805159660716,
			invitations : 33,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6155611794015510241,
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
			id : -5509754382702005093,
			access_hash : 9216362776945352491,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bglARGSyQrP2BHsM',
					reason : 'EVu6yNSRxOlLYjwd',
					text : '90ARcpnIW7HeDoMF',
				),
			),
			bot_inline_placeholder : 'MmwXkZKq0t1BEHlR',
			lang_code : 'mCn20a4pBjOh7bHz',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 5295491556992780415,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : -8233651461085406990,
			),
			bot_active_users : 32,
			bot_verification_icon : 389697301989543609,
			send_paid_messages_stars : 7914808200211315894,
		),
	),
);
```