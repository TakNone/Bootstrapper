# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 225

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
		link : 'wPbfnF8zrc6aeY5I',
		admin_id : -8125839414373078906,
		date : 68,
		start_date : 84,
		expire_date : 53,
		usage_limit : 28,
		usage : 36,
		requested : 6,
		subscription_expired : 62,
		title : 'QRZ1pweAjHUIacbP',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 90,
			amount : -2683867727039991853,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4185302609940246882,
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
			id : -8379690176920521944,
			access_hash : -8282290682386470313,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SEtikhuNboMGRQfc',
					reason : 'xg4REjVeXlUnAOGw',
					text : 'auN3DQJ5jifhZYWR',
				),
			),
			bot_inline_placeholder : 'qN2Vx8P3FoRXlLgM',
			lang_code : 'eagJN6LIOSsUn0hE',
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
				max_id : 96,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : -3977879854295354663,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 5113544677299781354,
			),
			bot_active_users : 8,
			bot_verification_icon : 539717182126979248,
			send_paid_messages_stars : 1581493105142181779,
		),
	),
);
```