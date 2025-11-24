# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 218

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
		link : 'Azgt0yviPBh9KGnp',
		admin_id : 3287782449519511526,
		date : 34,
		start_date : 82,
		expire_date : 60,
		usage_limit : 41,
		usage : 23,
		requested : 13,
		subscription_expired : 2,
		title : 'BV3US9jPckDyOAwC',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 81,
			amount : 665463744676707139,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'wsYH2rXbQG34Zoli',
		admin_id : -8821571704222398124,
		date : 48,
		start_date : 22,
		expire_date : 28,
		usage_limit : 50,
		usage : 11,
		requested : 67,
		subscription_expired : 52,
		title : 'zNwx7OAZsBu4f9r0',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 73,
			amount : 216145424826587249,
		),
	),
	users : array(
		$client->userEmpty(
			id : 19888960409181354,
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
			id : -4534391258130813399,
			access_hash : -198303183837170613,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FLwmVohAEKcQ0uBI',
					reason : 'WGKdkxNv3rz0oA1F',
					text : 'tslfYGC6AaLBK7Tj',
				),
			),
			bot_inline_placeholder : 'TS0VQLgJUko5XtGs',
			lang_code : 'xmhuNW1RfzYoEcFI',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 7871509098873177672,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -3814342572140264440,
			),
			bot_active_users : 100,
			bot_verification_icon : -3661879906703359358,
			send_paid_messages_stars : -1708529716467534357,
		),
	),
);
```