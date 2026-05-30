# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 222

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
	count : 68,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 62,
			bot_id : 5792587135112295006,
			commission_permille : 42,
			duration_months : 9,
			participants : 4135058534704324659,
			revenue : 6453818247825084698,
		),
	),
	users : array(
		$client->userEmpty(
			id : -721154585961666422,
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
			id : 5622218075804576226,
			access_hash : -6632350350618001160,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6iFuAKXnsfrqP5TZ',
					reason : 'uALNUgOnQ2qzSFHc',
					text : 'pCA9Bs3ZVOajJneF',
				),
			),
			bot_inline_placeholder : '35GVunkm4A89acfq',
			lang_code : '2WPDeyvCHU6wcNho',
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 36,
				background_emoji_id : -7761347473510697505,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : -8016407785185194058,
			),
			bot_active_users : 80,
			bot_verification_icon : 3099219663448221603,
			send_paid_messages_stars : -3274050941786026436,
		),
	),
);
```