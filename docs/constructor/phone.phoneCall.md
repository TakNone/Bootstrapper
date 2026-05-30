# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 225

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
		id : 8370875572177339679,
	),
	users : array(
		$client->userEmpty(
			id : -188666785756048393,
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
			id : 6858060503230250638,
			access_hash : 5850504950271613341,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SwIHKBC1Vx2WUf8L',
					reason : 'HyCTtrFNDfvigZBU',
					text : 'YHKMVSam9LgkpAQD',
				),
			),
			bot_inline_placeholder : 'EtjVgfkWP4ImxnhO',
			lang_code : 'o0EFkQb86v4zRI7U',
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
				max_id : 44,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : -3468194134317734725,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : 6939661566478526397,
			),
			bot_active_users : 51,
			bot_verification_icon : 1488108985674782657,
			send_paid_messages_stars : -3823349453351669491,
		),
	),
);
```