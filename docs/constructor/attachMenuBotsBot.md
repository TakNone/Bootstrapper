# attachMenuBotsBot

**Description** : *Represents a bot mini app that can be launched from the attachment menu &raquo;*

**Layer** : 214

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
		bot_id : 6866428077656263014,
		short_name : '8SbxVIrmFMPt6WLv',
		peer_types : array(
			$client->attachMenuPeerTypeSameBotPM(),
			$client->attachMenuPeerTypeBotPM(),
			$client->attachMenuPeerTypePM(),
			$client->attachMenuPeerTypeChat(),
			$client->attachMenuPeerTypeBroadcast(),
		),
		icons : array(
			$client->attachMenuBotIcon(
				name : 'Ct9QsxkyTnRzqH60',
				icon : $client->documentEmpty(...),
				colors : array(
					$client->attachMenuBotIconColor(...),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -2175918358165879154,
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
			id : -6017070275577009025,
			access_hash : 7819580663197043698,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mbfE7CPjos0M3TKl',
					reason : 'MWIemz9UG30KSAd8',
					text : 'Vnd3iFMyYKJUkHsf',
				),
			),
			bot_inline_placeholder : 'nO6sJ5doDjPA1yNi',
			lang_code : 'QHb5snFCpO8Rx6Dz',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 83,
			color : $client->peerColor(
				color : 3,
				background_emoji_id : 2757752906826780652,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -4223122409542177277,
			),
			bot_active_users : 91,
			bot_verification_icon : 5760084598801500532,
			send_paid_messages_stars : -95999183230235100,
		),
	),
);
```