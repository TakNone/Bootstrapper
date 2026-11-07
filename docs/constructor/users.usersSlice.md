# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 229

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
	count : 51,
	users : array(
		$client->userEmpty(
			id : 1939134978268333702,
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
			id : 8364198254790916210,
			access_hash : 2049049034049517720,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hxrAvyoG8WNK0eUI',
					reason : 'urqNjMDJo5HdU7lS',
					text : 'CUB4RsGkHyY7tVJQ',
				),
			),
			bot_inline_placeholder : 'Xuv1Qzi9cIMl0aZ3',
			lang_code : 'v7eYJSL2GXsHpDVI',
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
				max_id : 27,
			),
			color : $client->peerColor(
				color : 24,
				background_emoji_id : -3035601620035169617,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -3237543132973374467,
			),
			bot_active_users : 49,
			bot_verification_icon : -7191201612798717900,
			send_paid_messages_stars : 2348257861799888789,
			linked_community_id : -2212272220332964675,
		),
	),
);
```