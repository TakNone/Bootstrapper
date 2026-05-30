# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 225

```tl
users.users#62d706b8 users:Vector<User> = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->users->users(
	users : array(
		$client->userEmpty(
			id : 5170643889200229035,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : -683162521439211533,
			access_hash : 8946309657652529210,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QRrvkitjwKg8OuGp',
					reason : 'f5lrqd8Ty7tKnXoL',
					text : 'O0tdQN31hEXia4rk',
				),
			),
			bot_inline_placeholder : 'VpIUPqWl6XYJFxjL',
			lang_code : 'ZGFQHeqdKRkO5MJN',
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
				max_id : 9,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : 8656375374651310601,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 7482773315269183704,
			),
			bot_active_users : 1,
			bot_verification_icon : 4312713305867967319,
			send_paid_messages_stars : 2159401264618375505,
		),
	),
);
```