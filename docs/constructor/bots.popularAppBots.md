# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 214

```tl
bots.popularAppBots#1991b13b flags:# next_offset:flags.0?string users:Vector<User> = bots.PopularAppBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | The bots associated to each Main Mini App, see here » for more info |

---

## Type

[bots.PopularAppBots](type/bots.PopularAppBots)

---

## Example

```php
$botsPopularAppBots = $client->bots->popularAppBots(
	next_offset : 'KnG9MfVv7zNwDFb5',
	users : array(
		$client->userEmpty(
			id : -2711670037735519791,
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
			id : 2136604716743761275,
			access_hash : -1844213155531367248,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Qsoix6EmRkPuOlaF',
					reason : '2TntGBbpkwo8QeaI',
					text : 'RO0MrgjQcns1DXd3',
				),
			),
			bot_inline_placeholder : 'uQXsZJzvGchCWLq9',
			lang_code : 'kgh3iRWeInuqDrmo',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 8720938472723784834,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : 8870617531673832610,
			),
			bot_active_users : 29,
			bot_verification_icon : 7441220718701417161,
			send_paid_messages_stars : -4484964932464060271,
		),
	),
);
```