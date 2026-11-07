# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 233

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
		link : 'eQUkHPO6aYu2tnqS',
		admin_id : 8337088517441446687,
		date : 17,
		start_date : 63,
		expire_date : 85,
		usage_limit : 83,
		usage : 5,
		requested : 21,
		subscription_expired : 77,
		title : 'UaZSu2RtMCqFbPg9',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 52,
			amount : -4634965122494721633,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'ZcoYMD8jPWFySGxv',
		admin_id : 4687784157810967274,
		date : 26,
		start_date : 77,
		expire_date : 24,
		usage_limit : 91,
		usage : 2,
		requested : 30,
		subscription_expired : 81,
		title : 'EyQHfxTJB9hwCmpA',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 76,
			amount : -6504721312567857425,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4165843772046961326,
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
			bot_forum_sidebar : true,
			id : -5112860107224375107,
			access_hash : -4313683572984244941,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rJT5A8ZbkmsOYc0w',
					reason : 'zuGPCf8yIUcqwFD1',
					text : 'AQlrfwvDB9HaKsJq',
				),
			),
			bot_inline_placeholder : '5jSLGQRVatyEUB0Y',
			lang_code : 'YsSxZg8H7QCad9Lh',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 76,
			),
			color : $client->peerColor(
				color : 90,
				background_emoji_id : 1821832237893194941,
			),
			profile_color : $client->peerColor(
				color : 22,
				background_emoji_id : 856672707068160556,
			),
			bot_active_users : 73,
			bot_verification_icon : -2825410365769335705,
			send_paid_messages_stars : 2639417153827321864,
			linked_community_id : 4880700513096464452,
		),
	),
);
```