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
			hash : -781996866690169310,
			bot_id : -1462100183505037320,
			domain : '79yKzXtvoJrMGEC1',
			browser : 'DRIOo6giPXf2sSaT',
			platform : '4FPmWfHo9aCIUduS',
			date_created : 72,
			date_active : 81,
			ip : '127.0.0.1',
			region : 'cIjo7OyLrK9ekvE2',
		),
	),
	users : array(
		$client->userEmpty(
			id : 7429488727330952211,
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
			id : -4097980039296111528,
			access_hash : 6137149593034662989,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'x6dzwjSQUbCZ2Vpe',
					reason : 'v7fRgitjJhe3CPKc',
					text : 'iPxBWv0RtFqKMk2L',
				),
			),
			bot_inline_placeholder : 'VGakhSREDKZrXp78',
			lang_code : '860NynJ35YcfMLBe',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 8,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -7727308163336760513,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 389479993657163892,
			),
			bot_active_users : 58,
			bot_verification_icon : -2453246408403214277,
			send_paid_messages_stars : 7731772611040096307,
		),
	),
);
```