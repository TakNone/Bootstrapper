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
			hash : -9214695455641055754,
			bot_id : -1219561815891143634,
			domain : 'aYp2WjzXGOI6SK1H',
			browser : 'V8ifg7nxs4h9XQda',
			platform : 'XqToswgrtNFnRp10',
			date_created : 63,
			date_active : 81,
			ip : '127.0.0.1',
			region : 'SIU7sfb3c4HDhXqj',
		),
	),
	users : array(
		$client->userEmpty(
			id : -5996412342499273503,
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
			id : -4639816757092962395,
			access_hash : 5665130134684364397,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nWlLi8hSFdBj5GQv',
					reason : '8THajiE160ASc94g',
					text : 'TFh7IKlray9bR2mk',
				),
			),
			bot_inline_placeholder : '4nXa7UTDBqFzsVKd',
			lang_code : 'mKQ18Lo9cgZnuhJp',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 86,
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -3271969442356225197,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : 8616593061142110159,
			),
			bot_active_users : 17,
			bot_verification_icon : 5849257865015593419,
			send_paid_messages_stars : 6609484710406023164,
		),
	),
);
```