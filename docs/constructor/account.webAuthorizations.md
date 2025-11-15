# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 216

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
			bot_id : 6151407160739426980,
			domain : 'R5e3IyNZxos2uwzB',
			browser : 'g4bilEdFektjIJpa',
			platform : 'xVBqQOknelrLUDNC',
			date_created : 89,
			date_active : 65,
			ip : '127.0.0.1',
			region : 'muELzMKrvXJqIaPF',
		),
	),
	users : array(
		$client->userEmpty(
			id : -7196331360841689469,
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
			id : -5861019793797933118,
			access_hash : -891245145538293965,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Md792b1L0aelcjG3',
					reason : 'RGQr2hufLPMJFySU',
					text : 'AtgX5pDPYhqG2lEw',
				),
			),
			bot_inline_placeholder : '0PKzn91ENR7rqwFk',
			lang_code : 'sYfEq9elyoKZMdaV',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 68,
			color : $client->peerColor(
				color : 22,
				background_emoji_id : -2715434743016494279,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -8815334372425372718,
			),
			bot_active_users : 29,
			bot_verification_icon : 6571135595152455418,
			send_paid_messages_stars : -5472161499756100261,
		),
	),
);
```