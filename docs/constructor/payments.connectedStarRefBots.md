# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 222

```tl
payments.connectedStarRefBots#98d5ea1d count:int connected_bots:Vector<ConnectedBotStarRef> users:Vector<User> = payments.ConnectedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of active affiliations |
| <mark>connected_bots</mark> | [`Vector<ConnectedBotStarRef>`](type/ConnectedBotStarRef) | The affiliations |
| <mark>users</mark> | [`Vector<User>`](type/User) | Peers mentioned in connected_bots |

---

## Type

[payments.ConnectedStarRefBots](type/payments.ConnectedStarRefBots)

---

## Example

```php
$paymentsConnectedStarRefBots = $client->payments->connectedStarRefBots(
	count : 56,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 83,
			bot_id : 7531418014906526697,
			commission_permille : 2,
			duration_months : 92,
			participants : 5826708706814605166,
			revenue : -3499773097473761857,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4115418691316773758,
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
			id : -9091738409347611947,
			access_hash : -8386323087488566553,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KVZtCOur6k8jvw5A',
					reason : 'J5b0kZxX9jyusinl',
					text : 'mTRVLSCn6uJq7BI5',
				),
			),
			bot_inline_placeholder : 'E9QVrB3LiMmYuUAb',
			lang_code : '3kJYg4z8qaKCnEHd',
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
				max_id : 54,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -4774337840329830954,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : -5579778787134158543,
			),
			bot_active_users : 78,
			bot_verification_icon : 8330612689459716147,
			send_paid_messages_stars : -3995774553147081951,
		),
	),
);
```