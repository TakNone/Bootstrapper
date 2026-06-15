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
	count : 8,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : '25qicze3mU1KVYBh',
			admin_id : -7554814378939133008,
			date : 52,
			start_date : 85,
			expire_date : 92,
			usage_limit : 32,
			usage : 81,
			requested : 30,
			subscription_expired : 97,
			title : 'zlNVg9FwxHXQ4rso',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 12,
				amount : 3036442018041916429,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 8977618274364757443,
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
			id : 2577032233937800514,
			access_hash : 5822479674142233474,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '89rFVUgqQX2JmcI5',
					reason : 'vX8ugGwiJEIcrNZf',
					text : 'Djdas6EhKqlfVo5r',
				),
			),
			bot_inline_placeholder : 'tJWHf6DrCXau9Sz8',
			lang_code : '09wAVrpg351RFJlf',
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
				max_id : 76,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : 7313369347513026681,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -1696944152665540881,
			),
			bot_active_users : 42,
			bot_verification_icon : -5792594616075067258,
			send_paid_messages_stars : -841407795610232186,
		),
	),
);
```