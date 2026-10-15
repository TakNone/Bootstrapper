# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 229

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
		link : 'pSnb0Y2QJeZXIG8B',
		admin_id : 3920789457537397351,
		date : 78,
		start_date : 91,
		expire_date : 31,
		usage_limit : 65,
		usage : 1,
		requested : 44,
		subscription_expired : 86,
		title : '54REGhIncYFUZXKs',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 48,
			amount : -4526307049415030854,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9210924165267446506,
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
			id : 6022625621142335483,
			access_hash : 6456192058710958239,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pKiQyJAOq0LarzhZ',
					reason : 'MBDIaWG8pOQy26h1',
					text : '9Uiur40P6IwX3RGy',
				),
			),
			bot_inline_placeholder : 'b2tzDrASYZy1GHq6',
			lang_code : '6jANsR5mgoeUp2vx',
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
				max_id : 15,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : 4188534901646026610,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : 4407591140206456662,
			),
			bot_active_users : 29,
			bot_verification_icon : 7445009021205710744,
			send_paid_messages_stars : -4141406067427835987,
			linked_community_id : -5324666199135744823,
		),
	),
);
```