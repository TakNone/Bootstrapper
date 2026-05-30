# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 225

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
	count : 94,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 42,
			bot_id : -4133608473003030932,
			commission_permille : 35,
			duration_months : 12,
			participants : -4076128214221674751,
			revenue : -5248179179328378180,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1803468266560421027,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : 4160576243575954514,
			access_hash : -5178540639750998214,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZEP5BXgdJ3uMyrpe',
					reason : 'YG4g17uLc8KsPkyF',
					text : 'vMTG3ZQNP0265Dpg',
				),
			),
			bot_inline_placeholder : 'ap0mJEs59Bgxhuvw',
			lang_code : 'mXAQc3FbT1OZpovK',
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
				max_id : 8,
			),
			color : $client->peerColor(
				color : 65,
				background_emoji_id : 7628447629078950048,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 2535952433585973929,
			),
			bot_active_users : 48,
			bot_verification_icon : 7270186660567845494,
			send_paid_messages_stars : 1071014268299511356,
		),
	),
);
```