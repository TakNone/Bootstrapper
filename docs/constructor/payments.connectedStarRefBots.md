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
	count : 65,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 64,
			bot_id : 6848525868286675792,
			commission_permille : 44,
			duration_months : 64,
			participants : -7904454635698520887,
			revenue : 1024813957231758804,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4638018363087711316,
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
			id : -5168825282484463648,
			access_hash : -3314494228723754388,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hXcDNmQHObUf97uq',
					reason : 'hO3erSV1gwDBT8HL',
					text : '3yDMu6NCRpEJQfPh',
				),
			),
			bot_inline_placeholder : '2OiLHyYmf9JnwTZl',
			lang_code : 'z7sbLVafQDW0Mn12',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 44,
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -6211361304613653521,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : -8746812084356865574,
			),
			bot_active_users : 7,
			bot_verification_icon : -1446962889086429202,
			send_paid_messages_stars : 1307547506663607253,
		),
	),
);
```