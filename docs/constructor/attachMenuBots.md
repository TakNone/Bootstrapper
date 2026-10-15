# attachMenuBots

**Description** : *Represents a list of bot mini apps that can be launched from the attachment menu &raquo;*

**Layer** : 229

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
			bot_id : -2834024309657835334,
			short_name : 'XQTumzIgkd6pBa1q',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : 'BEWszdmG3n147Lvx',
					icon : $client->documentEmpty(
						id : -1681231743859032505,
					),
					colors : array(
						$client->attachMenuBotIconColor(
							name : 'E1uVhi7Pkf2cd4rA',
							color : 81,
						),
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8570202144710637745,
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
			id : -3399750229090924664,
			access_hash : 224404009282963800,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZckQz85ds2CNVH3t',
					reason : 'CYFGeiXTtwQa7cAd',
					text : 'nUAiceGZPgwsrvJK',
				),
			),
			bot_inline_placeholder : 'CRgW3EP128roMwKv',
			lang_code : 'hv4swCKuia0b31o6',
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
				max_id : 55,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -3529193501069214897,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : -7867659015122277983,
			),
			bot_active_users : 16,
			bot_verification_icon : -729773898011288627,
			send_paid_messages_stars : -2527181306720666671,
			linked_community_id : -3688149553691911312,
		),
	),
);
```