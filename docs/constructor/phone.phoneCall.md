# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 218

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
		id : -5087082661220070805,
	),
	users : array(
		$client->userEmpty(
			id : -8592268728077484700,
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
			id : -2743953106963521128,
			access_hash : -6412325629259643599,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CAgxuWIeo3dVPKFz',
					reason : 'Wd1VgR95kvZ0CEFu',
					text : 'tjHkARbSlaTI0BO5',
				),
			),
			bot_inline_placeholder : 'yQYk2hv1FuGctRoW',
			lang_code : 't1FuxXGvwO2cR6nH',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 29,
				background_emoji_id : 3395589126947572570,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -7803032588679701820,
			),
			bot_active_users : 35,
			bot_verification_icon : 2412837750119746569,
			send_paid_messages_stars : -4227290204006179874,
		),
	),
);
```