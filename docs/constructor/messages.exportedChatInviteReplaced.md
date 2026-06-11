# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 227

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
		link : 'BuQRwMdNKZ2DY8JL',
		admin_id : 4171763687453456831,
		date : 50,
		start_date : 82,
		expire_date : 24,
		usage_limit : 37,
		usage : 41,
		requested : 69,
		subscription_expired : 87,
		title : 'xXGj02vAVkMoP8dI',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 37,
			amount : -2569968012961875506,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'NK5OXx7FrZyBlfvA',
		admin_id : -7086858374663596266,
		date : 7,
		start_date : 6,
		expire_date : 74,
		usage_limit : 75,
		usage : 64,
		requested : 56,
		subscription_expired : 55,
		title : 'Dj0rFJdUHb7T2m6p',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 98,
			amount : -6360624135679570367,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3432520276511327857,
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
			bot_guard : true,
			id : 9101973391877203112,
			access_hash : 434290451508789931,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1LNszjrVQFoetG7B',
					reason : 'R9KtAm8Uc6FkrxTB',
					text : 'WAYo1Q603PZODatS',
				),
			),
			bot_inline_placeholder : 'o7DEjpkTBL3YfNXb',
			lang_code : 'QoCp5eDj9svIuA7d',
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
				max_id : 46,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 5358760168320842213,
			),
			profile_color : $client->peerColor(
				color : 83,
				background_emoji_id : -1601483681804752580,
			),
			bot_active_users : 24,
			bot_verification_icon : 9151603481912028004,
			send_paid_messages_stars : 2654727830553215566,
		),
	),
);
```