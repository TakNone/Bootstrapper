# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 227

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
			id : -6472607534342326051,
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
			bot_guard : true,
			id : -4590828088995314866,
			access_hash : 8382732595578232842,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 't8nbzVca6J3iBH5w',
					reason : '9k514YCpyDRt7eHO',
					text : 'jy3sdun9SWFHtcwB',
				),
			),
			bot_inline_placeholder : 'Jbs0VX8M5QTuxr2y',
			lang_code : 'WyLP8YqwsbrIxRph',
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
				max_id : 5,
			),
			color : $client->peerColor(
				color : 72,
				background_emoji_id : -7983782161474810136,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : -1064363127241800960,
			),
			bot_active_users : 29,
			bot_verification_icon : -1170017609908826858,
			send_paid_messages_stars : -6767852911138608894,
		),
	),
);
```