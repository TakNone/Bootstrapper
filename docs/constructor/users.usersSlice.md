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
	count : 58,
	users : array(
		$client->userEmpty(
			id : 3296904490720248354,
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
			id : -2014463632299094856,
			access_hash : 5172889682738216817,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NMlsvjJpIHYkETz4',
					reason : 'vGC58cbThHYKO2ae',
					text : 'CPQcuGxN2LXUMWmd',
				),
			),
			bot_inline_placeholder : 'RjxFiWohGPXSU5l3',
			lang_code : 'Jw5npghFAmdZ8GxR',
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
				max_id : 48,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -1874039918522654550,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : 9039306710011076538,
			),
			bot_active_users : 87,
			bot_verification_icon : -8712532647260055815,
			send_paid_messages_stars : 7926684148153325610,
		),
	),
);
```