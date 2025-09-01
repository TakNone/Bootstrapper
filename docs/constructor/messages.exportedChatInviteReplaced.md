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
		link : 'tkxAJTaE47LXG1py',
		admin_id : 8126375223984908997,
		date : 24,
		start_date : 63,
		expire_date : 97,
		usage_limit : 50,
		usage : 27,
		requested : 59,
		subscription_expired : 85,
		title : 'BNytjLr2AT31n6Yb',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 12,
			amount : -418210052447756530,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'st8Ipe1oDxvkgfLE',
		admin_id : 7567453094625268893,
		date : 57,
		start_date : 14,
		expire_date : 3,
		usage_limit : 84,
		usage : 93,
		requested : 72,
		subscription_expired : 98,
		title : 'PLi2gtUfZmW0VTjA',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 83,
			amount : 5997823007586016418,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5782318771023193007,
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
			id : -2946788849006855171,
			access_hash : -3083728308807171945,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kNZH2K6BoO85SWwm',
					reason : '1LA7sIhaUk6V38dK',
					text : 'DsW134dLlKeRUBTo',
				),
			),
			bot_inline_placeholder : 'iA40uDdxTClyzXSs',
			lang_code : 'CxsqWXr7g21JzQp4',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 82,
			color : $client->peerColor(
				color : 14,
				background_emoji_id : -6540695741517704037,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : -3049644862957185918,
			),
			bot_active_users : 25,
			bot_verification_icon : -6441391211732302841,
			send_paid_messages_stars : 5294272661923201492,
		),
	),
);
```