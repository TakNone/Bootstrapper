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
		id : 7923333597640468873,
	),
	users : array(
		$client->userEmpty(
			id : 1614509784339119560,
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
			id : 8009119923583364658,
			access_hash : -1916370761973403315,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MSxHeoNdPTnqFvJy',
					reason : '21CDviJUfQ9MbtSI',
					text : 'JcaOQCWBI42YMLDT',
				),
			),
			bot_inline_placeholder : 'cZMXU04mHugW2893',
			lang_code : 'owz2i30UAFtS9vIZ',
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
				color : 75,
				background_emoji_id : -6044156212947839893,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : -1145064707850874144,
			),
			bot_active_users : 72,
			bot_verification_icon : -5890250294036240639,
			send_paid_messages_stars : -5273859541154762039,
		),
	),
);
```