# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 216

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
	count : 13,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 90,
			bot_id : -8907007944261624682,
			commission_permille : 30,
			duration_months : 88,
			participants : 841140225213838697,
			revenue : 2736850783763382920,
		),
	),
	users : array(
		$client->userEmpty(
			id : 920557130626354986,
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
			id : 8615729344719655971,
			access_hash : 8577957132060396813,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'puDUIToykFRdZBKi',
					reason : 'rwj5BiyQbKUVJxLR',
					text : 'ARchPjaCenbm7S1u',
				),
			),
			bot_inline_placeholder : 'bZz4GPBhQx5qlkEp',
			lang_code : 'r2YafZdlFMiEb4Lz',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 45,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : 8668153952452811870,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 7789055408869008262,
			),
			bot_active_users : 30,
			bot_verification_icon : -2998861780723709176,
			send_paid_messages_stars : -3086819124882510801,
		),
	),
);
```