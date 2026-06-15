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
	count : 58,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 9,
			bot_id : -9197109280766750149,
			commission_permille : 29,
			duration_months : 20,
			participants : -8957853869075615550,
			revenue : -2106590831705395697,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5815180978433337910,
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
			id : -3326450766994766881,
			access_hash : 209615216656565393,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fuZFr3own6ibeYaG',
					reason : 'P3ycenGzYZXOCgJs',
					text : 'kzWogE0DTCuZnarU',
				),
			),
			bot_inline_placeholder : '0hXUrJOi5njalF9m',
			lang_code : 'c6HrdwJKuV7xvUyE',
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
				max_id : 72,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 8463728682306856121,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 6615700507677708253,
			),
			bot_active_users : 66,
			bot_verification_icon : -6224600337909516227,
			send_paid_messages_stars : 8952201904750372864,
		),
	),
);
```