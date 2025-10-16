# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 216

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
		id : -5191933421879359070,
	),
	users : array(
		$client->userEmpty(
			id : -2623355156776467170,
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
			id : -1040605870166144346,
			access_hash : -1655635419824280387,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'O02hoPTwCydr1GRc',
					reason : 'nb6JBTCKVPm2OEkZ',
					text : 'uOyT4fzZIVkN6gap',
				),
			),
			bot_inline_placeholder : 'PpEwD6m7304sBbSH',
			lang_code : 'IFXwVOvnxBtWyZr1',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 27,
			color : $client->peerColor(
				color : 23,
				background_emoji_id : 1046854219248818118,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : 8650627986566667265,
			),
			bot_active_users : 92,
			bot_verification_icon : -2738539419186753138,
			send_paid_messages_stars : -5740117475109688562,
		),
	),
);
```