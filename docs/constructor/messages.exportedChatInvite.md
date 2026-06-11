# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 227

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
		link : 'pncyfDOLGmUvBeRj',
		admin_id : 872852144520485486,
		date : 17,
		start_date : 36,
		expire_date : 76,
		usage_limit : 37,
		usage : 88,
		requested : 71,
		subscription_expired : 51,
		title : '6SFwJh70HqDifVyk',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 43,
			amount : 4515399387803553691,
		),
	),
	users : array(
		$client->userEmpty(
			id : -973867025980808014,
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
			id : -384230383142322690,
			access_hash : -5924159885678916943,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4RydIpZaDtJSsior',
					reason : 'ukbZ1OceQyxICoMJ',
					text : 'aThMPUA58wV6QENe',
				),
			),
			bot_inline_placeholder : 'aWEwLpRftGDoBSmh',
			lang_code : 'yHWzkUqSeopiPV4h',
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
				max_id : 84,
			),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : 4679314320039620128,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 6123364859347420618,
			),
			bot_active_users : 78,
			bot_verification_icon : 6818163814611907577,
			send_paid_messages_stars : -2937857102353489501,
		),
	),
);
```