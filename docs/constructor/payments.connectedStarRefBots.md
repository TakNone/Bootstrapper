# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 229

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
			date : 87,
			bot_id : -7594315394765252469,
			commission_permille : 25,
			duration_months : 95,
			participants : 4633856517071704649,
			revenue : 5054460056920189343,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5868864109005035725,
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
			bot_guard : true,
			id : -4974244710011624103,
			access_hash : 4527668338268187578,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5tzJcQB0vr2RZhUC',
					reason : 'DPciE1ktnVGBQUu4',
					text : 'wpfFxZPdiVgklURL',
				),
			),
			bot_inline_placeholder : 'O5XFHDznT8QtqUVB',
			lang_code : 'y8WGkVh0wS3Zc9mq',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 79,
				background_emoji_id : 5851308515706844054,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : -1454303509067530744,
			),
			bot_active_users : 3,
			bot_verification_icon : 4243895088969393714,
			send_paid_messages_stars : -7574873021837223908,
			linked_community_id : -6988297267197859149,
		),
	),
);
```