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
	count : 44,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'MxAhu4DQrWEY62LP',
			admin_id : 7757400944715394203,
			date : 85,
			start_date : 25,
			expire_date : 69,
			usage_limit : 94,
			usage : 90,
			requested : 23,
			subscription_expired : 15,
			title : '2HZU6Ojh7mg1VdlQ',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 38,
				amount : -9180503100076833675,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : -2810382028383299405,
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
			id : 4856848953358077698,
			access_hash : -3602953128599997958,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0mCSlpJ9jq8BVyUv',
					reason : 'AMUBfrExzFYgTDGk',
					text : 'A4LTbFitM6Qc1xNd',
				),
			),
			bot_inline_placeholder : 'of0p93aXNuMnWU6G',
			lang_code : 'aeutp3XfkcEjZP2D',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 12,
			color : $client->peerColor(
				color : 76,
				background_emoji_id : 6238531135770970449,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : -9178232871925997213,
			),
			bot_active_users : 94,
			bot_verification_icon : 7002397805924858065,
			send_paid_messages_stars : -3139267770576505729,
		),
	),
);
```