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
	count : 79,
	users : array(
		$client->userEmpty(
			id : 379656786927512758,
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
			id : 348946449991061300,
			access_hash : 7543405517220374019,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '41At50dlrQm3ohGg',
					reason : 'lGDSPCwp2NbxEWsH',
					text : 'BXytNTx1nrkOYmAj',
				),
			),
			bot_inline_placeholder : 'sP5QmR1b4rK3YSU7',
			lang_code : 'aOp31vI6iEW7QdMo',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 91,
			color : $client->peerColor(
				color : 6,
				background_emoji_id : -7826022127526663842,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : 6752038569672029604,
			),
			bot_active_users : 44,
			bot_verification_icon : -4053569509726429977,
			send_paid_messages_stars : -2520353629036589958,
		),
	),
);
```