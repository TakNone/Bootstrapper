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
			id : 5573185801634733534,
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
			id : 6205242685095852456,
			access_hash : -2715895091340139474,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FJkcv1Ti7QPAYqw0',
					reason : 'TtsKxBr6d8GqYm9f',
					text : 'XLy2Hsag3jnvR651',
				),
			),
			bot_inline_placeholder : 'iG9HRbY0h64tpykW',
			lang_code : 'lAPN5pj9vwzrRc1U',
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
				color : 69,
				background_emoji_id : -2092953025050455049,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : 3107188667276791755,
			),
			bot_active_users : 9,
			bot_verification_icon : -2511660406139629012,
			send_paid_messages_stars : -8544189840346177610,
		),
	),
);
```