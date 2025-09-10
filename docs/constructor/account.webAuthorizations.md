# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 214

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
			bot_id : -1609529059380526697,
			domain : '81KyZzek4dG0OaRr',
			browser : 'LnjVr9JHZzKSlt6u',
			platform : 'NBFevr271XdY8kwV',
			date_created : 97,
			date_active : 38,
			ip : '127.0.0.1',
			region : 'QnKGu7dzMfBvCtj4',
		),
	),
	users : array(
		$client->userEmpty(
			id : 8444764574097367688,
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
			id : -3410372108201843628,
			access_hash : -1358280549100141986,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'w38ILmKjD9XeCuWB',
					reason : 'YWLZFC3Rv8Xg50pj',
					text : 'pJXEwtG5eSaZFMO7',
				),
			),
			bot_inline_placeholder : 'BWjiQ8wulgEUK9hn',
			lang_code : 'fRT4jGLEkoSUib7g',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 4,
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -830469288343826493,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : 669649336269619815,
			),
			bot_active_users : 85,
			bot_verification_icon : 3859971971189477277,
			send_paid_messages_stars : 9038560195548098853,
		),
	),
);
```