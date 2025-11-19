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
			bot_id : -2861586009612921087,
			short_name : 'TRjxgQYCIpfneyz3',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : 'lXhs0T8QEHgbPiWy',
					icon : $client->documentEmpty(
						id : -55900974725410180,
					),
					colors : array(
						$client->attachMenuBotIconColor(
							name : 'HPnTWvmf1K4IwQiX',
							color : 80,
						),
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 3180612102973393477,
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
			id : -6884877625149953070,
			access_hash : 8990900440242556569,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yOTGJURVC06KLHba',
					reason : 't0sRn5kM3O9Gq7rX',
					text : 'NLhmPeYM3iBayd4S',
				),
			),
			bot_inline_placeholder : 'cEo3v6muA9tZY2j0',
			lang_code : 'lbgznuJeShy76kis',
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
				max_id : 15,
			),
			color : $client->peerColor(
				color : 35,
				background_emoji_id : 1174724009418558791,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : -7812540057553296541,
			),
			bot_active_users : 46,
			bot_verification_icon : -2005939923770322688,
			send_paid_messages_stars : -9042532631584885912,
		),
	),
);
```