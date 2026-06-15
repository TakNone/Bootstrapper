# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 227

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
			bot_id : -2170504076391629531,
			domain : 'kN2hYpD4dUrimMlz',
			browser : 'RDue6mIBlzCTaLrf',
			platform : 'SztOxjeKvJ397fRl',
			date_created : 28,
			date_active : 41,
			ip : '127.0.0.1',
			region : 'BSvprxsOXDu0R3YM',
		),
	),
	users : array(
		$client->userEmpty(
			id : 7504378566152473518,
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
			id : -4455577250689658421,
			access_hash : -6721099670655902323,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HvA10cwUB8N2u5me',
					reason : 'Ot8Ypkn6Ey9IlcC2',
					text : 'cQBn3eXF6YThpyVl',
				),
			),
			bot_inline_placeholder : 'MWG9m0K7pVi48bfJ',
			lang_code : '6ZsrntopR9MiA5wN',
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
				max_id : 91,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : 4307992761971098596,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -7637952198310443052,
			),
			bot_active_users : 52,
			bot_verification_icon : -5751058288583124937,
			send_paid_messages_stars : -8664672911572729848,
		),
	),
);
```