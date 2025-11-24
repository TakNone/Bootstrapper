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
	count : 85,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'yDWXnq9lpuFHiUIY',
			admin_id : -7939485943206310765,
			date : 35,
			start_date : 70,
			expire_date : 99,
			usage_limit : 71,
			usage : 9,
			requested : 65,
			subscription_expired : 70,
			title : 'NgmnZP3VyvFOMbJ7',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 81,
				amount : -5861483759885483995,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : -3097726778627956653,
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
			id : -6488170452692537087,
			access_hash : -1297557434668008014,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BYeluW8sVJPFDrLH',
					reason : 'gtJVmyPBGO3s1ZLv',
					text : 'peU2vA67Ot8DuVRr',
				),
			),
			bot_inline_placeholder : 'Mupaf1NPzSokhBVT',
			lang_code : 'lSA0u5Ye9c2vPnXU',
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
				color : 52,
				background_emoji_id : 7663380316274903744,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -4280320451847599712,
			),
			bot_active_users : 12,
			bot_verification_icon : -8224799276634748308,
			send_paid_messages_stars : -2402926946447886840,
		),
	),
);
```