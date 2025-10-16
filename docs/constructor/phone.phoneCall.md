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
		id : 8720970486905454271,
	),
	users : array(
		$client->userEmpty(
			id : 1696377145926169999,
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
			id : -2239280135863611797,
			access_hash : -1808843525167798913,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0pv7T8xrdLuyXSZY',
					reason : 'K2JIrAcjRD9xysLH',
					text : 'uSoTrikHN0BdtxQ1',
				),
			),
			bot_inline_placeholder : 'tOcdxH5eRDph2CQF',
			lang_code : 'CHVo2ZKmMdA48gRI',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 68,
			color : $client->peerColor(
				color : 17,
				background_emoji_id : 7700026869425564792,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : 141730308165560229,
			),
			bot_active_users : 16,
			bot_verification_icon : 7163403778487140932,
			send_paid_messages_stars : -562588679082256377,
		),
	),
);
```