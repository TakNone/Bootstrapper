# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 233

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
	count : 26,
	users : array(
		$client->userEmpty(
			id : -2311833623034223553,
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
			bot_forum_sidebar : true,
			id : 606763587347336961,
			access_hash : -1663816113219894843,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KwdGY94oIbqSOxQE',
					reason : 'XA1f8wSGI5JaoLcV',
					text : 'Kw1pqsGl3QTaxeNO',
				),
			),
			bot_inline_placeholder : 'ClsRJayA0bh7uUM1',
			lang_code : 'dXs4ehlITonw9SjM',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 33,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 3954255114186996518,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : 4114222845652854040,
			),
			bot_active_users : 45,
			bot_verification_icon : -7631008463574726941,
			send_paid_messages_stars : 1901202606603123506,
			linked_community_id : -1650503963580251932,
		),
	),
);
```