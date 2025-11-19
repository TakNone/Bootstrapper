# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 218

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
	count : 41,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'mpFWNRQCtcH2qx4o',
			admin_id : 3665472433411272777,
			date : 75,
			start_date : 38,
			expire_date : 55,
			usage_limit : 49,
			usage : 45,
			requested : 23,
			subscription_expired : 61,
			title : 'pucIhfboGq9nJLPH',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 10,
				amount : 6097260847856292128,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 4326136011413303777,
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
			id : 209218831661526166,
			access_hash : -6174067663970575195,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'c1t9nZBlykgUuwFz',
					reason : 'kc7W80Z9dUTfERiz',
					text : 'mvZF5TarXhBp4UEj',
				),
			),
			bot_inline_placeholder : 'ZdcG3BoUxCJb2eMw',
			lang_code : 'a7kIUz18FiKn6NAf',
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
				max_id : 65,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : 3095487904844049119,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -6422970994452226331,
			),
			bot_active_users : 5,
			bot_verification_icon : -4260784197024107501,
			send_paid_messages_stars : 4511528663641707452,
		),
	),
);
```