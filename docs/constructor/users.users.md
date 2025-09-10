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
			id : 7007301752528795430,
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
			id : 4746432633053947740,
			access_hash : 2396217576488712658,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UhI2DyGfYl9HEMqi',
					reason : '2IDAMjlmXCf4pwFB',
					text : 'JUuI9i4ebgYCdqSF',
				),
			),
			bot_inline_placeholder : 'jiJSI2V7nA3CEGlr',
			lang_code : 'IBCs5JumoU0eNHOl',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 37,
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 1374203302816446378,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -7749406284624849912,
			),
			bot_active_users : 44,
			bot_verification_icon : -6370736604649775621,
			send_paid_messages_stars : -4048715060575276473,
		),
	),
);
```