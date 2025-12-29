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
		link : '7yCRJhAD0aGi5Ve2',
		admin_id : 5883044605902337974,
		date : 20,
		start_date : 49,
		expire_date : 18,
		usage_limit : 37,
		usage : 11,
		requested : 9,
		subscription_expired : 15,
		title : 'NSQJekglObBw3Wdp',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 13,
			amount : -4757771473666960444,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'WF6KmEyigN3OI5RH',
		admin_id : -6459632566394372498,
		date : 79,
		start_date : 100,
		expire_date : 73,
		usage_limit : 26,
		usage : 79,
		requested : 15,
		subscription_expired : 77,
		title : 'IUjqKXlcWa0sC1gu',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 29,
			amount : 3179396710824860833,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5637163879141962738,
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
			id : 3046324665050905387,
			access_hash : 1541938805165372746,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jBSP0OfHretKvlud',
					reason : 'IdjHDQ6sVYbFhcRg',
					text : 'weUkWlIM7ycPOJiz',
				),
			),
			bot_inline_placeholder : 'K9Q0qUaXPty6OTeN',
			lang_code : 'G0ytSwhQopA9C4LB',
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
				max_id : 23,
			),
			color : $client->peerColor(
				color : 91,
				background_emoji_id : -6433422694029903313,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 603758551911180287,
			),
			bot_active_users : 93,
			bot_verification_icon : 6857624333303471618,
			send_paid_messages_stars : -1341175238916282388,
		),
	),
);
```