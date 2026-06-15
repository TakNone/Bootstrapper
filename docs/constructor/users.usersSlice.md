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
	count : 73,
	users : array(
		$client->userEmpty(
			id : -2117021301895051238,
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
			id : 3509644712151219017,
			access_hash : -6285364402824019445,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kuVXrKaqjWdt1pMR',
					reason : 'in7mCY9wlgzhH6Db',
					text : 'FpUs8v4IGTZmjRDr',
				),
			),
			bot_inline_placeholder : 'ISrnT5BHOYVhsNWk',
			lang_code : 'sduQbzD76KO5rjoy',
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
				max_id : 60,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -807417123851948754,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : -1996499410727035979,
			),
			bot_active_users : 72,
			bot_verification_icon : -6176209721560021109,
			send_paid_messages_stars : -516633118847527940,
		),
	),
);
```