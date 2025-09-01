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
		link : '0ULxDQw6AyiVlqJb',
		admin_id : 7114274390178622169,
		date : 13,
		start_date : 5,
		expire_date : 50,
		usage_limit : 47,
		usage : 48,
		requested : 26,
		subscription_expired : 18,
		title : 'ajE8k29zwoB03dOF',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 67,
			amount : -7856412744897268766,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7421183944682081654,
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
			id : -2342261137757534590,
			access_hash : 8422490683625297001,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'omBgSGAfFd7N5uc9',
					reason : 'qm9aSZTBbxgJVdNW',
					text : 'OT2r715EDuPH9poK',
				),
			),
			bot_inline_placeholder : 'a1vR20sVM67bQSBp',
			lang_code : 'ezbhVgjCETP97aML',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 45,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : 3850706822141160083,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : -4045927889591865602,
			),
			bot_active_users : 1,
			bot_verification_icon : -682827153526358817,
			send_paid_messages_stars : -4098396131637372999,
		),
	),
);
```