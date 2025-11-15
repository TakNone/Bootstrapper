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
		bot_id : -8322050292571361893,
		short_name : 'JewW3Y9McX2rSmuB',
		peer_types : array(
			$client->attachMenuPeerTypeSameBotPM(),
			$client->attachMenuPeerTypeBotPM(),
			$client->attachMenuPeerTypePM(),
			$client->attachMenuPeerTypeChat(),
			$client->attachMenuPeerTypeBroadcast(),
		),
		icons : array(
			$client->attachMenuBotIcon(
				name : 'HUxS1bBrDjQAXlaJ',
				icon : $client->documentEmpty(
					id : 6257672696933219161,
				),
				colors : array(
					$client->attachMenuBotIconColor(
						name : 'hN3mZsYXWKH0E1Gi',
						color : 33,
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 6896457374997458552,
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
			id : 5776456819374246329,
			access_hash : -5206781557283809454,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Vz1pMPCmiudaelHF',
					reason : 'Hlpra9DzcA0nY7GL',
					text : 'Lf2EJTOXHvjwuUyN',
				),
			),
			bot_inline_placeholder : 'EX08PnpVl6cvI7BH',
			lang_code : 'EdCauRLxAp79VKb2',
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
				max_id : 13,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : -3134076641169755040,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 1788411760406062271,
			),
			bot_active_users : 4,
			bot_verification_icon : 2130514016209542467,
			send_paid_messages_stars : -7475448179440645790,
		),
	),
);
```