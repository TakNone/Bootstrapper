# attachMenuBots

**Description** : *Represents a list of bot mini apps that can be launched from the attachment menu &raquo;*

**Layer** : 216

```tl
attachMenuBots#3c4301c0 hash:long bots:Vector<AttachMenuBot> users:Vector<User> = AttachMenuBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>bots</mark> | [`Vector<AttachMenuBot>`](type/AttachMenuBot) | List of bot mini apps that can be launched from the attachment menu » |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about related users/bots |

---

## Type

[AttachMenuBots](type/AttachMenuBots)

---

## Example

```php
$attachMenuBots = $client->attachMenuBots(
	hash : 0,
	bots : array(
		$client->attachMenuBot(
			inactive : true,
			has_settings : true,
			request_write_access : true,
			show_in_attach_menu : true,
			show_in_side_menu : true,
			side_menu_disclaimer_needed : true,
			bot_id : -3087277819514194561,
			short_name : 'l9I30iz1RGt4Jpbh',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : 'wAutsSDkOrFUgcNm',
					icon : $client->documentEmpty(...),
					colors : array(
						$client->attachMenuBotIconColor(...),
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -5552027438558631626,
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
			id : 4370594423207585462,
			access_hash : 1174107471817757595,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ykdcpUTM8rF6VaW4',
					reason : 'r8Ow7Qq5vRIxUFEk',
					text : 'JOXep9710dtIxrmN',
				),
			),
			bot_inline_placeholder : 'yUB8X0w1T9dqfvC5',
			lang_code : 'SOZ2zRqkH4BKrxCn',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 44,
				background_emoji_id : -4442149212140761195,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 8606683001361211335,
			),
			bot_active_users : 58,
			bot_verification_icon : 3187196208660509578,
			send_paid_messages_stars : -5393616967273940089,
		),
	),
);
```