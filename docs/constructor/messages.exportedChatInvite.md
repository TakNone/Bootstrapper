# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 211

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
		link : 'WifJP1l4FvUrECqK',
		admin_id : -7724613474192791266,
		date : 4,
		start_date : 74,
		expire_date : 65,
		usage_limit : 7,
		usage : 65,
		requested : 26,
		subscription_expired : 31,
		title : 'Wx9QtLraoB7KZeIs',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 45,
			amount : 3124993133156018142,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5607631336303762368,
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
			id : 2420213794472635277,
			access_hash : -3028631054869352677,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CVSrbaGm2gsdtw5y',
					reason : 'ItDuTNERHM85Wv2V',
					text : 'eAbBuXdv86ol5ct2',
				),
			),
			bot_inline_placeholder : 'TQ6U7X5ENqaiOGwn',
			lang_code : '2Sby1sWQ4ImB5Jic',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 18,
			color : $client->peerColor(
				color : 16,
				background_emoji_id : -1575857650210018684,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : 2476041270689898227,
			),
			bot_active_users : 13,
			bot_verification_icon : -9212002855717922109,
			send_paid_messages_stars : 4831391807288723326,
		),
	),
);
```