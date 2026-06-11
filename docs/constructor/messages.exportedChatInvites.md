# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 227

```tl
messages.exportedChatInvites#bdc62dcc count:int invites:Vector<ExportedChatInvite> users:Vector<User> = messages.ExportedChatInvites;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of invites exported by the admin |
| <mark>invites</mark> | [`Vector<ExportedChatInvite>`](type/ExportedChatInvite) | Exported invites |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about the admin |

---

## Type

[messages.ExportedChatInvites](type/messages.ExportedChatInvites)

---

## Example

```php
$messagesExportedChatInvites = $client->messages->exportedChatInvites(
	count : 84,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'scCn4Mf9hHil5SNz',
			admin_id : 558192781284444546,
			date : 57,
			start_date : 84,
			expire_date : 3,
			usage_limit : 40,
			usage : 14,
			requested : 28,
			subscription_expired : 45,
			title : 'Kyob1BDmzQgXRCn8',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 6,
				amount : -2169184815744930712,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 2510422109226096504,
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
			id : 7624801067696949719,
			access_hash : 1227855031750316148,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gS3uKR85U76Y1qhB',
					reason : 'R7UHCk1X0GJwtE8Z',
					text : 'YwNeArlp6u8Dbo0V',
				),
			),
			bot_inline_placeholder : 'kA7SR5YgM4Pyh2oW',
			lang_code : 'xUQEmZnRB6cN8S0H',
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
				max_id : 59,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : -1665263118183273288,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : 2762229112175068175,
			),
			bot_active_users : 98,
			bot_verification_icon : -6758802894268748027,
			send_paid_messages_stars : -8900868227647093641,
		),
	),
);
```