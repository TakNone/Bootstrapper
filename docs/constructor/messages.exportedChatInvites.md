# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 216

```tl
messages.exportedChatInvites#bdc62dcc count:int invites:Vector<ExportedChatInvite> users:Vector<User> = messages.ExportedChatInvites;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of invites exported by the admin |
| <mark>invites</mark> | [`Vector<ExportedChatInvite>`](type/ExportedChatInvite) | Exported invites |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about the admin |

---

## Type

[messages.ExportedChatInvites](type/messages.ExportedChatInvites)

---

## Example

```php
$messagesExportedChatInvites = $client->messages->exportedChatInvites(
	count : 26,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'emnaK4tiluU321jJ',
			admin_id : 4912637765520056027,
			date : 64,
			start_date : 32,
			expire_date : 84,
			usage_limit : 94,
			usage : 79,
			requested : 58,
			subscription_expired : 36,
			title : 'uSGm0ZEk4J7KWYqc',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 79,
				amount : 5595919212797009614,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 1350647911794682859,
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
			id : -3090194423067978118,
			access_hash : 2301647697284475975,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lijKyc69ufTnI8Y1',
					reason : 'uhsXQeCzgAMYdn48',
					text : 'j4vs8GTAIwS2YkmM',
				),
			),
			bot_inline_placeholder : 'txDEdyUc0oRzGZ98',
			lang_code : 'Op35EygB4Rjt81VG',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 79,
			color : $client->peerColor(
				color : 23,
				background_emoji_id : -3690877893222184473,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 8669804042720090402,
			),
			bot_active_users : 75,
			bot_verification_icon : -2195430948776520633,
			send_paid_messages_stars : 8591317965395467392,
		),
	),
);
```