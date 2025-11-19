# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 218

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
		link : 'yfTQDlXWcnOvZLt3',
		admin_id : -9050332348117392528,
		date : 54,
		start_date : 55,
		expire_date : 66,
		usage_limit : 85,
		usage : 51,
		requested : 54,
		subscription_expired : 17,
		title : 'OwIBl1ygubH0ihAU',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 49,
			amount : -2862617296742027384,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2768023358992920843,
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
			id : 5529919001060055212,
			access_hash : -8187390532761532887,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l6AhnFTf9ps20Q1u',
					reason : '9ERhLymJPjYH5SsI',
					text : 'wrNjTavJhgP7fmz8',
				),
			),
			bot_inline_placeholder : 'tJINGQ7dFLDlKhe6',
			lang_code : 'gfDGJYnwERHox7As',
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
				max_id : 27,
			),
			color : $client->peerColor(
				color : 39,
				background_emoji_id : 4309553344306670915,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : -6695624515390367882,
			),
			bot_active_users : 80,
			bot_verification_icon : 8996346303508564763,
			send_paid_messages_stars : -2686211191884555971,
		),
	),
);
```