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
		id : -5650087765378353750,
	),
	users : array(
		$client->userEmpty(
			id : -8099617211204543937,
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
			id : 8483819146904619835,
			access_hash : -1958268055682620553,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8CNzi9sGI5yOVYtE',
					reason : 'fJhFNUT85AQnEBWZ',
					text : 'd0qDC7UJNLz42ZVl',
				),
			),
			bot_inline_placeholder : 'SCkHs4ldcyvVE8bD',
			lang_code : 'BXFDE0Rh1MWg9yb3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 86,
			color : $client->peerColor(
				color : 23,
				background_emoji_id : 3956679048726259984,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : -8105159115293863108,
			),
			bot_active_users : 47,
			bot_verification_icon : 8999885700439215416,
			send_paid_messages_stars : -3121399107321351260,
		),
	),
);
```