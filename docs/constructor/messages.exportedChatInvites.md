# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 222

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
	count : 100,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'tgfN6DhUwkx1A8PF',
			admin_id : 770233584444257696,
			date : 7,
			start_date : 88,
			expire_date : 47,
			usage_limit : 100,
			usage : 10,
			requested : 24,
			subscription_expired : 60,
			title : 'TUQiAKJbx7ROeELC',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 32,
				amount : 7356316499431412381,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : -5969372691450550091,
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
			id : -1829922141136171591,
			access_hash : 5816786363190707092,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ohSTuNHL3G9FsbPl',
					reason : 'YVkF4gKiI1awvfSB',
					text : 'Anbfld4qPNa1wQ97',
				),
			),
			bot_inline_placeholder : 'kYl14T83cMKiqBoz',
			lang_code : 'sNIWXBZnEAfYeRlL',
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
				max_id : 35,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : -5479538945874103402,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : 2736038929053792270,
			),
			bot_active_users : 62,
			bot_verification_icon : 5501636082810668586,
			send_paid_messages_stars : 8052338134761799666,
		),
	),
);
```