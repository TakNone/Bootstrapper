# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 211

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
		link : 'UTd45BztkfMZL7Q1',
		admin_id : -6828319045951910166,
		date : 90,
		start_date : 62,
		expire_date : 14,
		usage_limit : 76,
		usage : 38,
		requested : 0,
		subscription_expired : 37,
		title : 'TkMBERCIpZwOzoqU',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 97,
			amount : 5612774211092523205,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'Xp5tR6cg4aW8IST0',
		admin_id : 6516386122418788783,
		date : 55,
		start_date : 2,
		expire_date : 96,
		usage_limit : 49,
		usage : 75,
		requested : 69,
		subscription_expired : 32,
		title : 'X1KE3JWtjCnwYSMZ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 60,
			amount : -3950575432084343278,
		),
	),
	users : array(
		$client->userEmpty(
			id : 9176082845958026859,
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
			id : -655474448134407451,
			access_hash : -7631397592880140855,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'D9SsNHaBpW1jAnVM',
					reason : 'Mwt5TNhkDEYPHBKn',
					text : 'aB4bGmWiVPDhK9IS',
				),
			),
			bot_inline_placeholder : 'i0GWFtuI7nROlQTL',
			lang_code : 'wChgadyiYUI8DWu7',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 19,
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -8344630864184253047,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : -913608410828697339,
			),
			bot_active_users : 47,
			bot_verification_icon : -2770940749104194472,
			send_paid_messages_stars : 7301025833836631777,
		),
	),
);
```