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
		link : 'bFBgJiWml6dVnPU8',
		admin_id : 644834404189764423,
		date : 84,
		start_date : 83,
		expire_date : 62,
		usage_limit : 16,
		usage : 54,
		requested : 13,
		subscription_expired : 76,
		title : 'CWYkynBhcXdaxG9V',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 80,
			amount : -7793857927670982732,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'NP5EQHxt9gBAR6bz',
		admin_id : 8185164182353430527,
		date : 62,
		start_date : 79,
		expire_date : 72,
		usage_limit : 0,
		usage : 26,
		requested : 69,
		subscription_expired : 100,
		title : 'P2JpKl9F5Ijzy06h',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 79,
			amount : 1465221110427013906,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4055373141745205659,
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
			id : 5583421303573415576,
			access_hash : -804302063330646247,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CMGrPBI2zYTkiuLp',
					reason : 'ZLdKa2Ob3BG0SVkw',
					text : 'FUZwSyqzE6Ja8vBj',
				),
			),
			bot_inline_placeholder : 'zGAoUHhtwge6ql1r',
			lang_code : 'u7D92EOsl8SirgJ4',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 75,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : -8442864491505578312,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : -2051643524023142106,
			),
			bot_active_users : 5,
			bot_verification_icon : 8974098402723669515,
			send_paid_messages_stars : 8986480810748575990,
		),
	),
);
```