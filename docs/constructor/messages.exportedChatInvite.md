# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 222

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
		link : 'vt5qCTPR8zfSO4sb',
		admin_id : -310306813011749839,
		date : 65,
		start_date : 46,
		expire_date : 91,
		usage_limit : 21,
		usage : 59,
		requested : 67,
		subscription_expired : 66,
		title : 'X7cQ03JWV6e9BqlC',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 32,
			amount : 78387081041407557,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5131397956982129704,
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
			id : -526321879234543020,
			access_hash : 5587215909941550166,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QSPrOzTRXAGE7fJF',
					reason : 'CDopzuNShVa7TqBb',
					text : 'yH2jZ9OSqetD0mca',
				),
			),
			bot_inline_placeholder : 'FfLTOXrysMpRgNYi',
			lang_code : 'KzpM8fLnaRuYFr9V',
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
				color : 84,
				background_emoji_id : 6163446902206395429,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : -2598406341803005089,
			),
			bot_active_users : 22,
			bot_verification_icon : 1507841618918472177,
			send_paid_messages_stars : 1372721687814366305,
		),
	),
);
```