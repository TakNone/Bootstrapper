# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 229

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
	count : 50,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'DrC3E6jQHLUm25Vv',
			admin_id : -4240344350375973500,
			date : 43,
			start_date : 37,
			expire_date : 20,
			usage_limit : 42,
			usage : 13,
			requested : 98,
			subscription_expired : 75,
			title : 'pmMIL2wOFE05c486',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 46,
				amount : -2136535285192163216,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : -186739189039452346,
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
			id : 272255432821564813,
			access_hash : -4789005582553648202,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HS5xM19NK0YFOzQn',
					reason : 'EkizCvOIfGYtPpNW',
					text : 'XD5SHe7fWCaAb6LI',
				),
			),
			bot_inline_placeholder : 'wPIla0czME5fxG7A',
			lang_code : 'GYudxNshqOKZwIQ1',
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
				max_id : 5,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -2404716506912907959,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : 5123776426488830624,
			),
			bot_active_users : 60,
			bot_verification_icon : -938482585885377348,
			send_paid_messages_stars : -3396970884488275225,
			linked_community_id : -4246013081470446250,
		),
	),
);
```