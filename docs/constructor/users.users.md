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
			id : -101513268404552770,
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
			id : -3504722774763372791,
			access_hash : 8320832685019495648,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CQWKx5u6ofpqId3e',
					reason : '9so6HZlqBDO3jnKF',
					text : 'O3VvsrZ9H5gnzLXq',
				),
			),
			bot_inline_placeholder : 'Br4xaZfpt83omuyb',
			lang_code : 'Sha5enCztkyU7HjY',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 4569909180427633284,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : -6761561860670554079,
			),
			bot_active_users : 20,
			bot_verification_icon : 6251773179495703178,
			send_paid_messages_stars : 3671836774562000529,
		),
	),
);
```