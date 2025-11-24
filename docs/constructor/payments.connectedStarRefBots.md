# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 218

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
	count : 8,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 17,
			bot_id : -6563637757098165606,
			commission_permille : 91,
			duration_months : 21,
			participants : 5240866671022223951,
			revenue : 4231365614654755482,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7030047683519756775,
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
			id : 7657072657376896171,
			access_hash : -2031763270828542662,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gnDvxLkKJQM31iza',
					reason : 'hNSsi5bLvEBoxazT',
					text : 'ZcV8XD9GMrgq26UO',
				),
			),
			bot_inline_placeholder : 'L75fpD0hqBOe4WYS',
			lang_code : 'rNgXRsH0Q5wnjELG',
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
				max_id : 33,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 716298157630597806,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -1006406331426654214,
			),
			bot_active_users : 59,
			bot_verification_icon : 4115040529778181949,
			send_paid_messages_stars : 2500991050129437781,
		),
	),
);
```