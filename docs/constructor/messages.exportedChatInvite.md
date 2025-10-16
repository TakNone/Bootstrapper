# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 216

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
		link : 'o8BE54rX9pWjF3aT',
		admin_id : -6301025021730974892,
		date : 95,
		start_date : 55,
		expire_date : 74,
		usage_limit : 1,
		usage : 85,
		requested : 66,
		subscription_expired : 84,
		title : 'D8qHwgypITnliRC0',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 89,
			amount : 2313209354973199476,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4377619560369789598,
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
			id : -7810664724068837661,
			access_hash : 8166530305958431862,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0xNeEuwgbDav61Uh',
					reason : 'DNLhE2nGb78UorSx',
					text : 'gThiDNZR9upevmLq',
				),
			),
			bot_inline_placeholder : 'Fo2lQ6atUvdq9Tif',
			lang_code : 'g6ieJRWQnMhAsdb3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 9,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 3488936353923302657,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 5712466640957103719,
			),
			bot_active_users : 17,
			bot_verification_icon : -1277424562087611172,
			send_paid_messages_stars : -8042467402414099166,
		),
	),
);
```