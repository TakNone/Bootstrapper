# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 211

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
		id : 8182841668347838956,
	),
	users : array(
		$client->userEmpty(
			id : 8603710286869657107,
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
			id : 4706118910285003980,
			access_hash : -5816746346131668599,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZgFWMQjCiRIc7GJb',
					reason : 'lvMtAX0hqg73Iuwz',
					text : '0LW8TPMKfeujhv6b',
				),
			),
			bot_inline_placeholder : 'JeM58yi2zBlgUZPs',
			lang_code : 'fkFb1Oh6LiRgH3N9',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 95,
			color : $client->peerColor(
				color : 25,
				background_emoji_id : -3746197547804556998,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : -4038379640181627752,
			),
			bot_active_users : 68,
			bot_verification_icon : 8214420275335478971,
			send_paid_messages_stars : 9119302345257722590,
		),
	),
);
```