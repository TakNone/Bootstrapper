# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 222

```tl
account.webAuthorizations#ed56c9fc authorizations:Vector<WebAuthorization> users:Vector<User> = account.WebAuthorizations;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>authorizations</mark> | [`Vector<WebAuthorization>`](type/WebAuthorization) | Web authorization list |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[account.WebAuthorizations](type/account.WebAuthorizations)

---

## Example

```php
$accountWebAuthorizations = $client->account->webAuthorizations(
	authorizations : array(
		$client->webAuthorization(
			hash : 0,
			bot_id : 1908408083428720787,
			domain : 'PE61IkYyMfnHb7jF',
			browser : 'uQ167P8FYNELf5Di',
			platform : 'wdEpz9MHRWv0LDVY',
			date_created : 10,
			date_active : 52,
			ip : '127.0.0.1',
			region : 'zAByEYinugwcWOMS',
		),
	),
	users : array(
		$client->userEmpty(
			id : 6505360804016666984,
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
			id : -1840474200591446847,
			access_hash : 695515822895315935,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DPx6AvXLgla4qfsc',
					reason : 'quAaI87PUzxh4nmZ',
					text : 'taPjvIplJi1wYZ4S',
				),
			),
			bot_inline_placeholder : 'JHOVtlfI95YbMKnv',
			lang_code : 'xBHYk5a4ZfwXpuIS',
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
				color : 2,
				background_emoji_id : -8957919023568261305,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : -17624378014084562,
			),
			bot_active_users : 17,
			bot_verification_icon : -2022813173202575551,
			send_paid_messages_stars : 2872333592307018750,
		),
	),
);
```