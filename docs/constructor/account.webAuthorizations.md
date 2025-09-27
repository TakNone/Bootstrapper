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
			bot_id : -8197824525121256957,
			domain : 'g8qaBiHLrhEvwN03',
			browser : 'dv3aH2YNkz4oTE6R',
			platform : 'QrknITRD1tuc3EWm',
			date_created : 71,
			date_active : 32,
			ip : '127.0.0.1',
			region : 'anSIEhpTDQPfb5v1',
		),
	),
	users : array(
		$client->userEmpty(
			id : 1534401644829770485,
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
			id : 6846156006769825558,
			access_hash : 972515171236362444,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8glRqodVGa2hULKn',
					reason : 'MGCr4AWHNuyq2RPF',
					text : '5ODkLqWEFa4Syo16',
				),
			),
			bot_inline_placeholder : '6tOCIyNhTYr27XPK',
			lang_code : '5CmHqZPx2E6MeDop',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 67,
			color : $client->peerColor(
				color : 22,
				background_emoji_id : 1749036428478674106,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : -4046057824049460278,
			),
			bot_active_users : 27,
			bot_verification_icon : -849694059521187392,
			send_paid_messages_stars : 6328295942456956682,
		),
	),
);
```