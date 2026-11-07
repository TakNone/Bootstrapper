# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 233

```tl
messages.exportedChatInvite#1871be50 invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Info about the chat invite |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Example

```php
$messagesExportedChatInvite = $client->messages->exportedChatInvite(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'x19DHXRzuM53QlFd',
		admin_id : 1347002317233207063,
		date : 27,
		start_date : 13,
		expire_date : 12,
		usage_limit : 36,
		usage : 64,
		requested : 66,
		subscription_expired : 89,
		title : '4L2ZVx3OTubeQI8t',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 43,
			amount : -4734280686497107520,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4555002131585288225,
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
			bot_guard : true,
			bot_forum_sidebar : true,
			id : -3003474496081992909,
			access_hash : 5433253999718438505,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BLu8Zs3MTfoDp027',
					reason : 'n2St5HiIDLUEluya',
					text : 'AaXBxI7vWefuy48P',
				),
			),
			bot_inline_placeholder : 'U6tZ1iKor7ng9pPv',
			lang_code : '7Rly3HmpKCMTEoXB',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 50,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 3396556994845261509,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -1492964405292881512,
			),
			bot_active_users : 41,
			bot_verification_icon : -6850084079482988142,
			send_paid_messages_stars : 56987312143873717,
			linked_community_id : 4754805469232975061,
		),
	),
);
```