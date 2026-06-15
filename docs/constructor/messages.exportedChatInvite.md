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
		link : 'Y5yMkBa6vP2I3Q9F',
		admin_id : -7030717909871266577,
		date : 61,
		start_date : 62,
		expire_date : 65,
		usage_limit : 13,
		usage : 60,
		requested : 7,
		subscription_expired : 18,
		title : 'rUhLBiKYsDG5f2oZ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 46,
			amount : -2313257929378036599,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8931165492669919631,
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
			id : 9115676326768894129,
			access_hash : 6951949647196872881,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DKLjqZnNPIeYo9gB',
					reason : 'DKG3oThVclmx7JBs',
					text : 'EWSdstevcgG9UjyD',
				),
			),
			bot_inline_placeholder : 'OGwxqPV7FY8jL2CR',
			lang_code : 'E0QmVSe2A3CZHsW1',
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
				max_id : 37,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 2313408097541153040,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -3934441353577293290,
			),
			bot_active_users : 56,
			bot_verification_icon : 6641030461342502060,
			send_paid_messages_stars : 2025389226631125618,
		),
	),
);
```