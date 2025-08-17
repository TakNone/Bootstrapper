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
		link : 'ObxVYoIMSqnzEpfF',
		admin_id : -2376510448652848115,
		date : 69,
		start_date : 66,
		expire_date : 97,
		usage_limit : 85,
		usage : 12,
		requested : 32,
		subscription_expired : 80,
		title : 'YAduw7X4B5Cnl08H',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 9,
			amount : -6544666149812195197,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'sZId3VNG4KkrFulh',
		admin_id : -9144500222989656357,
		date : 43,
		start_date : 53,
		expire_date : 55,
		usage_limit : 28,
		usage : 100,
		requested : 69,
		subscription_expired : 64,
		title : 'IxnrwNhs0aTJvtzV',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 63,
			amount : -7876305161008263388,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7450376523563869915,
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
			id : -7672459038076400504,
			access_hash : 3323729326341286391,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'B345dqAYtyR1pr9G',
					reason : 'dJTHrjAySQbNFomZ',
					text : 'RaGToAnpQzkm2Y7U',
				),
			),
			bot_inline_placeholder : 'wcJtph04fZLG5vzP',
			lang_code : 'tscGBRlC2431d9ou',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 90,
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -3464326307604457628,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -4427192402004052360,
			),
			bot_active_users : 54,
			bot_verification_icon : -6812206438612230075,
			send_paid_messages_stars : 3779090017422708213,
		),
	),
);
```