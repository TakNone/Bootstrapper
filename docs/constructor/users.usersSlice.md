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
	count : 71,
	users : array(
		$client->userEmpty(
			id : -6774370339712117781,
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
			id : -9126423171142780376,
			access_hash : -2917231950684166070,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4T9G7xLH0msYv8a3',
					reason : 'zlRqjut95YOvx4Wh',
					text : 'Fa4bCKfrY7zvonJR',
				),
			),
			bot_inline_placeholder : '8GptCrbEdZHz2Ofx',
			lang_code : 'v4JBpGASyzejFLmx',
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
				max_id : 87,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -8850449711831036978,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -152652197662636633,
			),
			bot_active_users : 95,
			bot_verification_icon : -897904859704514977,
			send_paid_messages_stars : 5047883785457207346,
		),
	),
);
```