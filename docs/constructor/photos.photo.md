# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 214

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
		id : 783076173281266889,
	),
	users : array(
		$client->userEmpty(
			id : 2112490773914893146,
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
			id : -7583033838047887091,
			access_hash : -2241355700864174842,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ax0db6wS4fNRPmH3',
					reason : 'PTtFEWu9LG6wACpM',
					text : 'e5ms4wjIiqcHxGB8',
				),
			),
			bot_inline_placeholder : 'tU56BYEsw7NOpQ4M',
			lang_code : 'Ea56QLkMFuUmYxvA',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 59,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -3761433103813338016,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : -8374817477041588255,
			),
			bot_active_users : 23,
			bot_verification_icon : 5881717639062326543,
			send_paid_messages_stars : 3958861391974890710,
		),
	),
);
```