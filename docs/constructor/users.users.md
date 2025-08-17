# users.users

**Layer** : 211

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
			id : 2729353727613427759,
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
			id : -939823229298523002,
			access_hash : 3243842749088902620,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'olfUFYDcwTmn7Xa2',
					reason : 'edsIBr4vKbNEygTX',
					text : 'niRXMQLpJTyktebf',
				),
			),
			bot_inline_placeholder : 'luMkgiHnOe6tXzYA',
			lang_code : '1DrfFACWlk37aV9s',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 23,
			color : $client->peerColor(
				color : 77,
				background_emoji_id : -1498567117179964488,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -6902533647570920417,
			),
			bot_active_users : 38,
			bot_verification_icon : 3289653068284099638,
			send_paid_messages_stars : 3834091014353234386,
		),
	),
);
```