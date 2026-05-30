# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 222

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
			id : 7826867073053568009,
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
			id : 515479873300726464,
			access_hash : -1790086827005602483,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jXf5Z6Ssxy24PmeM',
					reason : 'UcgPNKp6vYbl8nHG',
					text : '8o9G0cB7AjaTtKHx',
				),
			),
			bot_inline_placeholder : '29B5s4elSmtxQAXd',
			lang_code : 'YaHmDMzdrivLSQNT',
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
				max_id : 2,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 6705952983183782222,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -6781926398284813846,
			),
			bot_active_users : 78,
			bot_verification_icon : -3158896415285759543,
			send_paid_messages_stars : -1623750742998405305,
		),
	),
);
```