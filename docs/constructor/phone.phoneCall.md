# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 214

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
		id : -6000689949591201854,
	),
	users : array(
		$client->userEmpty(
			id : -8437136840976154981,
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
			id : -8160535820998698666,
			access_hash : -478068696024930348,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'djfMC6oPSNYVKFgq',
					reason : '7pKLDsqbSOfFAZzj',
					text : 'YmrIF2tnhMzl367B',
				),
			),
			bot_inline_placeholder : 'pVSYhJBj8vPQywW1',
			lang_code : 'fSHG3RxUi2wpjBnr',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 82,
				background_emoji_id : 7874218214477134599,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : 1352036341388731182,
			),
			bot_active_users : 100,
			bot_verification_icon : 8030432973088405014,
			send_paid_messages_stars : 3308966520047678932,
		),
	),
);
```