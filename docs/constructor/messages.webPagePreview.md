# messages.webPagePreview

**Layer** : 211

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
			id : 6575088707618150824,
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
			id : 4705587795326957344,
			access_hash : -4795636126775393899,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bLSAFvaHV2su301y',
					reason : 'UkG8DazIs6hPHS2p',
					text : 'UzMXpQovjHgNJRFV',
				),
			),
			bot_inline_placeholder : 'vf0gjF1pTEDdocJa',
			lang_code : 'LAsHlYURK6oEBc8i',
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
				color : 40,
				background_emoji_id : 2687049514249262342,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : -8405646197090596827,
			),
			bot_active_users : 69,
			bot_verification_icon : 8877152977049922783,
			send_paid_messages_stars : -5192588502143207921,
		),
	),
);
```