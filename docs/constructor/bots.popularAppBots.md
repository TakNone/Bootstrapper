# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 218

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
	next_offset : '1K0ymSJxLvrHoNCl',
	users : array(
		$client->userEmpty(
			id : 4734711883015749746,
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
			id : 849471054982636540,
			access_hash : 3225452951081139563,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gsbhmiY6QBW8KVNx',
					reason : 'a4xMyNi8Qml7hk21',
					text : 'b1fwJZBDaOCm9xWH',
				),
			),
			bot_inline_placeholder : '8ydp0PRCUXLOg5os',
			lang_code : 'E7IN1xjg8wkF45R2',
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
				max_id : 81,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 7580452495735693495,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 748637679241347339,
			),
			bot_active_users : 5,
			bot_verification_icon : -7744021857971634802,
			send_paid_messages_stars : -2210117241209092918,
		),
	),
);
```