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
			id : 881286646902050120,
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
			id : 7964283056514379157,
			access_hash : 4850561360708222845,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jNJKoZO2dWtzXqkr',
					reason : 'snCgIvzqBJilLxYD',
					text : 'cjSaYwqoxhPuzrkN',
				),
			),
			bot_inline_placeholder : 'Aw7qKafrCZYh6E0W',
			lang_code : 'rMvHgLWda8SwXqRs',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : -6760648534109904923,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : 5570673563231192738,
			),
			bot_active_users : 66,
			bot_verification_icon : 1429712636255338402,
			send_paid_messages_stars : -5310282164706734657,
		),
	),
);
```