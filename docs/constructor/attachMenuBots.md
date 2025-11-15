# attachMenuBots

**Description** : *Represents a list of bot mini apps that can be launched from the attachment menu &raquo;*

**Layer** : 218

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
			bot_id : -8957126924944719160,
			short_name : 'QNgHhp2IxeKvw7ok',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : 'Lt6m2WuEGqabD3Kv',
					icon : $client->documentEmpty(
						id : -5538289118225508916,
					),
					colors : array(
						$client->attachMenuBotIconColor(
							name : 'pO4UDvxS9GnebPFo',
							color : 22,
						),
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 3079385735968259368,
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
			id : 8420717854938065250,
			access_hash : 3468614834710967865,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ogjQ2V1ZXCDKHeMB',
					reason : 'f9ma1g0yzMnGS5KI',
					text : 'Z4XQ9Id2rstG1Ncy',
				),
			),
			bot_inline_placeholder : '48z7HCLIeoicSM62',
			lang_code : '6liJU3d8C1sMnZ5Y',
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
				max_id : 28,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : 565508727368227147,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : 346882534045121314,
			),
			bot_active_users : 97,
			bot_verification_icon : -7999613849992629479,
			send_paid_messages_stars : 7672015632739298470,
		),
	),
);
```