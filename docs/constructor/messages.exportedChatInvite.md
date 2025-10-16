# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 216

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
		link : '694ofm5pRt0LruMx',
		admin_id : 922189722232703422,
		date : 35,
		start_date : 26,
		expire_date : 63,
		usage_limit : 16,
		usage : 5,
		requested : 57,
		subscription_expired : 90,
		title : 'HVWAjxucy2eOCPvK',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 47,
			amount : 8781230323085770635,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2416711332946411052,
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
			id : -424216697927965272,
			access_hash : 1861919547469879845,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VbGwpmsAMli7nQqU',
					reason : 'jcbwPuZo3Cnahvt6',
					text : 'DdWVIPs2XQ9eknhz',
				),
			),
			bot_inline_placeholder : '2iXNEfYzFQ60MsUe',
			lang_code : 'RGsjpvAt0ZFXmqKr',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 19,
			color : $client->peerColor(
				color : 2,
				background_emoji_id : -8631067545290560162,
			),
			profile_color : $client->peerColor(
				color : 48,
				background_emoji_id : -1571071400929534209,
			),
			bot_active_users : 63,
			bot_verification_icon : 4124980384848198018,
			send_paid_messages_stars : -3893606774585439034,
		),
	),
);
```