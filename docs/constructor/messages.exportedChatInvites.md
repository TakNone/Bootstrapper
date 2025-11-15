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
	count : 62,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'ylQKRXgBh73MS42b',
			admin_id : 6653797223243456849,
			date : 10,
			start_date : 87,
			expire_date : 78,
			usage_limit : 9,
			usage : 83,
			requested : 73,
			subscription_expired : 76,
			title : 'XqHruz3w0DFUMVdY',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 92,
				amount : -9074242856816146541,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : -5382395196582232315,
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
			id : 8682456805815442596,
			access_hash : -3218938827350122278,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'udGecFXL2oal0s4f',
					reason : 'mESkLVd40IDOWHjx',
					text : 'qSxOZIulPkyzbKr9',
				),
			),
			bot_inline_placeholder : '5j13WVGoIzMARx4E',
			lang_code : 'yOVvr8b0EIXu6M9x',
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
				max_id : 41,
			),
			color : $client->peerColor(
				color : 39,
				background_emoji_id : -2469958998633443945,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : 918026603809684235,
			),
			bot_active_users : 36,
			bot_verification_icon : 5163126003220682497,
			send_paid_messages_stars : 1508332896743256603,
		),
	),
);
```