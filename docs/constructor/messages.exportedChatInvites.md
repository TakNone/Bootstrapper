# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 225

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
	count : 84,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'vk8fXEiA0zqbUQuN',
			admin_id : 7258007165634592917,
			date : 65,
			start_date : 41,
			expire_date : 49,
			usage_limit : 26,
			usage : 84,
			requested : 16,
			subscription_expired : 20,
			title : 'M2DIeNausZnC40L9',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 58,
				amount : 7781339140021213497,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 1258004576393230204,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : 156530714803936337,
			access_hash : -156761135412318801,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1zIQBKR26o3Gb9ry',
					reason : 'rR75XpZC6G9TwuME',
					text : 'CvihmlVwbjuZJK1X',
				),
			),
			bot_inline_placeholder : 'NKanXe9owLYTycDx',
			lang_code : 'yazC1ik7FLVmESJG',
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : 3966473293668503761,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 8773710631076754898,
			),
			bot_active_users : 46,
			bot_verification_icon : -5861964684700027776,
			send_paid_messages_stars : -6255945928836264701,
		),
	),
);
```