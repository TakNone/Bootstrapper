# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 214

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
	count : 71,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'qlxXt0unCm2IA7YK',
			admin_id : -5895103279146461292,
			date : 73,
			start_date : 64,
			expire_date : 25,
			usage_limit : 44,
			usage : 49,
			requested : 97,
			subscription_expired : 27,
			title : 'W4CXc20S783sLGfK',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 21,
				amount : 7168646201820015265,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 6354790031987259254,
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
			id : -1068265131234423198,
			access_hash : 9072534620327547247,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hwrIAn1puGTVNiCa',
					reason : 'fPbAl4YGnim6X1BT',
					text : '1wuYTX8NStUyGnVm',
				),
			),
			bot_inline_placeholder : 'Pe4LkdMNom8JbZST',
			lang_code : 'tygRh4eVUGKDfipN',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 39,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 4901641097377843956,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : 3048761596287978656,
			),
			bot_active_users : 26,
			bot_verification_icon : 4398597000177728372,
			send_paid_messages_stars : 353944437358681248,
		),
	),
);
```