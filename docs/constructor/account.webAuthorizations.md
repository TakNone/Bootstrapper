# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 211

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
			hash : -5651976501009175754,
			bot_id : -2791868494769827271,
			domain : 'y80cTm2nexgPpYtM',
			browser : '9PywblJTW73h4vam',
			platform : '8xMGXgroKlntkUNu',
			date_created : 24,
			date_active : 81,
			ip : '127.0.0.1',
			region : 'cewBLQtRIY1aUuXO',
		),
	),
	users : array(
		$client->userEmpty(
			id : 1368954164449903222,
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
			id : -7347292735876978511,
			access_hash : 3638007214162989529,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6iAhyIz0rBECQ8bJ',
					reason : 'YTjUJVyKcP1FNsXE',
					text : 'B0rpv6wSHaTU1qlV',
				),
			),
			bot_inline_placeholder : 'sLY90OXhiCWKgqwF',
			lang_code : 'CV2nZSHrsBFqUEQl',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 87,
				background_emoji_id : -9100785185632650413,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -3126708872732491257,
			),
			bot_active_users : 85,
			bot_verification_icon : -612741971162850542,
			send_paid_messages_stars : -8773686674810646528,
		),
	),
);
```