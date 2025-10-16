# users.users

**Layer** : 216

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
			id : -6789910647450172403,
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
			id : 8450954412547414294,
			access_hash : 1958682460454141574,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jTr1C2WUgynMBf4I',
					reason : 'DbTAFSLNrqBn8XjQ',
					text : 'n9eudljwJ6U2SoiD',
				),
			),
			bot_inline_placeholder : 'Wdks6mDUVX3ypOYu',
			lang_code : '6KlPcdCyohYA9Is3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 48,
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 6488779098198383431,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 2666244063774254338,
			),
			bot_active_users : 41,
			bot_verification_icon : -3288233129889653729,
			send_paid_messages_stars : -3725299779649116914,
		),
	),
);
```