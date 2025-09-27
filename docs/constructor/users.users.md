# users.users

**Layer** : 214

```tl
users.users#62d706b8 users:Vector<User> = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->users->users(
	users : array(
		$client->userEmpty(
			id : 5713169270603328089,
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
			id : 7266599104167702472,
			access_hash : -110988185431508106,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Wbpq4zxnvS3cTG7a',
					reason : 'KaQyMuIZTw9vxBJW',
					text : 'HZBXh6EbiKkjYDc8',
				),
			),
			bot_inline_placeholder : 'cZ3a6o1S9pMVUYeC',
			lang_code : 'D3g1bzFPxRUruMto',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 51,
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 4489214672774495747,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : -1425713850567588936,
			),
			bot_active_users : 24,
			bot_verification_icon : -198306577206030114,
			send_paid_messages_stars : -475733225954302807,
		),
	),
);
```