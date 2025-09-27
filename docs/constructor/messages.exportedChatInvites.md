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
	count : 50,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'jTFQIk8P4WRu0b9z',
			admin_id : 4913826338672837523,
			date : 96,
			start_date : 78,
			expire_date : 48,
			usage_limit : 59,
			usage : 34,
			requested : 77,
			subscription_expired : 58,
			title : 'Ip1L8CurcdtAeThG',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 49,
				amount : -7733285026891283836,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : -5170821249412471029,
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
			id : -8120290937935653582,
			access_hash : -8953137370490673336,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fgxXebyFUj3BKHDk',
					reason : '8AL4eBnNdrPOHyMa',
					text : 'ZIwhY6B30HrWunNq',
				),
			),
			bot_inline_placeholder : 'U09lAOVkMWrDuvNe',
			lang_code : 'lXiq01TyDYABKu3E',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 47,
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -3379604203798708553,
			),
			profile_color : $client->peerColor(
				color : 13,
				background_emoji_id : 2645745540605144455,
			),
			bot_active_users : 59,
			bot_verification_icon : 4022115371165550520,
			send_paid_messages_stars : 131421205134978043,
		),
	),
);
```