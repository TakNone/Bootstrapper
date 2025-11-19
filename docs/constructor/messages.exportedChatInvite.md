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
		link : 'Biek2Ilu6FcURfH4',
		admin_id : 3130677203185315927,
		date : 46,
		start_date : 96,
		expire_date : 11,
		usage_limit : 32,
		usage : 100,
		requested : 48,
		subscription_expired : 12,
		title : 'NbfvsUO8wW2ITZj7',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 52,
			amount : -2191542287317496501,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5928687332700039155,
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
			id : 3408394367467872235,
			access_hash : -7640481013609088191,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7uF3rBZm8sej6JIE',
					reason : 'sfutaw4KzgdLT0W6',
					text : 'yVgxlWrJqRH5nNhv',
				),
			),
			bot_inline_placeholder : '75yRgvniMV0L1DzX',
			lang_code : 'si5er7Y2dwQmovkh',
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
				max_id : 95,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 5133031579752337336,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -2308297432980883629,
			),
			bot_active_users : 71,
			bot_verification_icon : -4384640662832189684,
			send_paid_messages_stars : -6286302969310134713,
		),
	),
);
```