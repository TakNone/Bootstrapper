# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 216

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
		link : 'e86AQ7apDTOrGwdI',
		admin_id : 2940124600300708841,
		date : 70,
		start_date : 87,
		expire_date : 19,
		usage_limit : 88,
		usage : 15,
		requested : 88,
		subscription_expired : 69,
		title : 'd0BuGeyzs8qJbOZK',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 4,
			amount : -959903465620014936,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'MUkKzW5wDlFOc8Pv',
		admin_id : -8994992446455630948,
		date : 63,
		start_date : 72,
		expire_date : 69,
		usage_limit : 52,
		usage : 71,
		requested : 98,
		subscription_expired : 1,
		title : 'Mg8q0i2ExeWslR4p',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 79,
			amount : 8778731267400410575,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9192667446181617927,
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
			id : -7467512029546783658,
			access_hash : -3324596486240598327,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vzVHy9gEKBxWtbYR',
					reason : '3c2TtmVPaNspB0ej',
					text : 'A8bR0HwtIqGg2pCa',
				),
			),
			bot_inline_placeholder : 'HldPxImRAwjF7Cf3',
			lang_code : 'fKIuXocNsaCRxDvU',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 97,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : 1817718932653356110,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : -4923105102652507214,
			),
			bot_active_users : 10,
			bot_verification_icon : 483393331622989425,
			send_paid_messages_stars : -2681916800480131502,
		),
	),
);
```