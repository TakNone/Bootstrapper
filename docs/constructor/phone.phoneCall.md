# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 222

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
		id : -443007182122532726,
	),
	users : array(
		$client->userEmpty(
			id : -4515410428854975945,
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
			id : -2964434858041689655,
			access_hash : -6552619750312198588,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '48OZE3WNnsA1ex5K',
					reason : 'FXu0GnRlEz73vx4f',
					text : 'c5KSqstwYMWRfl9x',
				),
			),
			bot_inline_placeholder : '2xU38hsPnRpyJito',
			lang_code : 'd9NqlKHL01wMxtBI',
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
				max_id : 55,
			),
			color : $client->peerColor(
				color : 72,
				background_emoji_id : -495947394816890724,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : -5697566880366122428,
			),
			bot_active_users : 72,
			bot_verification_icon : 567827755823971427,
			send_paid_messages_stars : -8775232407830010259,
		),
	),
);
```