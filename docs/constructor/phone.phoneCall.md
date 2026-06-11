# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 227

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
		id : 1839247835472910632,
	),
	users : array(
		$client->userEmpty(
			id : 2874713000509938974,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 5211498936814127904,
			access_hash : -8973409434423724935,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4v6jYJlLdCaR3shW',
					reason : 'ilqAVX9O8psyJWPr',
					text : 'ox6Rp3NXdu8IgGBJ',
				),
			),
			bot_inline_placeholder : 'MTUC4uiaAfesOGPw',
			lang_code : 'rkdqEWZOGaRMtvYh',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 35,
			),
			color : $client->peerColor(
				color : 7,
				background_emoji_id : -843264130224337430,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : -1366468674377423446,
			),
			bot_active_users : 54,
			bot_verification_icon : 8430106596969145460,
			send_paid_messages_stars : -8476763531723725349,
		),
	),
);
```