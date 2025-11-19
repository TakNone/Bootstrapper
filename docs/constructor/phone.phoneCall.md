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
		id : -6949007408748855678,
	),
	users : array(
		$client->userEmpty(
			id : 1859060509990287318,
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
			id : 3758062583953160625,
			access_hash : -1339916349849688089,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BleFkSiKjr7Y3LME',
					reason : 'TUGyVeqWZwvdcSHf',
					text : 'SOnBu8hpvbKmENf1',
				),
			),
			bot_inline_placeholder : 'crNzXyKD1OB0mfQA',
			lang_code : 'qLNR3E7hMCakcQUr',
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
				max_id : 92,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -5096643464704394269,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : 4643283558518178433,
			),
			bot_active_users : 12,
			bot_verification_icon : 5407270416381061484,
			send_paid_messages_stars : 5433125801128852517,
		),
	),
);
```