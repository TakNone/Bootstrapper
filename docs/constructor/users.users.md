# users.users

**Description** : *Describes a list of users \(or bots\)*

**Layer** : 229

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
			id : 9144266547191281082,
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
			id : -1017803004087447126,
			access_hash : 1166697361102265233,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hcg3QTAVoFXn9NKS',
					reason : '2c3nfihUmvATOEeK',
					text : 'Vk3jGF7rlgJ2t1hf',
				),
			),
			bot_inline_placeholder : 'pdrgInxzvDsu1Gk6',
			lang_code : 'vsYD4b5FUTLjQRXd',
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
				max_id : 71,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 7288646992969701001,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : -8429826142901502139,
			),
			bot_active_users : 96,
			bot_verification_icon : -3531381637644446264,
			send_paid_messages_stars : -6427790010794081964,
			linked_community_id : -6412008142222160145,
		),
	),
);
```