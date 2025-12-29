# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 218

```tl
messages.exportedChatInvite#1871be50 invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Info about the chat invite |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Example

```php
$messagesExportedChatInvite = $client->messages->exportedChatInvite(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'bu6Wd5rvjyqzGhf4',
		admin_id : 8131909749520561342,
		date : 100,
		start_date : 21,
		expire_date : 74,
		usage_limit : 33,
		usage : 59,
		requested : 1,
		subscription_expired : 14,
		title : 'NBYUXqoGcdA4CPvp',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 56,
			amount : 5045937416980233007,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1936269607453215937,
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
			id : -494912859107311775,
			access_hash : -7091553000582520044,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'a5QqFIKZ83bxCEvm',
					reason : 'JndQFID73z0Wcutm',
					text : 'A4vPUNjeFdXnGoRg',
				),
			),
			bot_inline_placeholder : 'wIei2dDvXpkLtJBC',
			lang_code : 'S9T6nYlmHjhDirt1',
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
				max_id : 53,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : -8094786628764538016,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -7769515616590425949,
			),
			bot_active_users : 77,
			bot_verification_icon : -8206433652478309251,
			send_paid_messages_stars : 1153926754698916198,
		),
	),
);
```