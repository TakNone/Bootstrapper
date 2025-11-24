# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 218

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
			id : 4398593061517390384,
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
			id : 3901593336407224726,
			access_hash : 8659890606854072930,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Kld41P2M9FTxOIuk',
					reason : 'NL8puTxPX30MDiIG',
					text : 'mXTLUrst4fzkpo0a',
				),
			),
			bot_inline_placeholder : '7pWM1lB5I0qhKesf',
			lang_code : '71yEhFMGOQ2m5aqB',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 1186322042853788946,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : 7784819780071674651,
			),
			bot_active_users : 58,
			bot_verification_icon : -3746752137550848455,
			send_paid_messages_stars : -128210679540028688,
		),
	),
);
```