# attachMenuBots

**Description** : *Represents a list of bot mini apps that can be launched from the attachment menu &raquo;*

**Layer** : 222

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
			bot_id : 5121601832831470960,
			short_name : 'ruN4EkZAyjwd80B7',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : 'Ii6Wn7bjwFPUeMhH',
					icon : $client->documentEmpty(
						id : -2133263427590973979,
					),
					colors : array(
						$client->attachMenuBotIconColor(
							name : 'JH39jZrTsgKEFUWv',
							color : 35,
						),
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -745598776736512950,
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
			id : 3652086753131540294,
			access_hash : -2673771292332112396,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CBzN8jOGdseqrDfw',
					reason : 'DJW9XCBM1aiY0zdk',
					text : 'FBvkWd6CJ1zKOAXT',
				),
			),
			bot_inline_placeholder : 'LOwCe1prMV9lcdEZ',
			lang_code : '2qKaSC87RepHwsLA',
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
				max_id : 1,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -4136803849802974964,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : 3894602073098237845,
			),
			bot_active_users : 17,
			bot_verification_icon : -7311242524104818090,
			send_paid_messages_stars : 7633898145035959332,
		),
	),
);
```