# phone.phoneCall

**Description** : *A VoIP phone call*

**Layer** : 229

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
		id : -2523981113642738519,
	),
	users : array(
		$client->userEmpty(
			id : 7301017250410625385,
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
			id : -7945370287727050836,
			access_hash : -8474274250606333929,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HVkteFlvBEq4Ihzo',
					reason : '7xRflTYhorytg8EB',
					text : 'ykXKNbI0mxVCPYnu',
				),
			),
			bot_inline_placeholder : '4O2GDwVdtN6ovb19',
			lang_code : '6iqgfkhLRKUVNzCZ',
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
				max_id : 31,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : -2310950897528676836,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 1074118146465930186,
			),
			bot_active_users : 12,
			bot_verification_icon : 4616399054555361526,
			send_paid_messages_stars : -5882879300539472552,
			linked_community_id : 1647276801822255202,
		),
	),
);
```