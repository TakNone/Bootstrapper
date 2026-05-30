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
	count : 9,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'lLzFA6Ygnb49UHVy',
			admin_id : -6815566230928807389,
			date : 37,
			start_date : 96,
			expire_date : 31,
			usage_limit : 14,
			usage : 44,
			requested : 74,
			subscription_expired : 88,
			title : 'amzj7MT4QWGvB6i1',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 68,
				amount : -1969323074735969539,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 3010232350999402095,
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
			id : 363157433023972989,
			access_hash : -6682211496101504608,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2fwM7nKHA9bmkhoZ',
					reason : '5yrKMhnHjPabm1Di',
					text : 'qgkNoSBCFIKHtpev',
				),
			),
			bot_inline_placeholder : 'OKxJXfbeB4hpca0E',
			lang_code : 'urt8qMeoWZKXGnzS',
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 4436625205908986824,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : -7275676181622702655,
			),
			bot_active_users : 95,
			bot_verification_icon : -9142500380092934735,
			send_paid_messages_stars : 1851370796204826656,
		),
	),
);
```