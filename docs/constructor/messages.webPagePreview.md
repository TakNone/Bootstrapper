# messages.webPagePreview

**Layer** : 214

```tl
messages.webPagePreview#b53e8b21 media:MessageMedia users:Vector<User> = messages.WebPagePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>media</mark> | [`MessageMedia`](type/MessageMedia) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.WebPagePreview](type/messages.WebPagePreview)

---

## Example

```php
$messagesWebPagePreview = $client->messages->webPagePreview(
	media : $client->messageMediaEmpty(),
	users : array(
		$client->userEmpty(
			id : -3191907165046739817,
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
			id : -6987124665860009396,
			access_hash : 805225370198913724,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HfYyeFko4lMXGziV',
					reason : '8mtnc7UoMQbviOS0',
					text : 'Ik2E5jO4GqiKdpYf',
				),
			),
			bot_inline_placeholder : 'Gedf42RFzqOpbDIl',
			lang_code : 'NT38aUwF2Z1eBXhV',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 58,
			color : $client->peerColor(
				color : 73,
				background_emoji_id : 8342316781618204027,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -6269124112189993338,
			),
			bot_active_users : 19,
			bot_verification_icon : -4783541571320061560,
			send_paid_messages_stars : 7767950968283372252,
		),
	),
);
```