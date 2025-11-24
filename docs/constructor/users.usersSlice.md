# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 218

```tl
users.usersSlice#315a4974 count:int users:Vector<User> = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of users (bigger than the users specified in users) |
| <mark>users</mark> | [`Vector<User>`](type/User) | Subset of users |

---

## Type

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->users->usersSlice(
	count : 90,
	users : array(
		$client->userEmpty(
			id : -7884107540043689,
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
			id : -3304331919648431695,
			access_hash : 8672697591297950738,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'y8DlxG1qmEsSfeZ5',
					reason : 'y2aHiztBlnDp4uex',
					text : 'BH3Nhiv1zTbpqx2f',
				),
			),
			bot_inline_placeholder : 'puKkwTXRC25ja4tM',
			lang_code : '9g6r0j7BI1shWAGM',
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
				max_id : 1,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : -8114702104948651055,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -1129395134972983014,
			),
			bot_active_users : 65,
			bot_verification_icon : -5323061004011413124,
			send_paid_messages_stars : -4347795868361291627,
		),
	),
);
```