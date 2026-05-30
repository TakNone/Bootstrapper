# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 225

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
		link : 'OUBS9QLMbdyq3cGD',
		admin_id : 859471446373999036,
		date : 40,
		start_date : 36,
		expire_date : 48,
		usage_limit : 88,
		usage : 52,
		requested : 73,
		subscription_expired : 10,
		title : 'jQsRpkHNcGaL3lJE',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 54,
			amount : 1504686829662929153,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'wiMCWOXjKZlQbrm7',
		admin_id : 3665085419543646240,
		date : 34,
		start_date : 64,
		expire_date : 10,
		usage_limit : 51,
		usage : 33,
		requested : 62,
		subscription_expired : 83,
		title : 'TRutQ4hegAa2YIEP',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 14,
			amount : -7640249241494281903,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3521068297917720561,
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
			id : -6092665859867718041,
			access_hash : -5731759263421021113,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'C9JmlVxOyEP4cX63',
					reason : 'NWHVY60DB1hFL9gS',
					text : 'wWzX4B6Rd0Hursph',
				),
			),
			bot_inline_placeholder : '0U6KW1fkTtrEgezN',
			lang_code : 'WnR4mAlFEPrDzqM6',
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
				max_id : 87,
			),
			color : $client->peerColor(
				color : 39,
				background_emoji_id : -2961040657364535997,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : 6936189085232788246,
			),
			bot_active_users : 90,
			bot_verification_icon : -5965986047201584054,
			send_paid_messages_stars : 7018538734831554842,
		),
	),
);
```