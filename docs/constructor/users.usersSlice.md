# users.usersSlice

**Layer** : 216

```tl
users.usersSlice#315a4974 count:int users:Vector<User> = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->users->usersSlice(
	count : 69,
	users : array(
		$client->userEmpty(
			id : -7569921723825166153,
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
			id : -957515761252457062,
			access_hash : -1939292728049580700,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NxLUCIVfM7WAYjig',
					reason : 'EZjgI7uMiJ26Xky3',
					text : 'sgb2qKGUXwAVMC7E',
				),
			),
			bot_inline_placeholder : '9QCwmlqGHBhInjvR',
			lang_code : 'qrNkB63FLYKSRvwM',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 35,
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -5143407772587905137,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 3782591220978536747,
			),
			bot_active_users : 3,
			bot_verification_icon : -6039584738310106704,
			send_paid_messages_stars : 6000109223991156695,
		),
	),
);
```