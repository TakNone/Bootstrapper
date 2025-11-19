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
		link : 'qZCoShxKEYDbUt8j',
		admin_id : 2052910631511236128,
		date : 11,
		start_date : 41,
		expire_date : 76,
		usage_limit : 73,
		usage : 35,
		requested : 71,
		subscription_expired : 8,
		title : '6LdKXbJrTuDfZ0Pa',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 96,
			amount : 8347129924776850851,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'y0eI7Y24APi6okh8',
		admin_id : -7012665737861017747,
		date : 35,
		start_date : 63,
		expire_date : 34,
		usage_limit : 58,
		usage : 44,
		requested : 50,
		subscription_expired : 87,
		title : 'VrenKlU0B6uG5gFo',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 6,
			amount : 6367059185043987405,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7067965295467195465,
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
			id : -4477998100340848107,
			access_hash : -3652869226664737700,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cB2TE4q7NmvLPIF6',
					reason : '9XTw42YqZ3HryExm',
					text : 'hPUDcdSkH9zV4nGg',
				),
			),
			bot_inline_placeholder : 'ZceAEy9mUM7H56fQ',
			lang_code : 'Yys5f1Ng6cBHKJ79',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : -2886651554519554530,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : 4564793336468972556,
			),
			bot_active_users : 42,
			bot_verification_icon : -5463680444520495010,
			send_paid_messages_stars : 8463043084260207358,
		),
	),
);
```