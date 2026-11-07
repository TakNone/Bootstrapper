# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 233

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
			bot_id : 2292557831847397137,
			domain : 'EsQbqjxoe6rDc3Hw',
			browser : 'Ivb8QZHhtGgzdFkc',
			platform : 'yVvKePzju3UdTa1x',
			date_created : 16,
			date_active : 31,
			ip : '127.0.0.1',
			region : '6sXWa4UwvbTnyLpS',
		),
	),
	users : array(
		$client->userEmpty(
			id : 4123797482579821835,
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
			bot_forum_sidebar : true,
			id : -1460500231712085328,
			access_hash : 7240230130054566569,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'JZ4KG3aLyf9ekhqH',
					reason : 'urX3G5KnI8Tsifpd',
					text : 'b8HSMqLQrFmzD4NW',
				),
			),
			bot_inline_placeholder : 'kiMVD41rXfzxm6YL',
			lang_code : 'pwXemyurRWJ0gtvh',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 8,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 8133119311330830565,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : 7225115003560363999,
			),
			bot_active_users : 27,
			bot_verification_icon : 1433589745278083417,
			send_paid_messages_stars : 2034202418970065076,
			linked_community_id : -36043799342996920,
		),
	),
);
```