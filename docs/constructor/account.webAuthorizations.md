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
			bot_id : 4877532226464132822,
			domain : 'k7pdj8zDo90WNfZT',
			browser : 'PBAmqxMcgJHQpwrE',
			platform : 'OlVhia519MPe36YE',
			date_created : 77,
			date_active : 60,
			ip : '127.0.0.1',
			region : 'BPceMlDyYai6fVLv',
		),
	),
	users : array(
		$client->userEmpty(
			id : -1955862077867994932,
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
			id : -3503182533606807254,
			access_hash : -3994931050404477141,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YSLXrUnt8J7lHEZ6',
					reason : 'LUviHMRoFjTqYapN',
					text : '4gut0fyJToZd2w6x',
				),
			),
			bot_inline_placeholder : 'wrJM8npykBGN42eE',
			lang_code : 'wkyiSn4Dpv8EL9ct',
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
				max_id : 48,
			),
			color : $client->peerColor(
				color : 71,
				background_emoji_id : -2312625330163538431,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -267244548266547411,
			),
			bot_active_users : 9,
			bot_verification_icon : 2408710631927099856,
			send_paid_messages_stars : -4325630372580139814,
		),
	),
);
```