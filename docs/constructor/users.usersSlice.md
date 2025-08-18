# users.usersSlice

**Layer** : 211

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
	count : 81,
	users : array(
		$client->userEmpty(
			id : -5428787490481179104,
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
			id : -1674510805002579539,
			access_hash : 697849676387046843,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vn6BjgOoPlGJu80q',
					reason : '834JwFpg2moIGHB6',
					text : 'h2Jma4w6ocOdfGzW',
				),
			),
			bot_inline_placeholder : 'GVqLKYjDQEXyaMRH',
			lang_code : '8EABktzvd9LQ7VrP',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 87,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -5272833985877947165,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 8339609113626407756,
			),
			bot_active_users : 59,
			bot_verification_icon : 6632693315545420400,
			send_paid_messages_stars : 3011735161330074685,
		),
	),
);
```