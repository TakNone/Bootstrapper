# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 211

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
	count : 7,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 51,
			bot_id : 1392089681238852506,
			commission_permille : 75,
			duration_months : 44,
			participants : 2569452580213214981,
			revenue : -777164324911238589,
		),
	),
	users : array(
		$client->userEmpty(
			id : -248473699330149776,
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
			id : 3932424029191438198,
			access_hash : -5364743466346744510,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2nSumIyZlUPqFBrE',
					reason : 'gNXVW0nHZcvwfhr4',
					text : 'ItE8S67M1dAGuDxf',
				),
			),
			bot_inline_placeholder : 'rTudGELHeN7KCy0S',
			lang_code : '3kafhFAzRo0nKIMC',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 19,
			color : $client->peerColor(
				color : 50,
				background_emoji_id : -5852605069003407542,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : -2883033094317059177,
			),
			bot_active_users : 57,
			bot_verification_icon : -5197937559792467365,
			send_paid_messages_stars : -2232943918453153566,
		),
	),
);
```