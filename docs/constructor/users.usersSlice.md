# users.usersSlice

**Description** : *Describes a partial list of users*

**Layer** : 222

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
			id : -4249826682110387976,
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
			id : 4656045226407409610,
			access_hash : 1374983065173201834,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PTtdrzkCQf2KyZip',
					reason : 'cfxlCEV3FUywMZbr',
					text : 's6TfizN5mhFW2B4O',
				),
			),
			bot_inline_placeholder : 'j1BivaVHLdxblJCU',
			lang_code : 'RCwkrJu7GILWF2MD',
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
				max_id : 52,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 2204892265173616941,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : -1270112772093994308,
			),
			bot_active_users : 47,
			bot_verification_icon : 3389070879535631732,
			send_paid_messages_stars : 992764005463991178,
		),
	),
);
```