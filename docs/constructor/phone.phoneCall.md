# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 211

```tl
phone.phoneCall#ec82e140 phone_call:PhoneCall users:Vector<User> = phone.PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_call</mark> | [`PhoneCall`](type/PhoneCall) | The VoIP phone call |
| <mark>users</mark> | [`Vector<User>`](type/User) | VoIP phone call participants |

---

## Type

[phone.PhoneCall](type/phone.PhoneCall)

---

## Example

```php
$phonePhoneCall = $client->phone->phoneCall(
	phone_call : $client->phoneCallEmpty(
		id : 2743756812827572860,
	),
	users : array(
		$client->userEmpty(
			id : 6024948608538110505,
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
			id : -5524853841830273842,
			access_hash : 3247365272274967982,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fEIDnK2MblGay5xu',
					reason : '3SiORInEMNQU0mec',
					text : 'e2cd6C5JKjh1ktDX',
				),
			),
			bot_inline_placeholder : 'zdPiSAbKtqu7WR51',
			lang_code : 'zeH7gxtFCU9ZpXyk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 84,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : 205699231155665223,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : 6989766031148052181,
			),
			bot_active_users : 20,
			bot_verification_icon : 9075200353763961223,
			send_paid_messages_stars : -9155842590072070000,
		),
	),
);
```