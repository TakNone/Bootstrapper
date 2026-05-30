# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 225

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
	count : 63,
	users : array(
		$client->userEmpty(
			id : -7337604903525279621,
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
			id : -6467711231866291890,
			access_hash : -2685672405133608123,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EvZRYSyIQK39s2wk',
					reason : 'HbQ31Z2CLrTDuKAj',
					text : '6V1XO59HTrmlYMzF',
				),
			),
			bot_inline_placeholder : 'x8FItXd1BmEg3Rjq',
			lang_code : 'fY2ps1JVtbygac8k',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 79,
				background_emoji_id : 447294869452301465,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : -7260658216498857889,
			),
			bot_active_users : 27,
			bot_verification_icon : -5254793644961000357,
			send_paid_messages_stars : 1314696901012622227,
		),
	),
);
```