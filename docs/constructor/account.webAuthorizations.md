# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 222

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
			bot_id : 2632137621157562849,
			domain : 'g8yQNMJzIthEVfbB',
			browser : 'ijWLkoXn0QxyrvDO',
			platform : 'siOQCn1DtSpr2dU5',
			date_created : 56,
			date_active : 36,
			ip : '127.0.0.1',
			region : 'LfcIuvAJtQFkxV3l',
		),
	),
	users : array(
		$client->userEmpty(
			id : -1456810007911416295,
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
			id : -5358553738649021795,
			access_hash : -4749673361992176034,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bqE4vkDF09i6LTrs',
					reason : '89uiWNXOnRTVdZAh',
					text : 'LcBXafvOx3QWPG0V',
				),
			),
			bot_inline_placeholder : 'maRLijEWnVZx1DOc',
			lang_code : '2bK16XwCaVhIyLqD',
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
				max_id : 61,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 828315192429260597,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -1273045201858798618,
			),
			bot_active_users : 40,
			bot_verification_icon : 5507925961360636781,
			send_paid_messages_stars : -2084035288866358608,
		),
	),
);
```