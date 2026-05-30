# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 222

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
	count : 34,
	users : array(
		$client->userEmpty(
			id : -7542692970350144992,
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
			id : -102753850311258175,
			access_hash : -2583109120999152179,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YaN7Izq2wJTP6Cyl',
					reason : 'SkAaUZQX2NnphcVu',
					text : 'VmWbz1B8idZYgnQH',
				),
			),
			bot_inline_placeholder : 'zo3LxHn5BpkNOl0g',
			lang_code : '26z8mMTpC4PJfiOX',
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
				max_id : 89,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : -5768320337383339968,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 4463738433271162963,
			),
			bot_active_users : 47,
			bot_verification_icon : 6821227974433010266,
			send_paid_messages_stars : 2563315056898875642,
		),
	),
);
```