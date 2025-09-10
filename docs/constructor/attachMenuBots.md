# attachMenuBots

**Description** : *Represents a list of bot mini apps that can be launched from the attachment menu &raquo;*

**Layer** : 214

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
	hash : 1108828870384213256,
	bots : array(
		$client->attachMenuBot(
			inactive : true,
			has_settings : true,
			request_write_access : true,
			show_in_attach_menu : true,
			show_in_side_menu : true,
			side_menu_disclaimer_needed : true,
			bot_id : 4545322183906219421,
			short_name : 'Q3mrS2J1uZVzebLq',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : '064dpK5rTify9CbX',
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
			id : -2054413768447161887,
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
			id : -5211403595249712347,
			access_hash : 4286143199400983399,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9clYR2wWE5ubdmHp',
					reason : 'msIEchQdBGHjA9qT',
					text : 'xRkJgiG6br0yUW58',
				),
			),
			bot_inline_placeholder : 'rYfFXvLJaH3yTMiO',
			lang_code : 'nomksSjhH0Xxv4zg',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 64,
			color : $client->peerColor(
				color : 63,
				background_emoji_id : -6066212266393662581,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 4869376885400082420,
			),
			bot_active_users : 58,
			bot_verification_icon : 6876772792959603249,
			send_paid_messages_stars : 9106099127972545400,
		),
	),
);
```