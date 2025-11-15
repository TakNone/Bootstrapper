# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 216

```tl
users.usersSlice#315a4974 count:int users:Vector<User> = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of users (bigger than the users specified in users) |
| <mark>users</mark> | [`Vector<User>`](type/User) | Subset of users |

---

## Type

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->users->usersSlice(
	count : 42,
	users : array(
		$client->userEmpty(
			id : 2645546564414088195,
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
			id : -7942585715023182807,
			access_hash : 5918192273869428372,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'R1U8lmkaV9optdIF',
					reason : '5BwMtT6RaDEnopXg',
					text : 'AzGyHqRnL9bX6peM',
				),
			),
			bot_inline_placeholder : 'oVfI9ES083XKvzY7',
			lang_code : 'zqmjSQJA6C429laU',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 57,
			color : $client->peerColor(
				color : 100,
				background_emoji_id : 746839435638602645,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 4626283153681020816,
			),
			bot_active_users : 44,
			bot_verification_icon : 7789141380070732292,
			send_paid_messages_stars : 8795923901148331211,
		),
	),
);
```