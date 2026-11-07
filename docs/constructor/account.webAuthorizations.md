# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 229

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
			bot_id : -7096653404315203476,
			domain : 'Uov8wuXCgFKxWj4z',
			browser : 'DKeAofVut6CZwyR1',
			platform : 'kTOoHhEi1UD8ALZ9',
			date_created : 26,
			date_active : 57,
			ip : '127.0.0.1',
			region : '69nRrFftNwMTXPby',
		),
	),
	users : array(
		$client->userEmpty(
			id : -4784018229781613113,
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
			id : 3501720240872819917,
			access_hash : -8309638937757065835,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cG69EjCKDR8siZu4',
					reason : 'jyBEk0XPHUfDOmwZ',
					text : 'YS5DxHbnwv8CLOAE',
				),
			),
			bot_inline_placeholder : 'XrmxZBKC4U5wHbvg',
			lang_code : 'RWvjy9XKbPh4g8w6',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 36,
				background_emoji_id : -1726906180971164681,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : -2582295212238188172,
			),
			bot_active_users : 91,
			bot_verification_icon : 4283216342450956142,
			send_paid_messages_stars : -3000597391429531666,
			linked_community_id : -2415032077357447077,
		),
	),
);
```