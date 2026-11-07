# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 233

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
			id : -3551562771481432284,
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
			id : -7110761514054822187,
			access_hash : -7530871230636052857,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6L9ExCemh84GrQsi',
					reason : 'gYV2AdNfZeJwuK0H',
					text : 'j5YBEnFIR03A9qOc',
				),
			),
			bot_inline_placeholder : 'g8SxNArkJUaz70C1',
			lang_code : 'PEMamern7h9gzcwi',
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
				max_id : 51,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -8041179553804975084,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : 7611696338442212716,
			),
			bot_active_users : 91,
			bot_verification_icon : -7325535994627888635,
			send_paid_messages_stars : -5132275148637719436,
			linked_community_id : -2838047565264251288,
		),
	),
);
```