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
			id : -4283569745457967250,
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
			id : -4862395890957793387,
			access_hash : -2401144423260373635,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l5ICJ9hj4npZOc0E',
					reason : 'XxJMA5KirmUvYPIH',
					text : 'vdMnNwpr2F94RSgP',
				),
			),
			bot_inline_placeholder : 'kX9LTPftEHDUpvY3',
			lang_code : 'etnw1vYmDrbH6O7X',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 16,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : -7337026276791149451,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 7248360944176022505,
			),
			bot_active_users : 75,
			bot_verification_icon : 8235140260616661137,
			send_paid_messages_stars : -4655350790347845744,
		),
	),
);
```