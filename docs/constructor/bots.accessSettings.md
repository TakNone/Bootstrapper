# bots.accessSettings

**Layer** : 227

```tl
bots.accessSettings#dd1fbf93 flags:# restricted:flags.0?true add_users:flags.1?Vector<User> = bots.AccessSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **restricted** | [`flags.0?true`](type/true) | NOTHING |
| **add_users** | [`flags.1?Vector<User>`](type/User) | NOTHING |

---

## Type

[bots.AccessSettings](type/bots.AccessSettings)

---

## Example

```php
$botsAccessSettings = $client->bots->accessSettings(
	restricted : true,
	add_users : array(
		$client->userEmpty(
			id : 4967910454697212466,
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
			id : -2948925342895760282,
			access_hash : 974141510853209509,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'InUdJwmB80hXgtG2',
					reason : 'KISkNCwtd2frm79y',
					text : 'QhcpJbSwrOBDP12F',
				),
			),
			bot_inline_placeholder : 'IelULTgwRZjBDYyS',
			lang_code : 'q8indWDctFHPQ5ga',
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
				max_id : 25,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 3174147051220694827,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -5189679726113034031,
			),
			bot_active_users : 94,
			bot_verification_icon : 3376877490306629189,
			send_paid_messages_stars : 5486606713921343570,
		),
	),
);
```