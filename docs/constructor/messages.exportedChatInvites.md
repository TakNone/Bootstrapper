# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 211

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
	count : 35,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'sBzpFGIajnJhiyrS',
			admin_id : -6950387399606232021,
			date : 84,
			start_date : 30,
			expire_date : 43,
			usage_limit : 18,
			usage : 0,
			requested : 3,
			subscription_expired : 41,
			title : 'PHROrIdiLaoDzNf9',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 67,
				amount : -7702253689336583422,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 7089743933486586574,
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
			id : -5562133470442781440,
			access_hash : -712370373487002424,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lyBJZ6H7dP0Itzei',
					reason : 'AldG6eXn2CfwuaOZ',
					text : 'WcwEItfUuV4Y9JTz',
				),
			),
			bot_inline_placeholder : 'fCmLNRTxak4lX6AQ',
			lang_code : 'PnJHUQWtyB7kp3xD',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 56,
				background_emoji_id : -4158008797583331543,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -7856597476521519928,
			),
			bot_active_users : 24,
			bot_verification_icon : -8119841023702157404,
			send_paid_messages_stars : -8949988880396428471,
		),
	),
);
```