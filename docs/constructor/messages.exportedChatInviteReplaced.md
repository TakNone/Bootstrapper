# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 229

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
		link : 'kITe7hyszWaUFVG3',
		admin_id : -7855204973370549027,
		date : 40,
		start_date : 78,
		expire_date : 0,
		usage_limit : 32,
		usage : 50,
		requested : 30,
		subscription_expired : 98,
		title : 'qAvhrkLKnCoZxuWI',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 42,
			amount : 1778946083670231005,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '9XhtJeU48CMgdT7x',
		admin_id : 3369821216439527793,
		date : 47,
		start_date : 99,
		expire_date : 23,
		usage_limit : 69,
		usage : 63,
		requested : 13,
		subscription_expired : 78,
		title : 'xvrhnJHXb4pcf9uY',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 43,
			amount : 5212603598113600182,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1152451048252116919,
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
			id : 3893861186423939170,
			access_hash : 2121892885944134318,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'f2lr07eAiJE3FqOQ',
					reason : 'yF2tPEgYSkHMwv3l',
					text : 'xq2HXQ538RjYgKGh',
				),
			),
			bot_inline_placeholder : 'jxh70HaeB2TUGWYX',
			lang_code : 'ANBc6M0U8HzIdija',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : -2498148502188406755,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : 2533081231387214008,
			),
			bot_active_users : 82,
			bot_verification_icon : 1772052231761505847,
			send_paid_messages_stars : 3924770079950203702,
			linked_community_id : 767629968259584387,
		),
	),
);
```