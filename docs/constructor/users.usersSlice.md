# users.usersSlice

**Layer** : 214

```tl
users.usersSlice#315a4974 count:int users:Vector<User> = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->users->usersSlice(
	count : 8,
	users : array(
		$client->userEmpty(
			id : 5643573832304577799,
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
			id : -6540451716665367725,
			access_hash : -8603704870677421926,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3h1SBCzUDJrY7Lk2',
					reason : 'uh1OSX6F54fiEzT7',
					text : 'fqvz8FKGVSZQjPTR',
				),
			),
			bot_inline_placeholder : 'l2tAQMX8rHYwU1C6',
			lang_code : '8F5qHEbn7gmL16UT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 29,
				background_emoji_id : 4851244290744868242,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 3999628786501803398,
			),
			bot_active_users : 51,
			bot_verification_icon : 2791596120816906904,
			send_paid_messages_stars : 1580137392723900347,
		),
	),
);
```