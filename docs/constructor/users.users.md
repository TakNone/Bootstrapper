# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 216

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
			id : 3585855956536284554,
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
			id : -8901974677178377421,
			access_hash : -7736039475585035506,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sHyIxW8tqOU5rBoa',
					reason : 'WFr9wROAaV7uTXZ3',
					text : 'LMbBQVJgGowdP0CA',
				),
			),
			bot_inline_placeholder : 'zlgrAy3kiIZYThCj',
			lang_code : 'EMx9w2pF5yz3nWJa',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 76,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -5381499402626465643,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -8953182814977534115,
			),
			bot_active_users : 32,
			bot_verification_icon : -2829755490531925718,
			send_paid_messages_stars : -7797786719105415089,
		),
	),
);
```