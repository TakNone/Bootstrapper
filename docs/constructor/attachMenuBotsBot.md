# attachMenuBotsBot

**Description** : *Represents a bot mini app that can be launched from the attachment menu &raquo;*

**Layer** : 216

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
		bot_id : -5672164134161812269,
		short_name : 'lcbmeGo93fupandF',
		peer_types : array(
			$client->attachMenuPeerTypeSameBotPM(),
			$client->attachMenuPeerTypeBotPM(),
			$client->attachMenuPeerTypePM(),
			$client->attachMenuPeerTypeChat(),
			$client->attachMenuPeerTypeBroadcast(),
		),
		icons : array(
			$client->attachMenuBotIcon(
				name : 'zuAV0bieQ6S7LqWE',
				icon : $client->documentEmpty(...),
				colors : array(
					$client->attachMenuBotIconColor(...),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 6451425877123199033,
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
			id : 2760008593733933998,
			access_hash : -5726722414563230935,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'y8eE17KCiqlLc0rg',
					reason : 'qHt3YzMkODZfgpdE',
					text : 'xRT5UhlZC4gaSqyP',
				),
			),
			bot_inline_placeholder : 'ZGfATtuNWc3gyzBs',
			lang_code : 'OZMGTBXE8iz1057K',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 67,
			color : $client->peerColor(
				color : 90,
				background_emoji_id : -5467714080404632047,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 402196004154787568,
			),
			bot_active_users : 52,
			bot_verification_icon : 1015926464803021486,
			send_paid_messages_stars : 7774152804003510745,
		),
	),
);
```