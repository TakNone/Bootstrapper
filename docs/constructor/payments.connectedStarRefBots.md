# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 214

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
	count : 70,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 36,
			bot_id : 3780375141101726801,
			commission_permille : 30,
			duration_months : 7,
			participants : 1076700175583866415,
			revenue : 1306169010627601555,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3606404441448385914,
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
			id : 2100860088254758425,
			access_hash : -6206571134458115598,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ml7enQG0p84WBicU',
					reason : 'gX4otjIUuqYDCMPr',
					text : '1KX2EA9H3ZyFRWri',
				),
			),
			bot_inline_placeholder : 'A1UHCu6NOa2WQESf',
			lang_code : '6rCI4tOjYodeUVZ1',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 53,
			color : $client->peerColor(
				color : 54,
				background_emoji_id : -8258879277360663941,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : -8390729989294140801,
			),
			bot_active_users : 76,
			bot_verification_icon : -2456124127070928833,
			send_paid_messages_stars : 4454477514826492965,
		),
	),
);
```