# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 216

```tl
photos.photo#20212ca8 photo:Photo users:Vector<User> = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>photo</mark> | [`Photo`](type/Photo) | Photo |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[photos.Photo](type/photos.Photo)

---

## Example

```php
$photosPhoto = $client->photos->photo(
	photo : $client->photoEmpty(
		id : 8358629655092818871,
	),
	users : array(
		$client->userEmpty(
			id : -2547800237293691363,
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
			id : 5218144636135308567,
			access_hash : 8363770328149294493,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'skxV4ji5bBZKuqfE',
					reason : 'OaN0LpnHrGxZqEY3',
					text : 'wf9Pq0MLXGINDvg2',
				),
			),
			bot_inline_placeholder : 'T9vZ1g27ADYXBEoa',
			lang_code : 'R2fdsgaTUKrGxzlw',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 79,
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -3500892905601942341,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : 5588230765542083113,
			),
			bot_active_users : 71,
			bot_verification_icon : 517839395419735999,
			send_paid_messages_stars : -8172695230840154375,
		),
	),
);
```