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
	count : 66,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 14,
			bot_id : 8001288605104513871,
			commission_permille : 55,
			duration_months : 2,
			participants : -1360257803126921022,
			revenue : -6698045514707070240,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6516232362471499889,
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
			id : 5636225431200710367,
			access_hash : -1882133518220319440,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TFhDZQ7jqASnlgaX',
					reason : 'PBefDAvHiRVa3xqT',
					text : 'Zb7K8rXETzWes3q0',
				),
			),
			bot_inline_placeholder : 'DFNcmZGeMjVPSRdE',
			lang_code : 'W5wEIOX7Ljyi0d91',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 64,
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -7767523080493995743,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : 4845586201526573330,
			),
			bot_active_users : 14,
			bot_verification_icon : 4820148273648311130,
			send_paid_messages_stars : -2679453929127649341,
		),
	),
);
```