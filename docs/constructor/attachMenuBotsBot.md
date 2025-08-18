# attachMenuBotsBot

**Description** : *Represents a bot mini app that can be launched from the attachment menu &raquo;*

**Layer** : 211

```tl
attachMenuBotsBot#93bf667f bot:AttachMenuBot users:Vector<User> = AttachMenuBotsBot;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`AttachMenuBot`](type/AttachMenuBot) | Represents a bot mini app that can be launched from the attachment menu » |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about related users and bots |

---

## Type

[AttachMenuBotsBot](type/AttachMenuBotsBot)

---

## Example

```php
$attachMenuBotsBot = $client->attachMenuBotsBot(
	bot : $client->attachMenuBot(
		inactive : true,
		has_settings : true,
		request_write_access : true,
		show_in_attach_menu : true,
		show_in_side_menu : true,
		side_menu_disclaimer_needed : true,
		bot_id : -99101162709578702,
		short_name : 'BR3H7Cd90cZOqNnU',
		peer_types : array(
			$client->attachMenuPeerTypeSameBotPM(),
			$client->attachMenuPeerTypeBotPM(),
			$client->attachMenuPeerTypePM(),
			$client->attachMenuPeerTypeChat(),
			$client->attachMenuPeerTypeBroadcast(),
		),
		icons : array(
			$client->attachMenuBotIcon(
				name : 'aPgfGhbT1vNcwps0',
				icon : $client->documentEmpty(...),
				colors : array(
					$client->attachMenuBotIconColor(...),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 2729455687265266514,
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
			id : -1873286623491146518,
			access_hash : -8254361835374415364,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Mcyqw14AvxfYujBp',
					reason : '7pCyKjuHxMUtEwv2',
					text : 'tVDAk8wP1hoERalM',
				),
			),
			bot_inline_placeholder : 'nz5ascLv6oyiFfgH',
			lang_code : '2J8EoMebiwSjVa5m',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 50,
			color : $client->peerColor(
				color : 93,
				background_emoji_id : 3385395389891645413,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : -6192630196270130455,
			),
			bot_active_users : 91,
			bot_verification_icon : 4086950104599908101,
			send_paid_messages_stars : -5459402060944315871,
		),
	),
);
```