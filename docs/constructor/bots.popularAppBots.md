# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search »*

**Layer** : 211

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
	next_offset : 'Dl7pGg0qxc3QPjzO',
	users : array(
		$client->userEmpty(
			id : 417292460217626363,
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
			id : 4985858035123790483,
			access_hash : 608464400692591278,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9eOY4XIgBVuLMbKa',
					reason : 'izfPbax7EXItW8Yy',
					text : 'xe6mbAg3DXKlFSJM',
				),
			),
			bot_inline_placeholder : 'X70vcEgNPFWmA1LS',
			lang_code : 'DmJ2RPQVGIohYOfl',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 55,
			color : $client->peerColor(
				color : 78,
				background_emoji_id : -3223976904677430788,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : -3157175136676289176,
			),
			bot_active_users : 35,
			bot_verification_icon : -549707603231924714,
			send_paid_messages_stars : -5243902815085736655,
		),
	),
);
```