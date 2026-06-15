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
			bot_id : 3274327333988794841,
			domain : 'qFzxDluebcdQ13g0',
			browser : 'Qlx2JHVqgrTm491C',
			platform : 'tdKLHwUzDXyEco9v',
			date_created : 85,
			date_active : 43,
			ip : '127.0.0.1',
			region : 'nigWPjsBq4wke2l8',
		),
	),
	users : array(
		$client->userEmpty(
			id : -3918655203649971247,
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
			id : 9178118260475555512,
			access_hash : -8610935243637827836,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ATjBtIS2cFfV9bwl',
					reason : 'ikWXLFBgoVaeJzyv',
					text : '6rNxz0ck2EnqSjOD',
				),
			),
			bot_inline_placeholder : 'PKkqG49UhSz18a5g',
			lang_code : 'dVFry60Hx9tvaKWq',
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : 7230091561936382520,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : -3184988303604827486,
			),
			bot_active_users : 13,
			bot_verification_icon : -1729183155533895964,
			send_paid_messages_stars : 3410461537860038018,
		),
	),
);
```