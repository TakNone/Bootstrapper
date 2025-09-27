# stats.megagroupStats

**Description** : *Supergroup statistics*

**Layer** : 214

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
		min_date : 99,
		max_date : 71,
	),
	members : $client->statsAbsValueAndPrev(
		current : -526103.9140625,
		previous : 1500416.626953125,
	),
	messages : $client->statsAbsValueAndPrev(
		current : 872292.4013671875,
		previous : 2095287.4716796875,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -1747704.224609375,
		previous : -346323.05859375,
	),
	posters : $client->statsAbsValueAndPrev(
		current : -1553378.193359375,
		previous : -903010.83203125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'cjrL43EuPakF1bgU',
	),
	members_graph : $client->statsGraphAsync(
		token : 'zTB75qSt3ryswh8f',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'WNxXoiTQ3YDsrOkj',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'SsvpB2iMDYWrFbq0',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'KHxObTVo2p7IRet3',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'XYneS9P7KB3Iboqz',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : '0op9VkAnlHG47IPR',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'nzGFYtLIeMOxbAlf',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 4327549428167338142,
			messages : 41,
			avg_chars : 62,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 3818239561968561812,
			deleted : 56,
			kicked : 80,
			banned : 0,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -551219945444504049,
			invitations : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7446647257194848023,
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
			id : 7880123859068146496,
			access_hash : 1196963423335909321,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1joYgZvStr6FJGe7',
					reason : 'j4ewPnAWmBSNl3zQ',
					text : 'k3PWhQHGiuJ84o5d',
				),
			),
			bot_inline_placeholder : 'peUwV36GSHzLPrfK',
			lang_code : '2c7YrMdfoBL9KXuZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 74,
			color : $client->peerColor(
				color : 99,
				background_emoji_id : 8821791134273399137,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -4890611266092571737,
			),
			bot_active_users : 37,
			bot_verification_icon : -2709426294351943645,
			send_paid_messages_stars : -8547254453069195546,
		),
	),
);
```