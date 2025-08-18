# messages.exportedChatInvite

**Description** : *Info about a chat invite*

**Layer** : 211

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
		link : 'LKZyITnF8x46QEXG',
		admin_id : 4174576749917316175,
		date : 87,
		start_date : 95,
		expire_date : 95,
		usage_limit : 87,
		usage : 87,
		requested : 94,
		subscription_expired : 62,
		title : '2LW3vdjUgbtnpoOC',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 71,
			amount : -5428920828379908839,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4614882134109417245,
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
			id : -7786677875160132967,
			access_hash : 3462826151786737230,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UqZsD13eSWHcVBIh',
					reason : 'FxorDi2wQNSmL39e',
					text : 'UWflAC53iy9aMphZ',
				),
			),
			bot_inline_placeholder : '0zaEUGlxgCuAe27N',
			lang_code : 'gUsn8fRb9rBlxPOp',
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
				color : 89,
				background_emoji_id : 195178863332616368,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : -3864268544447259822,
			),
			bot_active_users : 90,
			bot_verification_icon : -1308426473880864147,
			send_paid_messages_stars : 2720460969370710499,
		),
	),
);
```