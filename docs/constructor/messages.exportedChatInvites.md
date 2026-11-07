# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 233

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
	count : 70,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'WjeFi9KhQPAHTlk6',
			admin_id : -7267128633321705041,
			date : 66,
			start_date : 21,
			expire_date : 71,
			usage_limit : 44,
			usage : 96,
			requested : 40,
			subscription_expired : 55,
			title : 'lbn8sLXD6AZCxwUS',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 87,
				amount : 6652434076592172578,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : 5535587222582294847,
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
			id : -4838668368391503064,
			access_hash : 6949898999390450225,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Y9qB4fzNy2wcioI8',
					reason : '6SmlkLdnNgJzMHUX',
					text : 'KcX5G7SJrymToVqu',
				),
			),
			bot_inline_placeholder : '1LcNpUIYrvMdDSm4',
			lang_code : 'sPkRIaVpCXJl6DAv',
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
				max_id : 44,
			),
			color : $client->peerColor(
				color : 82,
				background_emoji_id : 3687505178461861309,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 4975658633053306918,
			),
			bot_active_users : 62,
			bot_verification_icon : 7581645626378571646,
			send_paid_messages_stars : -824308772283195825,
			linked_community_id : -4581604707862074424,
		),
	),
);
```