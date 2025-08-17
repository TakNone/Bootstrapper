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
	count : 87,
	users : array(
		$client->userEmpty(
			id : 4401517408355794979,
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
			id : 6184734712594373027,
			access_hash : -1690288403131543905,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Yc4AOpw0mhStlQxj',
					reason : 'JQsR1kCoMIdpj0qB',
					text : 'jwARs5zIY93Mq7FT',
				),
			),
			bot_inline_placeholder : '32vHeCjarFtN0cTi',
			lang_code : 'jQl3fwh6HVvGZoi8',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 89,
			color : $client->peerColor(
				color : 94,
				background_emoji_id : -2341892330036648135,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 7765658329540480099,
			),
			bot_active_users : 25,
			bot_verification_icon : 8162793801323008687,
			send_paid_messages_stars : 4816881616306457893,
		),
	),
);
```