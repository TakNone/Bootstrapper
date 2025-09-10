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
	count : 22,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 30,
			bot_id : -9018310744660738479,
			commission_permille : 89,
			duration_months : 33,
			participants : 2641389704643595847,
			revenue : -4753646778157453971,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2171392135870463740,
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
			id : 6590426941719079346,
			access_hash : 5766073313023235856,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pbNF2zsJTO7W6YRe',
					reason : 'Jb6Y1auEWGH3oywQ',
					text : 'BIp5FL86J0CreqUc',
				),
			),
			bot_inline_placeholder : 'Qc5YskodKza4elA7',
			lang_code : 'sF5EKOTB3rJR1nl0',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 24,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -7841263351088730670,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : -5444605614125317545,
			),
			bot_active_users : 26,
			bot_verification_icon : -7964530378362393401,
			send_paid_messages_stars : -261388550254090458,
		),
	),
);
```