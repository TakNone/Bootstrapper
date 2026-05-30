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
		id : -5222947522658745985,
	),
	users : array(
		$client->userEmpty(
			id : 7819817457109215519,
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
			id : -803022635896772813,
			access_hash : -6161063532276400455,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ony0d7qLv32Srahs',
					reason : 'fP2uFshLRNl7Vmjz',
					text : '2yqe7na0LthsipE6',
				),
			),
			bot_inline_placeholder : '18hBwWtXdj64clkZ',
			lang_code : 'GRZj7TuHQ1LNF05n',
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
				color : 38,
				background_emoji_id : -1273593664335332685,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : -6690326736992400042,
			),
			bot_active_users : 69,
			bot_verification_icon : -6412210646374684938,
			send_paid_messages_stars : 5574604481452896493,
		),
	),
);
```