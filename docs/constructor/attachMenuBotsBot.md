# attachMenuBotsBot

**Description** : *Represents a bot mini app that can be launched from the attachment menu &raquo;*

**Layer** : 233

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
		bot_id : 6475768111968081265,
		short_name : 'FvZwIunbCWS5E2Dq',
		peer_types : array(
			$client->attachMenuPeerTypeSameBotPM(),
			$client->attachMenuPeerTypeBotPM(),
			$client->attachMenuPeerTypePM(),
			$client->attachMenuPeerTypeChat(),
			$client->attachMenuPeerTypeBroadcast(),
		),
		icons : array(
			$client->attachMenuBotIcon(
				name : 'Ef6uVjiF2TKHJDO1',
				icon : $client->documentEmpty(
					id : -6329542105620874947,
				),
				colors : array(
					$client->attachMenuBotIconColor(
						name : 'eOm9BacL24oXC3AN',
						color : 0,
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1942471473863566262,
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
			bot_forum_sidebar : true,
			id : 8004428349253327304,
			access_hash : 1474058578338543682,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ehCdPyzgwV3AR9jq',
					reason : 'QT7E4PgGnODNZUHk',
					text : 'ayMEWxnKzvC8p1ZD',
				),
			),
			bot_inline_placeholder : 'dZpxb7B5HWePu01r',
			lang_code : 'RmK3hfX9jS6lMpiF',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 89,
			),
			color : $client->peerColor(
				color : 6,
				background_emoji_id : -1425455185717385675,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 6703615352090015524,
			),
			bot_active_users : 8,
			bot_verification_icon : -4789805048193349734,
			send_paid_messages_stars : 492887438072583434,
			linked_community_id : -5280135682557436084,
		),
	),
);
```