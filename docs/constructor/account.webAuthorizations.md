# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 218

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
			bot_id : 2360641459113118528,
			domain : 'k1aS3pDZMsvluCw5',
			browser : '5VZh0HXDxniayJ3o',
			platform : 'JCwODXTfbHsRpivY',
			date_created : 29,
			date_active : 88,
			ip : '127.0.0.1',
			region : 'VWBTxwS1b72R3jvP',
		),
	),
	users : array(
		$client->userEmpty(
			id : 3523248799006099352,
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
			id : 3205717670089346942,
			access_hash : -6922323256281535288,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KwJP6NdfzxABmgXF',
					reason : 'pQb670R5v3C1tuEJ',
					text : 'YlMDadvKRGpJSNhL',
				),
			),
			bot_inline_placeholder : 'rUPKTflX8SoVJMnB',
			lang_code : 'J2IMO4TVCPhqbSQk',
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
				max_id : 55,
			),
			color : $client->peerColor(
				color : 84,
				background_emoji_id : 1061514688480714928,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 5281137180884502060,
			),
			bot_active_users : 80,
			bot_verification_icon : 2757018416067267100,
			send_paid_messages_stars : 1170852289778026251,
		),
	),
);
```