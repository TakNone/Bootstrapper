# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 222

```tl
users.users#62d706b8 users:Vector<User> = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->users->users(
	users : array(
		$client->userEmpty(
			id : -9033707308022578026,
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
			id : -2978036399546315673,
			access_hash : -7502418203461355136,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vW3tfVIgpBHAbQ1N',
					reason : 'auEheQdY3V1b49lX',
					text : 'v2HhQ0oXw8r74ueR',
				),
			),
			bot_inline_placeholder : '9DfcI40NM81GPz5p',
			lang_code : 'R1mpTJ6QSirk8xOw',
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
				max_id : 70,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 4844224417698529910,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 8299912234226321828,
			),
			bot_active_users : 87,
			bot_verification_icon : 4733610452797988132,
			send_paid_messages_stars : -8086510578966311770,
		),
	),
);
```