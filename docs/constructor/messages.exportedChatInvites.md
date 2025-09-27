# messages.exportedChatInvites

**Description** : *Info about chat invites exported by a certain admin*

**Layer** : 214

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
	count : 1,
	invites : array(
		$client->chatInviteExported(
			revoked : true,
			permanent : true,
			request_needed : true,
			link : 'dnxzWEKmyO7sZg1D',
			admin_id : 4483111468785353212,
			date : 69,
			start_date : 18,
			expire_date : 68,
			usage_limit : 13,
			usage : 63,
			requested : 78,
			subscription_expired : 92,
			title : 'kyFraNgv8OjExPlm',
			subscription_pricing : $client->starsSubscriptionPricing(
				period : 67,
				amount : -4211119864269203402,
			),
		),
		$client->chatInvitePublicJoinRequests(),
	),
	users : array(
		$client->userEmpty(
			id : -6089268867992049416,
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
			id : -3113267889984661491,
			access_hash : -3999371959186841539,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lPhvOSE9LoJVNpnU',
					reason : 'Zj86FeCwJQLAIPdy',
					text : '4P8Q35OKf1Su2gmN',
				),
			),
			bot_inline_placeholder : 'N2PzBJvUtE7pfaAg',
			lang_code : '8ygE65VjHSw9aiZY',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 64,
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -357652897879971257,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : 6426536122936318034,
			),
			bot_active_users : 6,
			bot_verification_icon : -2656652338479659319,
			send_paid_messages_stars : 8473288352113129217,
		),
	),
);
```