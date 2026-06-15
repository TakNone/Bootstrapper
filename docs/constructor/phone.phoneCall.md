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
		id : -1318087299015120252,
	),
	users : array(
		$client->userEmpty(
			id : -6172167202671156026,
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
			id : -6096048601199245045,
			access_hash : -8255090204802862244,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'JBD0qAQgFjVOZWcz',
					reason : 'D6tkvuLMe3z2IPOm',
					text : 'FGq0PnTr6aCRs5ZS',
				),
			),
			bot_inline_placeholder : 'uotY5n8y9PqUjcG3',
			lang_code : 'eA30Ofp2dCtR6zs8',
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
				max_id : 86,
			),
			color : $client->peerColor(
				color : 39,
				background_emoji_id : 4205175777479930275,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : -2971241322837776838,
			),
			bot_active_users : 37,
			bot_verification_icon : -6563507547237160070,
			send_paid_messages_stars : 8718146751743564084,
		),
	),
);
```