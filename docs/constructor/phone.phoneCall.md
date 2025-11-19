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
		id : -4875063611888583914,
	),
	users : array(
		$client->userEmpty(
			id : -9108000988432474382,
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
			id : 2183264792054135403,
			access_hash : 3959708802686205545,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jVuIzxSYmFWGqEKN',
					reason : '6bNm4akcDiLQYqAS',
					text : '4dgXOJVniQHsjvTz',
				),
			),
			bot_inline_placeholder : 'YJ13vyUIzRsZWCBm',
			lang_code : 'TSs3QYdy4I1XolDg',
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
				max_id : 79,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : -6669352479896212284,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : 6683552399425883193,
			),
			bot_active_users : 86,
			bot_verification_icon : -7673422129646339828,
			send_paid_messages_stars : -3703982328744202027,
		),
	),
);
```