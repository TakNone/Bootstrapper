# attachMenuBots

**Description** : *Represents a list of bot mini apps that can be launched from the attachment menu &raquo;*

**Layer** : 211

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
	hash : -1156769772702939275,
	bots : array(
		$client->attachMenuBot(
			inactive : true,
			has_settings : true,
			request_write_access : true,
			show_in_attach_menu : true,
			show_in_side_menu : true,
			side_menu_disclaimer_needed : true,
			bot_id : -6603669951477282559,
			short_name : '0HRhqx4GcNtvSuP9',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : 'pybtH4mFw5idBV3P',
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
			id : 671530796766601495,
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
			id : -1903936099975622060,
			access_hash : -3102388157086872625,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VNsD08fWgL6Pzunr',
					reason : 'Ibz5CeA8Fd9gKvk3',
					text : '8ce1MuJECm9iWHDG',
				),
			),
			bot_inline_placeholder : 'DUhbAk8pynxYqFXu',
			lang_code : 'qKO97J4HShrBypIA',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 69,
			color : $client->peerColor(
				color : 49,
				background_emoji_id : -4466523090786144420,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 3646574174527539731,
			),
			bot_active_users : 7,
			bot_verification_icon : 6405839309821551848,
			send_paid_messages_stars : -4389828192793805349,
		),
	),
);
```