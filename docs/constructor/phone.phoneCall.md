# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 233

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
		id : 970349794263603282,
	),
	users : array(
		$client->userEmpty(
			id : -6405859803226116871,
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
			bot_forum_sidebar : true,
			id : 1295932107489355177,
			access_hash : -3655271152576395731,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FkZs1gGnbH2Npz7v',
					reason : 'NMOx8EcK197TJkma',
					text : 'K7JeNSndolHbYTGD',
				),
			),
			bot_inline_placeholder : 'uB5b4Vphi3wEeL0v',
			lang_code : 'grPyx7TNz8k10AjW',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 45,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 5981486775573295066,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : 7681385109487098533,
			),
			bot_active_users : 44,
			bot_verification_icon : -1569563373804182816,
			send_paid_messages_stars : -593912934641181248,
			linked_community_id : -5519119893741301143,
		),
	),
);
```