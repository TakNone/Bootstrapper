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
			bot_id : 8782783896584025435,
			short_name : 'pfkJuPrUeVcQLgMN',
			peer_types : array(
				$client->attachMenuPeerTypeSameBotPM(),
				$client->attachMenuPeerTypeBotPM(),
				$client->attachMenuPeerTypePM(),
				$client->attachMenuPeerTypeChat(),
				$client->attachMenuPeerTypeBroadcast(),
			),
			icons : array(
				$client->attachMenuBotIcon(
					name : 'EMsDxJ1047mnBTUc',
					icon : $client->documentEmpty(
						id : -5015761555171001030,
					),
					colors : array(
						$client->attachMenuBotIconColor(
							name : 'KnpeCZ5kxyHISlOm',
							color : 67,
						),
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 3127252031193237987,
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
			id : -1532311063087103871,
			access_hash : 5973406746676509141,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MaYumXH9RbUEQON1',
					reason : 'JOcHRnf9iNxKhpWD',
					text : 'ryg43CusDARdKVxz',
				),
			),
			bot_inline_placeholder : 'CyTKgxsSpijIRqz7',
			lang_code : 'ifMPI8VsoK93EqZO',
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
				color : 100,
				background_emoji_id : -4068614908101791331,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 8644835385605234765,
			),
			bot_active_users : 43,
			bot_verification_icon : 3855150159125085492,
			send_paid_messages_stars : -764364786602162463,
		),
	),
);
```