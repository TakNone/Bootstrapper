# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 214

```tl
messages.exportedChatInviteReplaced#222600ef invite:ExportedChatInvite new_invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The replaced chat invite |
| <mark>new_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite that replaces the previous invite |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Example

```php
$messagesExportedChatInvite = $client->messages->exportedChatInviteReplaced(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'PH6Gio8l2zukQWL0',
		admin_id : 940050779561506551,
		date : 61,
		start_date : 54,
		expire_date : 15,
		usage_limit : 1,
		usage : 31,
		requested : 7,
		subscription_expired : 78,
		title : 'NmTjFaHYBPIxDkOG',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 8,
			amount : 4829839399381494465,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '1vEMP8kz7hp0Kjna',
		admin_id : 3873083761021868514,
		date : 76,
		start_date : 56,
		expire_date : 93,
		usage_limit : 56,
		usage : 26,
		requested : 6,
		subscription_expired : 79,
		title : '9cEZkOmazvheS2bC',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 92,
			amount : 3489542776729123319,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2624805262586297920,
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
			id : 8546339373942531725,
			access_hash : -382017700563279534,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'peY7uzLnXRGdEPKg',
					reason : 'o2ENHRxXSFJ98uPQ',
					text : 'LpuoWvmRUANV6faD',
				),
			),
			bot_inline_placeholder : 'cyZajG64gRJxdefQ',
			lang_code : 'PGDfWxkTMdwrFEh5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 98,
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 150083757460787170,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 4746644251494773890,
			),
			bot_active_users : 44,
			bot_verification_icon : -3062215046676425864,
			send_paid_messages_stars : 6098384737919379544,
		),
	),
);
```