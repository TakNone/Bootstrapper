# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 227

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
	count : 91,
	users : array(
		$client->userEmpty(
			id : -1643482133211551874,
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
			id : -4054754213321348996,
			access_hash : -1640695196596896426,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0RsJlvmAnbG4BIPo',
					reason : '8KVCj9Ie75SZBaXd',
					text : 'U7L8uAcMdFbzkis9',
				),
			),
			bot_inline_placeholder : 'Pd69uscJ7bEghD2F',
			lang_code : 'dTwcq9ElWJXCmrQ4',
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
				max_id : 8,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -1248364653722243086,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -6363304679387753409,
			),
			bot_active_users : 16,
			bot_verification_icon : -1886881541427465677,
			send_paid_messages_stars : 6090497620386494818,
		),
	),
);
```