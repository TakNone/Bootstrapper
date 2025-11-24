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
		min_date : 69,
		max_date : 9,
	),
	members : $client->statsAbsValueAndPrev(
		current : 880643.9453125,
		previous : 1027412.171875,
	),
	messages : $client->statsAbsValueAndPrev(
		current : -1217397.5068359375,
		previous : 767196.8837890625,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : 810040.494140625,
		previous : 1738669.603515625,
	),
	posters : $client->statsAbsValueAndPrev(
		current : -1492142.28515625,
		previous : 1653095.5849609375,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'c6u8KXtW4iHbvh7N',
	),
	members_graph : $client->statsGraphAsync(
		token : 'Y41yoLNx38l7tFvW',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : '26jyEhBsfukdW1gA',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'IdpVqEQyZrDRw5C9',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'UcEMp6SD5wx9te1H',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'CzYivoRhsTlLf9XD',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'CJVBufeLZIUn8YAk',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : '9lRovxGTAy1Yjfq5',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : 915853549401432036,
			messages : 22,
			avg_chars : 77,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 3183690181578647049,
			deleted : 7,
			kicked : 11,
			banned : 72,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : 5170343340130356360,
			invitations : 71,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7633183843988310873,
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
			id : -3001217084990336294,
			access_hash : 113836822100847015,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'k42NGSBWuRab79FD',
					reason : 'wUqZR32QDoh9T7fO',
					text : 'kZyfSMmp74hVRtex',
				),
			),
			bot_inline_placeholder : 'sofw7V8zlFZSd9TQ',
			lang_code : 'GxPbkOhBVtEYei5M',
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
				max_id : 24,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -2934435929838423647,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 1314020938276341034,
			),
			bot_active_users : 40,
			bot_verification_icon : 625681647690956220,
			send_paid_messages_stars : 7261702759573764132,
		),
	),
);
```