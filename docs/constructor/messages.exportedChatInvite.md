# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 214

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
		link : 'dX2tgSVWujAkoaQr',
		admin_id : -415623032676110691,
		date : 61,
		start_date : 17,
		expire_date : 50,
		usage_limit : 61,
		usage : 41,
		requested : 17,
		subscription_expired : 88,
		title : 'u5Wo9Qx37g1YRvUK',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 17,
			amount : 312814439082366728,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6107304897093591050,
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
			id : -3990240487230108906,
			access_hash : -5001690941591807142,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Mb58gAmDntFEsaNL',
					reason : 'yfR7hHOK5plisrML',
					text : 'nHbYy6TQB0meMoWF',
				),
			),
			bot_inline_placeholder : '3l4ZNyzHIaEWcxK5',
			lang_code : '0lL68MFXqbH4TB1N',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 29,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : 8179188509222442125,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : 2810707893431172800,
			),
			bot_active_users : 34,
			bot_verification_icon : -2259749337199582630,
			send_paid_messages_stars : 7309375906285376677,
		),
	),
);
```