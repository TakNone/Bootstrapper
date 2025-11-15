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
			bot_id : -4954370587790196993,
			domain : '9xMBahYIGvjglKsX',
			browser : 'uK4LSwZy96cTigrf',
			platform : '7r0dcoKtPAFUa4wE',
			date_created : 16,
			date_active : 56,
			ip : '127.0.0.1',
			region : 'Lqlnkx507y6huKbs',
		),
	),
	users : array(
		$client->userEmpty(
			id : -688930968727906430,
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
			id : 8799540615445379495,
			access_hash : 2163616234950412795,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PhjfVp69roI5KGqY',
					reason : 'TIrVQK85nsS9y7uo',
					text : 'TYs3ek7uDCjyAa9B',
				),
			),
			bot_inline_placeholder : 'vZJtAKkwb5mTnl7V',
			lang_code : 'FD7iHj1QnIWacvBq',
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
				max_id : 87,
			),
			color : $client->peerColor(
				color : 59,
				background_emoji_id : 9005242431598047883,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -6685849597745157759,
			),
			bot_active_users : 87,
			bot_verification_icon : 1254480723164517069,
			send_paid_messages_stars : -8432667858805748723,
		),
	),
);
```