# attachMenuBotsBot

**Description** : *Represents a bot mini app that can be launched from the attachment menu &raquo;*

**Layer** : 218

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
		bot_id : 7008400180610861245,
		short_name : 'sXyonlKrztY2ugQH',
		peer_types : array(
			$client->attachMenuPeerTypeSameBotPM(),
			$client->attachMenuPeerTypeBotPM(),
			$client->attachMenuPeerTypePM(),
			$client->attachMenuPeerTypeChat(),
			$client->attachMenuPeerTypeBroadcast(),
		),
		icons : array(
			$client->attachMenuBotIcon(
				name : 'ghZI8aNnt1oFTAzH',
				icon : $client->documentEmpty(
					id : -3494394479234502575,
				),
				colors : array(
					$client->attachMenuBotIconColor(
						name : '9l14qeBNjnO0ziJo',
						color : 99,
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -7883321845807692924,
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
			id : 3886753346632878083,
			access_hash : -3487678981786564984,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MfGgrdylzavPDc08',
					reason : '6jycQDl4RzMtpF1B',
					text : 'oP3XI5ef4xh26F0Q',
				),
			),
			bot_inline_placeholder : 'lfaErBhI7u5t9viL',
			lang_code : '1rxB7viZgdc2K6aL',
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
				color : 34,
				background_emoji_id : 1789399229093426389,
			),
			profile_color : $client->peerColor(
				color : 1,
				background_emoji_id : -9168647106837483848,
			),
			bot_active_users : 47,
			bot_verification_icon : -464400746502057967,
			send_paid_messages_stars : 5639377952683589964,
		),
	),
);
```