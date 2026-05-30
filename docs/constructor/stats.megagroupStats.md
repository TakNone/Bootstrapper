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
		min_date : 98,
		max_date : 88,
	),
	members : $client->statsAbsValueAndPrev(
		current : 1810494.86328125,
		previous : 1655327.7294921875,
	),
	messages : $client->statsAbsValueAndPrev(
		current : 795245.916015625,
		previous : -693721.1875,
	),
	viewers : $client->statsAbsValueAndPrev(
		current : -1771205.01171875,
		previous : -1430099.8125,
	),
	posters : $client->statsAbsValueAndPrev(
		current : 1710699.5205078125,
		previous : -717389.5908203125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'qYcS7LbxZVH3F16i',
	),
	members_graph : $client->statsGraphAsync(
		token : 'IFMTmUZ1zOWKJRit',
	),
	new_members_by_source_graph : $client->statsGraphAsync(
		token : 'RDIajF0lNT1ZvE53',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'lync2hOD4mfTW9Ku',
	),
	messages_graph : $client->statsGraphAsync(
		token : 'RLtjvh0zuImT91nl',
	),
	actions_graph : $client->statsGraphAsync(
		token : 'IU81ObdNprYKowDR',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'EJNAmrpRTg2tjbLS',
	),
	weekdays_graph : $client->statsGraphAsync(
		token : 'lTwihuI4DFEs2VRW',
	),
	top_posters : array(
		$client->statsGroupTopPoster(
			user_id : -8043047035535841467,
			messages : 13,
			avg_chars : 98,
		),
	),
	top_admins : array(
		$client->statsGroupTopAdmin(
			user_id : 5752387885395077853,
			deleted : 5,
			kicked : 21,
			banned : 26,
		),
	),
	top_inviters : array(
		$client->statsGroupTopInviter(
			user_id : -5823778513218436154,
			invitations : 65,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2547166937735207949,
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
			id : 3453653832072227122,
			access_hash : -6053185259178314323,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4doJiez1RfOmFXDn',
					reason : 'O1MIWyHTXzqtCVhu',
					text : 'V1eQijMOLGKWchpJ',
				),
			),
			bot_inline_placeholder : 'Kyn1Po8sUS2depEN',
			lang_code : '4PzG9nLRfEu8Dq1Y',
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
				max_id : 23,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -3443427222918356225,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : -462071579441766839,
			),
			bot_active_users : 71,
			bot_verification_icon : -8869890314958315962,
			send_paid_messages_stars : -8361791073190936242,
		),
	),
);
```