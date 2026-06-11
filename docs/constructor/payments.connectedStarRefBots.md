# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 227

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
	count : 27,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 65,
			bot_id : -2126299313699977565,
			commission_permille : 78,
			duration_months : 8,
			participants : -5395276615777990322,
			revenue : 6710863139076695202,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4190494391746665067,
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
			id : 7818651298567527671,
			access_hash : 878735367111969357,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bZwsJXMRC1eNd34t',
					reason : 'Gw89qumWVp1Zsh2C',
					text : 'vbdQ8hroHOKXZk2N',
				),
			),
			bot_inline_placeholder : 'TMoI06WUF8EXb9Gz',
			lang_code : 'DXVfyhElIAp0GRko',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -5091549053425540690,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : 491145395209740219,
			),
			bot_active_users : 9,
			bot_verification_icon : -7891432776750790592,
			send_paid_messages_stars : 1393686545725545188,
		),
	),
);
```